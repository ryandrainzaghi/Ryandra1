<?php
session_start();

require 'koneksi.php';

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="css/nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/kontak.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid nav1">
        <p class="py-1 n1">Pencegahan dan Penanganan Kekerasan Seksual - Tahun 2024</p>
    </div>

    <nav class="navbar nav2 navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <img src="img/logospada.png" alt="Logo Spada" class="logo ps-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end pe-3" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item ms-5 py-1">
                <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item ms-5 py-1">
                <a class="nav-link" href="index.php#materi">Materi</a>
                </li>
                <li class="nav-item ms-5 py-1">
                <a class="nav-link" href="quiz.php">Quiz</a>
                </li>
                <li class="nav-item ms-5 py-1">
                <a class="nav-link" href="anggota.php">Anggota Kelompok</a>
                </li>
                <li class="nav-item ms-5 py-1">
                <a class="nav-link" href="kontak.php">Kontak Kami</a>
                </li>
                <li class="nav-item ms-5 ">
                <div class="btn1 d-inline-block">
                <div class="btn-group">
                    <img src="img/profile.png" alt="" class="profile">
                    <button type="button" class="me-1 btn btn1 text-light fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['nama'] ?>
                    </button>
                    <ul class="dropdown-menu w-100 dropdown-menu-end">
                        <li class="text-center dropdown"><a href="logout.php" class="text-danger">Logout</a></li>
                    </ul>
                </div>
                </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <!--ANGGOTA-->
    <div class="container-fluid py-5" id="materi">
        <div class="hh4 h1"><p class="p1 py-2">Kontak Kami</p></div>
        <div class="ig mt-5">
            <a href="https://www.instagram.com/ppks_polimedia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="linkppks">
                <p class="ppks1">Instagram</p>
                <div class="kontak"></div>
                <p class="ppks pt-3">@ppks_polimedia</p>
            </a>
        </div>
    </div>

    <!--footer-->
    <div class="bawah"></div>
    <div class="footer1 p-1">The Statistikers</div>
</body>
</html>