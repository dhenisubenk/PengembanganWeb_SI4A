<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "web_si4a";

    $con = mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal : ".mysqli_connect_error();
    }
?>