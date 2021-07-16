<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: #eee;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row mb-3 mt-3">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <a class="navbar-brand" href="#">STIKOM<strong>AMBON</strong></a>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Profil</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="kontak.html">Kontak</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                              <a href="login.html" class="btn btn-success">Login</a>
                            </div>
                          </div>
                        </div>
                    </nav>
                </div>
            </div>
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
                            <form action="week9.php"  method="GET">
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
                                    <button type="submit" class="btn btn-success">Submit</button>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1923123</td>
                                        <td>Mahmud</td>
                                        <td>Teknik Informatika</td>
                                        <td>Ambon</td>
                                    </tr>
                                    <tr>
                                        <td>1923124</td>
                                        <td>Tarjo</td>
                                        <td>Teknik Informatika</td>
                                        <td>STAIN</td>
                                    </tr>
                                    <tr>
                                        <td>1923125</td>
                                        <td>Susi</td>
                                        <td>Sistem Informasi</td>
                                        <td>Ambon</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>