<?php
require 'Function/function.php'; //memanggil file functions
$artikel = query("SELECT * FROM artikel");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="StyleScript/styleHome.css">
    <link rel="stylesheet" href="StyleScript/styleHF.css">
    <link rel="icon" href="Asset/Logo/Hat, Halloween, Witch, Wizard, Magic.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <header style="background-image: url(Asset/asset-images/back2.jpg);">
        <div class="headline">
            <a href=""><i class="fas fa-phone"></i>&nbsp;+6281283397013</a>
            <a href=""><i class="far fa-envelope"></i>&nbsp;info@sman5ambis.sch.id</a>
        </div>
        <nav aria-label="Main navigation">
            <img src="Asset/Logo/logo2.svg" alt="">
            <button class="navbar-toggler ms-auto p-2 bd-highlight p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <li><a href="home.html">Home</a></li>
                <li><a href="history.html">History</a></li>
                <li class="nav-item dropdown">
                    <a href="#"  class="nav-link dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0px;">Profile</a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="visimisi.html">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="about.html">Tentang Sekolah</a></li>
                        <li><a class="dropdown-item" href="strukturPemimpin.html">Struktur Pimpinan</a></li>
                        <li><a class="dropdown-item" href="salamredaksi.html">Salam Redaksi</a></li>
                    </ul>
                </li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="psb.php">PSB</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="kontak.html">Kontak</a></li>
                <li><a href="search.php"><i class="fas fa-search"></i></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0px;">
                        <img src="Asset/Profil/images.jfif" alt="profil" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="login.php">Log In</a></li>
                        <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                        <li><a class="dropdown-item" href="halaman_user/logout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Artikel</h1>
            </div>
        </div>
    </header>

    <!-- CONTENT -->
    <section id="main">
        <?php foreach( $artikel as $row ): ?>
        <div class="content-wrap" id="content-artikel">
            <img src = "halaman_admin/img_artikel/<?= $row["foto"]; ?>" width="300" alt="konten">
            <div class="content">
                <h5><?= $row["tanggal"]; ?></h5>
                <h4><?= $row["judul"]; ?></h4><br>
                <a href="artikel_content.php?id=<?= $row["id"];?>" >Read More </a>
            </div>
        </div>
        <?php endforeach; ?>
    </section>


    <footer>
        <div class="school-sos">
            <h5>Find Us!</h5>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCMfUrxep6EiLooS9cF1PyuA"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/kemakom/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/UPIfess?s=08"><i class="fab fa-facebook"></i></a>
            <h5>&copy;Copyright All Right</h5>
        </div>
        <div class="designer-box">
            <div class="sos-box">
                <img src="Asset/Profil/yendra.jpeg" alt="profil">
                <h5>M Yendra</h5>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href="https://web.facebook.com/mochyendra"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="sos-box">
                <img src="Asset/Profil/warda.jpeg" alt="profil">
                <h5>Warda A</h5>
                <a href="https://www.instagram.com/wardaazr/"><i class="fab fa-instagram"></i></a>
                <a href="https://web.facebook.com/wardazzahra"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="sos-box">
                <img src="Asset/Profil/putri.jpeg" alt="profil">
                <h5>Putri Z</h5>
                <a href="https://www.instagram.com/putrizukhruf/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100031661610967"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </footer> 
    <script src="StyleScript/script.js"></script>
</body>
</html>