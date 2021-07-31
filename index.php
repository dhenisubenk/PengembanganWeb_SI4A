<?php 
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