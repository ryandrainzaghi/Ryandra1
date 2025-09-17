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
    <title>Topik 2</title>
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
                    <button type="button" class="me-1 btn1 btn text-light fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="topik2h1 h1"><p class="p1 py-2">MENGENAL KEKERASAN</p></div>
                <div class="container-fluid btopik21"></div>
                <p class="py-4">Sejalan dengan landasan filosofi dan hukum pendidikan Indonesia yang bertujuan membentuk karakter bangsa yang beriman, cerdas, dan nasionalis, menyediakan dan memastikan lingkungan pendidikan yang sehat secara mental dan fisik, serta aman dan nyaman adalah kewajiban setiap satuan pendidikan. Guna mewujudkan hal tersebut, kita harus menyikapi kekerasan yang terjadi di lingkungan pendidikan secara serius. Pada topik yang kedua ini, kita akan mempelajari ketimpangan hak pendidikan akibat kekerasan dan kaitannya dengan upaya mewujudkan Sumber Daya Manusia (SDM) unggul dan pembangunan yang optimal.</p>
                <br>
                <!--subbab2-->
                <div class="topik2h1 h1"><p class="p1 py-2">KETIMPANGAN HAK PENDIDIKAN DAN DAMPAKNYA</p></div>
                <p class="pt-4">Tujuan Pembangunan Berkelanjutan, sebagaimana tertuang dalam <span class="textbold1">Lampiran Perpres No.59 tahun 2017, adalah tujuan global yang selaras dengan pembangunan nasional Indonesia. Salah satu upaya untuk mewujudkannya adalah dengan menjamin kualitas pendidikan yang inklusif dan merata serta meningkatkan kesempatan belajar sepanjang hayat untuk seluruhmasyarakat Indonesia.</span></p>
                <p class="pb-4">Pendidikan merupakan hak asasi yang berfungsi sebagai bekal bagi generasi penerus untuk memajukan kesejahteraan bangsa. Sayangnya, kita masih dapat menemukanpraktik kekerasan, termasuk kekerasan seksual, yang melibatkan pendidik, tenaga pendidik, dan mahasiswa sebagai korban atau pun pelaku kekerasan seksual. Kekerasan merupakan halangan untuk menciptakan ruang pembelajaran yang inklusif dan merata.</p>
                <br>
                <!--subbab3-->
                <div class="topik2h1 h1"><p class="p1 py-2">MEMAHAMI KEKERASAN DI LINGKUNGAN PENDIDIKAN</p></div>
                <div class="container-fluid btopik22 "></div>
                <p class="py-4">Merujuk dari Catatan Tahunan Komnas Perempuan tahun 2015 sampai 2020, kekerasan berbasis gender terjadi di semua jenjang pendidikan, mulai dari pendidikan usia dini sampai pendidikan tinggi. Dari total kasus yang diadukan, universitas menempati urutan pertama dengan persentase sebesar 27 persen dengan jenis kekerasan yang paling banyak adalah kekerasan seksual.</p>
                <div class="container-fluid btopik23 "></div>
                <p class="pt-4">Data mengenai kekerasan seksual di lingkungan perguruan tinggi juga diperkuat oleh Kolaborasi #NamaBaikKampus yang melibatkan sejumlah media massa nasional pada 2019. Dari 207 testimoni yang masuk, 174 di antaranya merupakan kasus kekerasan seksual yang terjadi di kampus atau dilakukan oleh sivitas akademika dalam kegiatan akademik di luar kampus (Zuhra, 2019). Korban tersebar di 29 kota di Indonesia.</p>
                <p class="pb-4">Kekerasan yang terjadi di lingkungan pendidikan dapat memengaruhi proses belajar pelajar atau mahasiswa. Ketika pelajar atau mahasiswa tidak dapat belajar secara optimal dalam lingkungan pendidikan yang aman dan nyaman, mereka kehilangan kesempatan untuk mengembangkan dan mengaktualisasikan potensinya. Sebagai konsekuensinya, visi mewujudkan SDM unggul untuk mendukungpembangunan nasionalsulit atau bahkan tidak akan tercapai. Olehkarena itu, menciptakan dan memastikan lingkungan pendidikan yang inklusif dan bebas kekerasan merupakan tanggung jawab kita bersama.</p>
                <br>
                <!--subbab4-->
                <div class="topik2h1 h1"><p class="p1 py-2">LAPISAN IDENTITAS DAN KERENTANAN</p></div>
                <p class="py-4">Untuk memberikan penjelasan lebih lanjut mengenai jenis-jenis kekerasan, gambar di bawah ini menjelaskantipologi kekerasan berdasarkan bentuk yang dapat dilakukan seorang individu terhadap diri sendiri ataukelompok/individu terhadap orang lain dan/atau kelompok tertentu (Krug et al., 2002).</p>
                <div class="container-fluid btopik24 "></div>
                <p class="py-4">Pembagian tipologi tersebut menunjukkan kekerasan dapat terjadi di semua level, mulai dari individu, antar individu, dan kelompok. Identitas setiap individu berbeda satu dari yang lain, sehingga dampak kekerasan pada setiap individu pun berbeda-beda tergantung pada identitas yang dimilikinya. Ada individu/kelompok yang lebih rentan dibanding yang lain sehingga dapat mengalami dampak kekerasan yang lebih besar.</p>
                <br>
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
                <a href="materi3.php" class="cardbg">
                    <div class="my-3 card1">
                        <div class="imgc3"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 3: MEMAHAMI KEKERASAN SEKSUAL</p>
                        </div>
                        <hr>
                    </div>
                </a>
                <a href="materi4.php" class="cardbg1">
                    <div class="my-3 card1">
                        <div class="imgc4"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 4: MEMAHAMI DAMPAK KEKERASAN SEKSUAL</p>
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