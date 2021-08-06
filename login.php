<?php
    session_start();
    require_once 'config/koneksi.php';
?>
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
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header">Halaman Login</div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                Masukan Username dan Password.
                            </div>
                            <?php  
                                if (isset($_POST['login'])) 
                                {
                                    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                                    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

                                    //cek inputan kosong
                                    if (empty($username) || empty($password)) {
                                        echo '<div class="alert alert-danger">
                                                Username / Password tidak boleh kosong
                                            </div>';
                                    }
                                    else
                                    {
                                        //cek username
                                        $sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
                                        $count = mysqli_num_rows($sql); // mengembalikan jml row dari query

                                        if ($count > 0) {
                                            # username ada...
                                            $data = mysqli_fetch_array($sql);
                                            # cek password...
                                            if (password_verify($password, $data['password'])) {
                                                # true...
                                                $_SESSION['login_websi4a'] = $data['username'];
                                                //echo "<meta http-equiv='refresh' content='1; url=index.php'>";
                                                echo "<script>
                                                        alert('Selamat Datang $username');
                                                        window.location.href = 'index.php';
                                                    </script>";
                                            }
                                            else
                                            {
                                                # false
                                                 echo '<div class="alert alert-danger">
                                                        Password Salah.
                                                    </div>';
                                            }
                                        }else{
                                            # username tidak ada
                                             echo '<div class="alert alert-danger">
                                                Username Salah.
                                            </div>';
                                        }
                                    }
                                }

                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" required="">
                                </div>
                                <div class="form-group mt-2 d-grid">
                                    <button class="btn btn-primary" name="login">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>