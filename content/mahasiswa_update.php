<?php
   
    $nim = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);       
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $jurusan = filter_var($_POST['jurusan'], FILTER_SANITIZE_STRING);
    $alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);

    if (empty($nim) || empty($nama) || empty($jurusan) || empty($alamat)) {
        echo "<script>
            alert('Data Tidak Boleh Kosong!');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
    else
    {
        $simpan = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat' WHERE nim = '$nim'");

        if ($simpan) 
        {
            echo "<script>
                alert('Data Berhasil Diubah!');
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

?>