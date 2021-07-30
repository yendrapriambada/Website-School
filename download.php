<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - SMAN 5 Ambis</title>
    <link rel="stylesheet" href="StyleScript/style.css">
    <link rel="stylesheet" href="StyleScript/styleHF.css">
    <link rel="stylesheet" href="StyleScript/style-download.css">
    <link rel="icon" href="Asset/Logo/Hat, Halloween, Witch, Wizard, Magic.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <header style="background-image: url(Asset/asset-images/wI2XL6PsXzQ.png);">
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
                <h1>Download</h1>    
            </div>
        </div>
    </header>




    <section class="container">
        <p><b style="color: #38687F; font-size: 40px;">Download</b></p>
        <p id="garis"></p>
        <!-- CONTENT TAMPIL DATA DOWNLOAD DARI DATABASE -->
        <div class="content">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama File</th>
                        <th>Format File</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $files = scandir("uploads");
                    for ($a = 2; $a < count($files); $a++){
                        $extension = pathinfo($files[$a], PATHINFO_EXTENSION);
                        
                    ?>
                    <tr>
                         
                        <td><?= $a-1; ?></td>
                        <td style="overflow: hidden; width: 10px;"><?php echo $files[$a]; ?></td>
                        <td><?php echo $extension; ?></td>
                        <td><a href="uploads/<?php echo $files[$a]; ?>" class="btn btn-primary"download="<?php echo $files[$a]; ?>">Download</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <br>

    <section class="wrap-ads">
        <img class="img-ads" src="Asset/asset-desain/ads.png">
        <a href="psb.php"><button class="btn">Daftar Sekarang</button></a>
    </section> 
    <section id="gallery">
        <div class="info-box">
            <img class="nav-brand" src="Asset/Logo/logo.svg" alt="logo">
            <h3>Jl. Angkasa Semesta, Kp. Rajawali Kec. Bojong Gede Bogor</h3>
            <a href=""><i class="far fa-envelope"></i>&nbsp;info@sman5ambis.sch.id</a><br>
            <a href=""><i class="fas fa-phone"></i>&nbsp;+6281283397013</a>
        </div>
        <div class="galery">
            <img src="Asset/asset-images/gallery1.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery2.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery3.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery1.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery2.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery3.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery1.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery2.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery3.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery1.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery2.jpg" alt="gallery">
            <img src="Asset/asset-images/gallery3.jpg" alt="gallery">
        </div>
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
    <script src="script.js"></script>
</body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
