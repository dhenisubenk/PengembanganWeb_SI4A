<?php  
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);       
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $level = filter_var($_POST['level'], FILTER_SANITIZE_STRING);

    $password = password_hash($pass, PASSWORD_DEFAULT);

    // 2 arah -> encrypt -> decrypt
    // 1 arah -> hash

    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $file_size = $_FILES['foto']['size'];
    $file_type = $_FILES['foto']['type'];

    //gambar.PNG
    $step1 = strtolower($file_name); //gambar.png
    $step2 = explode(".", $step1);	 // ["gambar","png"]
    $tipe = end($step2);			 // png

	if (empty($username) || empty($password) || empty($level)) {
        echo "<script>
            alert('Data Tidak Boleh Kosong!');
            window.location.href = 'index.php?page=user';
        </script>";
    }
    else
    {
    	//cek tipe file
    	if ($tipe != "png" && $tipe != "jpg" && $tipe != "jpeg") 
    	{
    		echo "<script>
	            alert('Tipe File Tidak Support!');
	            window.location.href = 'index.php?page=user';
	        </script>";
    	}
    	else if ($file_size > 2000000)  //cek ukuran file
    	{	
    		echo "<script>
	            alert('Tipe File Boleh Lebih > 2MB!');
	            window.location.href = 'index.php?page=user';
	        </script>";
    	}
    	else
    	{
    		$simpan = mysqli_query($con, "INSERT INTO user (username, password, level, foto) VALUES ('$username','$password','$level','$file_name')");

	        if ($simpan) 
	        {
	        	move_uploaded_file($file_tmp, "img/".$file_name);
	            echo "<script>
	                alert('Data Berhasil Disimpan!');
	                window.location.href = 'index.php?page=user';
	            </script>";
	        }
	        else
	        {
	            echo "<script>
	                alert('Error. Terjadi Kesalahan');
	                window.location.href = 'index.php?page=user';
	            </script>";
	        }
    	}
    }
?>