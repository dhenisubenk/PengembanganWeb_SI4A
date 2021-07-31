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
            <div class="card-body">
                <form action="index.php?page=simpan_mhs"  method="POST">
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
                </form>

                <hr>

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>JURUSAN</th>
                            <th>ALAMAT</th>
                            <th width="15%">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                            while($r = mysqli_fetch_array($sql)){
                                echo "
                                    <tr>
                                        <td>$r[nim]</td>
                                        <td>$r[nama]</td>
                                        <td>$r[jurusan]</td>
                                        <td>$r[alamat]</td>
                                        <td>
                                            <a href='index.php?page=mahasiswa_edit&nim=$r[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                            <a href='index.php?page=mahasiswa_delete&nim=$r[nim]' onclick=\"return confirm('Hapus?')\" class='btn btn-sm btn-danger'>Delete</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>