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
    <link rel="stylesheet" href="css/menu.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Statistikers</title>
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

    <div class="container">
        <!-- Carousel -->
        <div id="demo" class="carousel py-5 slide" data-bs-ride="carousel">

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel1 px-5">
                        <div class="container incarousel">
                        <div class="col-sm-8">
                        <h3 class="pb-3">SELAMAT DATANG SOBAT PPKS!</h3>
                        <p>Apakah kamu tau apa itu Kekerasan Seksual?</p> 
                        <p>Kekerasan Seksual adalah perilaku yang melibatkan pemaksaan atau penyalahgunaan seksual terhadap seseorang tanpa persetujuan mereka. </p>
                        </div>
                        <div class="col-sm-4"></div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel2 px-5">
                        <div class="container incarousel">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-7">
                        <h3 class="pb-3">HUBUNGI SATGAS DI KAMPUS KALIAN</h3>
                        <p>Apabila kamu merasa menjadi korban kekerasan seksual, kamu bisa menghubungi SATGAS PPKS di kampus kamu</p> 
                        </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel3 px-5">
                        <div class="container incarousel">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-7">
                        <h3 class="pb-3">PENTINGNYA WEBSITE BAGI PEMBELAJARAN</h3>
                        <p>Lewat website PPKS ini kita bisa mengetahui tentang penting nya mengetahui apa itu Kekerasan Seksual dan cara menanganinya.</p> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!--pengantar-->
        <div class="pt-5">
        <div class="hh1 h1"><p class="p1 py-2">PENGANTAR</p></div>
            <p class="pt-4">Selamat datang di Modul Pembelajaran tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi. Modul ini dirancang berdasarkan Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Nomor 30 Tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi (Permendikbudristek 30/2021). Modul ini wajib dipelajari oleh seluruh mahasiswa, pendidik, dan tenaga kependidikan perguruan tinggi di seluruh Indonesia.</p>
            <p class="pb-4">Tujuan dari modul ini adalah untuk meningkatkan pengetahuan dan kesadaran setiap mahasiswa, pendidik, dan tenaga kependidikan dalam mewujudkan kampus yang merdeka dari kekerasan seksual. Permendikbudristek30/2021 telah mengatur bagaimana setiap mahasiswa, pendidik, dan tenaga kependidikan harus berperan aktif dalam pencegahan kekerasan seksual.</p>
            <br>
        </div>
    </div>

    <!--peringatan-->
    <div class="pp container-fluid">
    <div class="py-5 container">
        <div class="hh2 h1"><p class="p2 py-2">PERINGATAN PEMICU</p></div>
        <p class="pt-4">Modul Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi ini memuat materi yang dapat memicu respons emosional, khususnya bagi korban kekerasan seksual. Kebijaksanaan pembaca sangat diharapkan. </p>
        <p>Bagi pembaca yang terpicu secara emosional, pembaca dapat mengambil waktu dan jarak sejenak dari materi yang disampaikan</p>
    </div>
    </div>

    <!--topik-->
    <div class="container-fluid py-5" id="materi">
        <div class="hh4 h1"><p class="p1 py-2">TOPIK PEMBAHASAN</p></div>
        <div class="container cardbg my-5">
            <div class="cardtop"></div>
                <div class="row">
                    <a href="materi1.php" class="col-sm-3 p-4 link">
                            <div class="card-body card1">
                                <div class="overlay py-3">
                                <div class="cardtext">
                                    <h5 class="card-text mx-3">TOPIK 1</h5>
                                    <p class="card-text mx-3">FILOSOFI PENDIDIKAN DI INDONESIA</p>
                                </div>
                                </div>
                            </div>
                    </a>
                    <a href="materi2.php" class="col-sm-3 p-4 link">
                            <div class="card-body card2">
                                <div class="overlay py-3">
                                <div class="cardtext">
                                    <h5 class="card-text mx-3">TOPIK 2</h5>
                                    <p class="card-text mx-3">MENGENAL KEKERASAN <span class="hh6">ssssssssssssssssssssssssssssss</span></p>
                                </div>
                                </div>
                            </div>
                    </a>
                    <a href="materi3.php" class="col-sm-3 p-4 link">
                            <div class="card-body card3">
                                <div class="overlay py-3">
                                <div class="cardtext">
                                    <h5 class="card-text mx-3">TOPIK 3</h5>
                                    <p class="card-text mx-3">MEMAHAMI KEKERASAN SEKSUAL</p>
                                </div>
                                </div>
                            </div>
                    </a>
                    <a href="materi4.php" class="col-sm-3 p-4 link">
                            <div class="card-body card4">
                                <div class="overlay py-3">
                                <div class="cardtext">
                                    <h5 class="card-text mx-3">TOPIK 4</h5>
                                    <p class="card-text mx-3">MEMAHAMI DAMPAK KEKERASAN SEKSUAL</p>
                                </div>
                                </div>
                            </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--pojok istilah-->
    <div class="pb-5 button1">
        <div class="h1">
        <p class="p2 pb-3">POJOK ISTILAH</p>
        </div>
        <a href="pojokistilah.pdf" target="_blank" class="button2 p-2">Klik di sini untuk Lihat Daftar Istilah</a>
    </div>

    <!--Quiz-->
    <div class="container-fluid quiz px-5 py-5 mt-5">
        <div class="hh5 h1 mb-4"><p class="p2 p-1">Quiz</p></div>
        <p class="textbold1 mx-5 pb-4">Setelah menyelesaikan 4 topik di dalam modul ini, saatnya untuk mengisi ujian pasca pembelajaran untuk melihat pemahaman kita akan pencegahan dan penanganan kekerasan seksual.</p>
        <a href="" class="button2 p-2">Klik di sini untuk membuka Quiz</a>
    </div>

    <!--footer-->
    <div class="bawah"></div>
    <div class="footer p-1">The Statistikers</div>
</body>
</html>