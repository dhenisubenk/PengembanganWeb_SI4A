<?php  
	if (isset($_GET['nim'])) 
	{
		$nim = $_GET['nim'];
		$sql = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");
		if ($sql) 
        {
            echo "<script>
                alert('Data Berhasil Dihapus!');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        }
        else
        {
            echo "<script>
                alert('Error. Terjadi Kesalahan');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        }
	}
	else{
		echo "<script>
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
	}
?>