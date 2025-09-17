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
    <title>Topik 3</title>
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
                <div class="topik3h1 h1"><p class="p1 py-2">MEMAHAMI KEKERASAN SEKSUAL</p></div>
                <div class="container-fluid btopik31"></div>
                <p class="pt-4">Pendidikan tinggi di Indonesia belum bebas dari kasus kekerasan seksual. Berdasarkan survei terhadap 76 pengelola perguruan tinggi negeri dan swasta di Indonesia, 75% responden menyatakan di kampusnya terjadi kasus kekerasan seksual (Nurtjahyo dkk., 2021).</p>
                <p class="">Menurut Catatan Tahunan Komnas Perempuan tahun 2020, kekerasan terjadi di semua jenjang pendidikan, mulai dari pendidikan usia dini sampai pendidikan tinggi. Dari data kasus kekerasan yang diadukan ke Komnas Perempuan, universitas menempati urutan pertama, yakni 27%. Kekerasan seksual merupakan bentuk kekerasan yang paling sering terjadi di jenjang pendidikan dengan persentase sebesar 88%.</p>
                <p class="pb-4">Siapapun dapat mengalami atau melakukan kekerasan seksual, termasuk mahasiswa, pendidik, tenaga kependidikan, dan warga kampus lainnya. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi mengecam segala bentuk kekerasan seksual yang terjadi di lingkungan perguruan tinggi, terutama dalam pelaksanaan Tridharma Perguruan Tinggi. Padatopik ini, kita akan mempelajari berbagai jenis kekerasan seksual serta mengidentifikasietika berinteraksi dalam berbagai peran dan relasi.</p>
                <br>
                <!--subbab2-->
                <div class="topik3h1 h1"><p class="p1 py-2">DEFINISI DAN BENTUK KEKERASAN SEKSUAL</p></div>
                <p class="py-4">Kekerasan Seksual adalah setiap perbuatan merendahkan, menghina, melecehkan, dan/atau menyerang tubuh, dan/atau fungsi reproduksi seseorang, karena ketimpangan relasi kuasa dan/atau gender, yang berakibat atau dapat berakibat penderitaan psikis dan/atau fisik termasuk yang mengganggu kesehatan reproduksi seseorang dan hilang kesempatan melaksanakan pendidikan tinggi dengan aman dan optimal.</span></p>
                <p class="pb-4">Pelecehan seksual  dalam  ruang  lingkup  Pendidikan  diatur dalam PERMENDIKBUD No.30/2021 yang mengatakan    bahwa    hal-hal    yang    termasuk dalam   kekerasan   seksual/pelecehan   seksual, Pasal  5  ayat  (2)  huruf  c  Menyampaikan  ucapan yang  memuat  rayuan,  lelucon,  dan/atau  siulan yang  bernuansa  seksual  pada  Korban.  Pasal  5 ayat (2) huruf d Menatap Korban dengan nuansa seksual  dan/atau  tidak  nyaman  Pasal  5  ayat  (2) huruf l Menyentuh,     mengusap, meraba, memegang, memeluk, mencium dan/atau menggosokkan   bagian   tubuhnya   pada   tubuh Korban tanpa persetujuan Korban.</p>
                <br>
                <!--subbab3-->
                <div class="topik3h1 h1"><p class="p1 py-2">POLA-POLA RELASI</p></div>
                <p class="pt-4">Dalam kasus kekerasan seksual, umumnya pelaku memiliki posisi dominan dibandingkan dengan korban. Hasil survei menunjukkan bahwa profil pelaku kekerasan seksual di perguruan tinggi sebagian besar adalah dosen, diikuti oleh mahasiswa, kemudian tenaga kependidikan(Nurtjahyo dkk., 2021). Dari survei tersebut juga diketahui bahwa sebagian besar korban merupakan mahasiswa dan terdapat sebagian kecil dosen serta tenaga kependidikan. Data tersebut mengindikasikan ketidaksetaraan dalam posisi dan relasi antara pelaku dengan korban.</p>
                <p class="pb-4">Berdasarkan investigasi dan laporan konsorsium #NamaBaikKampus, 179 anggota sivitas akademika dari 79 perguruan tinggi yang tersebar di 29 kota di Indonesia pernah mengalami kekerasan seksual. Data tersebut menandakan semakin meluasnya pola kekerasan seksual di lingkungan pendidikan tinggi. Oleh karena itu, kita perlu mengetahui pola-pola relasi di lingkungan perguruan tinggi untuk mengenali risiko terjadinya kekerasan seksual.</p>
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