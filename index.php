<?php 
    session_start();
    require_once 'config/koneksi.php';

    if (!isset($_SESSION['login_websi4a'])) {
         echo "<script>
                window.location.href = 'login.php';
            </script>";
    }
    else
    {
        $username = $_SESSION['login_websi4a'];
        $sqlx = mysqli_query($con, "SELECT id,username,level,foto FROM user WHERE username = '$username'");
        $user = mysqli_fetch_array($sqlx);

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
            <div class="row mb-3 mt-3">
                <div class="col-md-12">
                    <?php require_once 'inc/menu.php'; ?>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                $content = "content";
                $page = @$_GET['page'];
                if ($page == "") { //index.php
                    require_once "$content/home.php";
                }else{              //index.php?page=mahasiswa
                    require_once "$content/$page.php";
                }
            ?>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<?php } ?>