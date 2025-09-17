<?php 

include 'koneksi.php';

// Ambil nilai dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

// Kunci jawaban
$answers = array(
  'q1' => 'b',
  'q2' => 'c',
  'q3' => 'c',
  'q4' => 'd',
  'q5' => 'd',
  'q6' => 'a',
  'q7' => 'a',
  'q8' => 'a'
);

// Hitung skor
$score = 0;
foreach ($answers as $key => $value) {
  if ($_POST[$key] == $value) {
    $score+=125/10;
  }
}

// Simpan ke database
$sql = "INSERT INTO question (nama, nim, kelas, no1, no2, no3, no4, no5, no6, no7, no8, score) VALUES ('$nama', '$nim', '$kelas', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$score')";

if ($koneksi->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: thanks.php');  // Arahkan ke halaman lain
} else {
  echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>