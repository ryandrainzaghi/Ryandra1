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
    <link rel="stylesheet" href="css/materi.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topik 4</title>
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
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
                <?php if(isset($_SESSION["login"])){?>
                <li class="nav-item ms-5 ">
                <div class="btn1">
                <div class="btn-group">
                    <img src="img/profile.png" alt="" class="profile">
                    <button type="button" class="me-1 btn btn1 text-light fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['nama'] ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="text-center"><a href="logout.php" class="text-danger">Logout</a></li>
                    </ul>
                </div>
                </div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    </nav>

    <!--content-->
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-9 p-5">
                <!--subbab1-->
                <div class="topik4h1 h1"><p class="p1 py-2">MEMAHAMI DAMPAK KEKERASAN SEKSUAL</p></div>
                <div class="container-fluid btopik41"></div>
                <p class="py-4">Pada bab ini kita akan mempelajari konsep paksaan, memahami dampak yang dialami korban, dan belajar untuk memberikan respons yang tepat.</p>
                <br>
                <!--subbab2-->
                <div class="topik4h1 h1"><p class="p1 py-2">DEFINISI DAN BENTUK PAKSAAN</p></div>
                <p class="pt-4">Paksaan adalah penyalahgunaan kekuasaan dan/atau cara mencoba mengendalikan orang lain untuk melakukan sesuatu yang bertentangan dengan keinginannya. Paksaan juga merupakan tindakan yang bertentangan dengan Profil Pelajar Pancasila terkait dengan akhlak kepada sesama. Paksaan dalam ranah kekerasan seksual dapat melibatkan:</p>
                <div class="textb1 p-3">
                    <ul>
                        <li>Kekuatan fisik,</li>
                        <li>Tindakan yang mengintimidasi dan mengancam,</li>
                        <li>Penggunaan alkohol atau obat-obatan untuk membuat seseorang melakukan aktivitas seksual yang tidak diinginkan.</li>
                    </ul>
                </div>
                <br>
                <br>
                <!--subbab3-->
                <div class="topik4h1 h1"><p class="p1 py-2">MEMAHAMI REAKSI TUBUH TERHADAP TRAUMA</p></div>
                <p class="pt-4">Dalam bukuThe Body Keeps the Score, Bessel Van Der Kolk menjelaskan bahwa tubuh merekam semua pengalaman yang terjadi sehingga otak dan tubuh dapat bereaksi terhadap kejadian tertentu yang terjadi tiba-tiba, mengejutkan, dan traumatis.</p>
                <p class="pb-4">Memahami kondisi ini dapat membantu kita memproses pengalaman diri sendiri serta merespons kekerasan seksual dengan empati dan dukungan. Efek trauma dapat terjadi ketika seseorang menyaksikan kekerasan, selamat dari kekerasan, mengalami ketidakadilan sosial, terlibat dalam kecelakaan atau bencana,dan memiliki pengalaman konflik.</p>
                <br>
                <!--subbab4-->
                <div class="topik4h1 h1"><p class="p1 py-2">MEMAHAMI KEKERASAN DI LINGKUNGAN PENDIDIKAN</p></div>
                <p class="pt-4">Dampak kekerasan seksual terhadap korban dan lingkungannya sangatlah besar, tetapi perbuatan kekerasan seksual sulit untuk dibuktikan secara hukum. Situasi pembuktian yang sulit semakin menyudutkan korban dan seringkali membuat korban dipandang melakukan tuduhan palsu. Banyak korban kekerasan seksual yang kemudian malah dilaporkan balik atas tuduhan pencemaran nama baik karena tidak memiliki bukti yang kuat. Dalam situasi seperti ini, respons kita sebagai orang yang ada di sekitar korban atau orang yang dipercaya untuk mendengarkan cerita korban menjadi penting dalam mendukung pemulihan mereka.</p>
                <p class="pb-4">Mendukung korban kekerasan seksual juga merupakan perwujudan Profil Pelajar Pancasila dimensi Bergotong Royong. Semangat saling membantu telah ada dalam budaya Indonesia sejak dahulu dan perlu untuk terus diaplikasikan dalam kehidupan sehari-hari, terutama untuk membantu mereka yang berada dalam posisi rentan.</p>
            </div>
                <!--sidebar-->
            <div class="col-3 py-5 px-3">
                <div class="hh2 h1"><p class="p1 py-2">FILOSOFI </p></div>
                <div class="cardtop"></div>
                    <a href="materi1.php" class="cardbg">
                    <div class="my-3 card1">
                        <div class="imgc1"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 1: FILOSOFI PENDIDIKAN DI INDONESIA</p>
                        <hr>
                        </div>
                    </div>
                    </a>
                <a href="materi2.php" class="cardbg">
                    <div class="my-3 card1">
                        <div class="imgc2"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 2: MENGENAL KEKERASAN</p>
                        </div>
                        <hr>
                    </div>
                </a>
                <a href="materi3.php" class="cardbg1">
                    <div class="my-3 card1">
                        <div class="imgc3"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 3: MEMAHAMI KEKERASAN SEKSUAL</p>
                        </div>
                        <hr>
                    </div>
                </a>                
            </div>
        </div>
    </div>

    <!--Quiz-->
    <div class="container-fluid quiz px-5 py-5">
        <div class="hh7 h1 mb-4"><p class="p2 p-1">Quiz</p></div>
        <p class="textbold1 mx-5 pb-4">Setelah menyelesaikan 4 topik di dalam modul ini, saatnya untuk mengisi ujian pasca pembelajaran untuk melihat pemahaman kita akan pencegahan dan penanganan kekerasan seksual.</p>
        <a href="" class="button1 p-2">Klik di sini untuk membuka Quiz</a>
    </div>

    <!--footer-->
    <div class="bawah"></div>
    <div class="footer p-1">The Statistikers</div>
</body>
</html>