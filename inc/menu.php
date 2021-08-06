<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">STIKOM<strong>AMBON</strong></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <div class="navbar-nav">
            <?php  
              if ($user['level'] == "Admin") 
              {
            ?>
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                <a class="nav-link" href="index.php?page=user">Pengguna</a>
                <a class="nav-link" href="#">Kontak</a>
                <a class="nav-link" href="logout.php">Logout</a>
            <?php  
              }
              else
              {
            ?>
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
            <a class="nav-link" href="#">Kontak</a>
            <a class="nav-link" href="logout.php">Logout</a>
            <?php } ?>
        </div>
      </div>
    </div>
</nav>


<!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a>
<a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
<?php //if ($user['level'] == "Admin"): ?>
<a class="nav-link" href="index.php?page=user">Pengguna</a>
<?php //endif ?>
<a class="nav-link" href="#">Kontak</a>
<a class="nav-link" href="logout.php">Logout</a> -->