<?php
session_start();

include 'koneksi.php';

// Ambil nilai dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jawab Pertanyaan</title>
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
    <link rel="stylesheet" href="css/question.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/nav.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container py-5">
      <div class="quizbanner container px-5">
          <h1 class="pt-5">Quiz</h1>
          <p class="text1">Ayo Uji kemampuan kamu tentang kekerasan Seksual lewat Quizz disini!!</p>
      </div>
      <form id="quiz-form" action="insert.php" method="post">
            <input type="text" id="nama" value="<?php echo $nama?>"  name="nama" placeholder="Nama" hidden>
            <input type="text" id="nim" name="nim" value="<?php echo $nim?>" placeholder="NIM" hidden>
            <input type="text" id="kelas" name="kelas" value="<?php echo $kelas?>" placeholder="Kelas" hidden>

            
        <div class="question-card question-card-ganjil pt-5">
          
          <p class="question px-4">1. Apa yang dimaksud dengan sikap dalam konteks pendidikan?</p>

          <div class="row px-3">
            <div class="col-sm-6">
              <div class="container a1 px-4">
                <input type="radio" name="q1" value="a" /> 
                <p class="px-3 pt-3 textradio">A. Sikap adalah kemampuan yang diperoleh melalui pelatihan.</p> 
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container a2 px-4">
                <input type="radio" name="q1" value="b"/>
                <p class="px-3 pt-3 textradio">B. Sikap adalah pendapat atau perasaan seseorang yang ditunjukkan oleh tindakan.</p> 
              </div>
            </div>
          </div>

          <div class="row p-3">
            <div class="col-sm-6">
              <div class="container a3 px-4">
                <input type="radio" name="q1" value="c" />
                <p class="px-3 pt-3 textradio">C. Sikap adalah upaya untuk memajukan karakter anak</p> 
              </div>
            </div>
            <div class="col-sm-6">
              <div class="container a4 px-4">
                <input type="radio" name="q1" value="d" />
                <p class="px-3 pt-3 textradio">D.  Sikap adalah kekuatan batin seseorang.</p> 
              </div>
            </div>
          </div>
        </div>

        <div class="question-card question-card-ganjil pt-5">
            <p class="question px-4">2. Apa yang diatur oleh Pasal 5 ayat (2) huruf l dalam PERMENDIKBUD No.30/2021?</p>

            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q2" value="a" />
                  <p class="px-3 pt-3 textradio">A.  Memberikan hadiah kepada korban</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q2" value="b" />
                  <p class="px-3 pt-3 textradio">B. Membantu korban ketika diperlukan.</p>
                </div>
              </div>
            </div>
            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q2" value="c" />
                  <p class="px-3 pt-3 textradio">C. Menyentuh tubuh korban tanpa persetujuan.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a4 px-4">
                  <input type="radio" name="q2" value="d" />
                  <p class="px-3 pt-3 textradio">D. Menyuruh korban melakukan sesuatu.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="question-card question-card question-card-genap pt-5">
            <p class="question px-4">3. Apa definisi kekerasan seksual menurut Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia Nomor 30 Tahun 2021?</p>
            <div class="row px-3">
            <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q3" value="a"  /> 
                  <p class="px-3 pt-3 textradio">A. Setiap perbuatan yang merendahkan martabat seseorang</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q3" value="b" />
                  <p class="px-3 pt-3 textradio">B. Setiap perbuatan yang menghina individu secara verbal</p>
                </div>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q3" value="c" />
                  <p class="px-3 pt-3 textradio">C. Setiap perbuatan yang melecehkan tubuh atau fungsi reproduksi seseorang</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a4 px-4">
                  <input type="radio" name="q3" value="d" />
                  <p class="px-3 pt-3 textradio">D. Setiap perbuatan yang menyerang seseorang secara fisikJawaban</p>
                </div>
              </div>
            </div>
        </div>

        <div class="question-card question-card-ganjil pt-5">
            <p class="question px-4">4. Pemaksaan terhadap kekerasan seksual melibatkan taktik berbasis gender halus dapat mempengaruhi korban dalam beberapa aspek seperti?</p>
            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q4" value="a" />
                  <p class="px-3 pt-3 textradio">A. Mempengaruhi seksualitas korban</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q4" value="b" />
                  <p class="px-3 pt-3 textradio">B. Mempengaruhi tingkat toleransi dan respons</p>
                </div>
              </div>  
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q4" value="c" />
                  <p class="px-3 pt-3 textradio">C. Korban merasa terintimidasi dan mengalami trauma</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q4" value="d"  /> 
                  <p class="px-3 pt-3 textradio">D. Semua Benar</p>
                </div>  
              </div>
            </div>
        </div>

        <div class="question-card question-card question-card-genap pt-5">
            <p class="question px-4">5. Bagaimana pola relasi subjek-objek dalam ilmu pengetahuan memengaruhi kekerasan yang terjadi dalam dunia pendidikan?</p>

            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q5" value="a" />
                  <p class="px-3 pt-3 textradio">A. Pola relasi subjek-objek dalam ilmu pengetahuan cenderung mengurangi kekerasan dalam dunia pendidikan</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q5" value="b" />
                  <p class="px-3 pt-3 textradio">B. Pola relasi subjek-objek dalam ilmu pengetahuan tidak memiliki pengaruh terhadap kekerasan dalam dunia pendidikan</p>
                </div>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q5" value="c" />
                  <p class="px-3 pt-3 textradio">C. Pola relasi subjek-objek dalam ilmu pengetahuan menyebabkan peningkatan kekerasan dalam dunia pendidikan</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a4 px-4">
                  <input type="radio" name="q5" value="d" />
                  <p class="px-3 pt-3 textradio">D. Pola relasi subjek-objek dalam ilmu pengetahuan mempengaruhi kekerasan dalam dunia pendidikan melalui penekanan pada objektivitas</p>
                </div>
              </div>
            </div>
        </div>

        <div class="question-card question-card-ganjil pt-5">
            <p class="question px-4">6. Untuk mendukung korban kekerasan seksual, memberikan langkah-langkah yang dapat ditindaklanjuti, Bentuk yang salah dari dukungan itu adalah?</p>

            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q6" value="a" />
                  <P class="px-3 pt-3 textradio">A. Beri Pertimbangan yang tidak membantu</P>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q6" value="b" />
                  <p class="px-3 pt-3 textradio">B. Bantuan hukum dan Profesional</p>
                </div>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q6" value="c" /> 
                  <p class="px-3 pt-3 textradio">C. Merangkul korban kekerasan seksual</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a4 px-4">
                  <input type="radio" name="q6" value="d"  />
                  <p class="px-3 pt-3 textradio">D. Tempat aman untuk berbicara</p>
                </div>
              </div>
            </div>
        </div>

        <div class="question-card question-card-ganjil pt-5">

            <p class="question px-4">7. Contoh kesetaraan dalam konteks pendidikan adalah...</p>

            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q7" value="a" />
                  <p class="px-3 pt-3 textradio">A. Memastikan setiap siswa memiliki akses yang sama terhadap sumber daya pendidikan, seperti buku dan peralatan sekolah</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q7" value="b"  />
                  <p class="px-3 pt-3 textradio">B. Memberikan perlakuan yang berbeda kepada siswa berdasarkan identitas mereka</p>
                </div>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q7" value="c" />
                  <p class="px-3 pt-3 textradio">C. Memberikan kesempatan lebih banyak kepada siswa yang memiliki kemampuan akademik tinggi</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a4 px-4">
                  <input type="radio" name="q7" value="d" />
                  <p class="px-3 pt-3 textradio">D. Memisahkan siswa berdasarkan ras atau agama untuk pembelajaran yang lebih efektif</p>
                </div>
              </div>
            </div>
        </div>

        <div class="question-card question-card question-card-genap pt-5">

            <p class="question px-4">8. Apa yang menjadi dampak dari kekerasan yang sering terjadi dalam kasus senioritas?</p>

            <div class="row px-3">
              <div class="col-sm-6">
                <div class="container a1 px-4">
                  <input type="radio" name="q8" value="a" />
                  <p class="px-3 pt-3 textradio">A. Memberikan pendidikan yang tidak mendidik bagi junior yang menerimanya</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a2 px-4">
                  <input type="radio" name="q8" value="b" />
                  <p class="px-3 pt-3 textradio">B. Meningkatkan kualitas mental dan etika mahasiswa baru</p>
                </div>
              </div>
            </div>

            <div class="row p-3">
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q8" value="c"  />
                  <p class="px-3 pt-3 textradio">C. Memperkuat hubungan antara senior dan junior</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="container a3 px-4">
                  <input type="radio" name="q8" value="d" />
                  <p class="px-3 pt-3 textradio">D. Mengurangi kasus kekerasan di lingkungan kampus</p>
                </div>
              </div>
            </div>
        </div>
        <div id="score-display">
        <input type="text" id="score" value=" "  name="score" placeholder="score" hidden>
        </div>

        <div class="btnq">
          <button type="submit" class="buttonquiz my-5">Kirim Jawaban Kamu</button>
        </div>
      </form>
    </div>

    <!--footer-->
    <div class="bawah"></div>
    <div class="footer p-1">The Statistikers</div>
  </body>
</html>
