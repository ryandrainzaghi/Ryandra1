<?php
session_start();

require 'koneksi.php';

if(isset($_POST["register"])){
    
    if(registrasi($_POST) > 0){
        echo "<script>window.alert('Akun Berhasil Dibuat')
        location.href='login.php';</script>";
        exit;
    }else{
        echo mysqli_error($koneksi);//"<script>window.alert('Akun Gagal Dibuat')
        //window.location='registrasi.php'</script>";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="img/logoicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/register.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="register row">
        <div class="col-sm-6">
            <form method="post">
            <!-- Main container for all inputs -->
                <div class="mainContainer">
                    <h2 class="h1 pt-3">Buat Akun</h2>
                    <!-- Nama Lengkao -->
                    <div class="container-fluid input my-4">
                    <label for="username"><i class="icon bi bi-person-fill"></i></label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" class="textbox mx-3" required>
                    </div>
        
                    <!-- NIM -->
                    <div class="container-fluid input my-4">
                    <label for="pswrd"><i class="icon bi bi-file-earmark-text-fill"></i></label>
                    <input type="text" placeholder="NIM" name="nim" class="textbox mx-3" required>
                    </div>

                    <!-- email -->
                    <div class="container-fluid input my-4">
                    <label for="pswrd"><i class="icon bi bi-envelope-fill"></i></label>
                    <input type="text" placeholder="Email" name="email" class="textbox mx-3" required>
                    </div>

                    <!-- password -->
                    <div class="container-fluid input my-4">
                    <label for="pswrd"><i class="icon bi bi-lock-fill"></i></label>
                    <input type="password" placeholder="Password" name="password" id="password" class="textbox mx-3" required>                    
                    </div>

                    <!-- confrim pw -->
                    <div class="container-fluid input my-4">
                    <label for="pswrd"><i class="icon bi bi-lock-fill"></i></label>
                    <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2" class="textbox mx-3" required>
                    </div>
        
                    <!--     Submit button -->
                    <button type="submit" class="btn container" name="register">Registrasi</button>

                    <!-- Login link -->
                    <p class="loginlink my-4    ">Sudah punya akun?<a href="login.php" class="ds"> Masuk</a></p>
                </div>
            </form>
    </div>
    <div class="img col-sm-6 container-fluid center">
    </div>
</div>
</body>
</html>