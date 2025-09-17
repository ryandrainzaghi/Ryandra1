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
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topik 1</title>
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
                <div class="hh1 h1"><p class="p1 py-2">FILOSOFI PENDIDIKAN DI INDONESIA</p></div>
                <div class="container-fluid btopik border"></div>
                <p class="py-4">Kita akan memulai pembelajaran terkait Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi. Sebelum mempelajari lebih jauh mengenai kekerasan, penting untuk memahami filosofi dan landasan hukum di Indonesia. Filosofi ini memperlihatkan bagaimana pendidikan di Indonesia memiliki tujuan mulia untuk mencerdaskan kehidupan bangsa dengan memastikan ruang pendidikan yang sehat, aman, dan nyaman.</p>
                <br>
                <!--subbab2-->
                <div class="hh1 h1"><p class="p1 py-2">FILOSOFI</p></div>
                <p class="pt-4">Pengetahuan  adalah  bentuk  dari  prinsip  dan  fakta,  keterampilan  adalah  pemerolehan kemampuan  melalui  pelatihan  atau  pengalaman.  Sikap  didefinisikan  sebagai  suatu  pendapat, perasaan  atau  mental  seseorang  yang  ditunjukkan  oleh  tindakan.  Pendidikan  sebagai  upaya untuk memajukan budi  pekerti, baik itu kekuatan batin maupun karakter  agar  anak didik dapat menemukan  kesempurnaan  hidup.  Ki  Hadjar  Dewantara sebagai Bapak Pendidikan Indonesia  memandang  pentingnya  pendidikan karakter  sebagai  bekal  untuk  meraih  cita-cita  karena  karakter  manusia  menjadi  modal  utama dalam  menjalani  kehidupan.  Ki  Hadjar  Dewantara  mendefinisikan  pendidikan  adalah  sebagai daya dan upaya  yang dilakukan untuk memajukan bertumbuhnya budi pekerti, kekuatan batin, karakter, pikiran dan tubuh anak agar dapat mencapai kesempurnaan hidup, yaitu kehidupan dan penghidupan anak-anakpeserta didik dapat selaras dengan dunianya</p>
                <p class="">Ki Hajar Dewantara sebagai Bapak Pendidikan Indonesia mencetuskan filosofi pendidikan yang dikenal lewat semboyan "Ing Ngarsa Sung Tuladha, Ing Madya Mangun Karsa, Tut Wuri Handayani" yang berarti di depan memberikan contoh atau sebagai panutan, di tengah membangun kemauan atau niat, dan di belakang memberikan dorongan atau semangat.</p>
                <p class="pb-4">Filosofi pendidikan Ki Hajar Dewantara menunjukkan bahwa pendidikan di Indonesia, termasuk pendidikan tinggi, sudah semestinya dibangun atas semangat kolaborasi untuk saling mendukung dan menghargai agar semua pelajar dan mahasiswa dapat menikmati pendidikan yang sehat secara mental dan fisik, serta aman dan nyaman.</p>
                <br>
                <!--subbab3-->
                <div class="hh1 h1"><p class="p1 py-2">PERAN STRATEGIS PERGURUAN TINGGI</p></div>
                <div class="hh3 h1 my-5"><p class="p2 p-1">Pengantar</p></div>
                <div class="textb1 p-3">
                    <p>Untuk mencapai tujuan pendidikan tinggi, penyelenggara pendidikan tinggi harus membangun budaya akademik dalam kerangka Tridharma Perguruan Tinggi, yakni penyelenggaraan pendidikan, penelitian, dan pengabdian kepada masyarakat. </p>
                    <p class="textbold">Pengembangan budaya akademik menurut Undang-Undang tentang Pendidikan Tinggi dilakukan melalui interaksi sosial yang berprinsip kesetaraan (non-diskriminatif).</p>
                </div>

                <div class="hh4 h1 my-5"><p class="p2 p-1">Peran Strategis</p></div>
                <div class="textb1 p-3">
                    <p>Pendidikan tinggi memiliki peran strategis dalam :</p>
                    <ol>
                        <li>Mencerdaskan kehidupan bangsa</li>
                        <li>Memajukan ilmu pengetahuan dan teknologi dengan menerapkan nilai humaniora</li>
                        <li>Pembudayaan dan pemberdayaan bangsa yang berkelanjutan</li>
                    </ol>
                </div>

                <div class="hh5 h1 my-5"><p class="p2 p-1">Budaya Akademik</p></div>
                <div class="textb1 p-3">
                    <p>Pendidikan tinggi memiliki peran strategis dalam :</p>
                    <ol>
                        <li>Mencerdaskan kehidupan bangsa</li>
                        <li>Memajukan ilmu pengetahuan dan teknologi dengan menerapkan nilai humaniora</li>
                        <li>Pembudayaan dan pemberdayaan bangsa yang berkelanjutan</li>
                    </ol>
                </div>
                
                <div class="hh6 h1 my-5"><p class="p2 p-1">Anti Diskriminasi</p></div>
                <div class="textb1 p-3">
                    <p class="textbold1">Kebijakan maupun perilaku yang mendiskriminasi atau menoleransi segala bentuk kekerasan seksual di perguruan tinggi bertentangan dengan semangat membangun budaya akademik di perguruan tinggi dan mencapai tujuan penyelenggaraan pendidikan.</p>
                    <p>Dalam rangka pelaksanaan kode etik, maka penyelenggara pendidikan tinggi juga wajib menyediakan sarana prasarana penunjang. Sarana prasarana penunjang tersebut juga meliputi Satgas yang bertugas dan berfungsi untuk melakukan pencegahan dan penanganan kekerasan seksual di kampus, termasuk membantu korban kekerasan seksual untuk mendapatkan pendampingan, pelindungan, dan pemulihan dari perguruan tinggi.</p>
                </div>
            </div>

            <!--sidebar-->
            <div class="col-3 py-5 px-3">
                <div class="hh2 h1"><p class="p1 py-2">FILOSOFI </p></div>
                <div class="cardtop"></div>
                    <a href="materi2.php" class="cardbg">
                    <div class="my-3 card1">
                        <div class="imgc2"></div>
                        <div class="card-body">
                        <p class="card-text mt-3">TOPIK 2: MENGENAL KEKERASAN</p>
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