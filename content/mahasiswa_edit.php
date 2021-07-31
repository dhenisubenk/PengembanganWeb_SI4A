<?php
    if (isset($_GET['nim'])) 
    {
        $nim = $_GET['nim'];
        # cari data berdasarkan nim...
        $cari = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $jumlah = mysqli_num_rows($cari); // mengembalikan jumlah baris yang dihasilkan oleh queri

        if ($jumlah > 0) {
            $data = mysqli_fetch_array($cari);

            //var_dump($data);
        }
        else
        {
            echo "<script>
                window.location.href = 'form.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
                window.location.href = 'form.php';
            </script>";
    }
        
?>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <nav class="nav flex-column">
                    <a class="nav-link active" aria-current="page" href="#">Sistem informasi</a>
                    <a class="nav-link" href="#">Teknik Informatika</a>
                    <a class="nav-link" href="#">Manajemen Informatika</a>
                    <a class="nav-link" href="#">Komputerisasi Akuntansi</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                <form action="index.php?page=mahasiswa_update"  method="POST">
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?= $data['nim']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $data['nama']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?= $data['jurusan']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $data['alamat']?>">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  