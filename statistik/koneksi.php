<?php
$koneksi = mysqli_connect("localhost", "root", "", "statistik");

function registrasi($data) {
    global $koneksi;

    $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
    $nim = mysqli_real_escape_string($koneksi, $data["nim"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Email Telah Terdaftar')
             </script>";
        
        return false;
    }

    if($password !== $password2){
        echo "<script>
                alert('Password Tidak Sesuai');
             </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$nim', '$email', '$password')");

    return mysqli_affected_rows($koneksi);

}
?>