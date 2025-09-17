<?php
session_start();

require 'koneksi.php';

if(isset($_POST["login"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION['nama'] = $email;

            header("Location: index.php");
            exit;
        }
    }else{
        echo "<script>
        alert('Email/Password Tidak Sesuai');
        </script>";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <h2 class="h1 pt-3">Masuk</h2>

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
        
                    <!--     Submit button -->
                    <button type="submit" class="btn container" name="login">Masuk</button>

                    <!-- Login link -->
                    <p class="loginlink my-4    ">Belum punya akun?<a href="register.php" class="ds"> Buat Akun!</a></p>
                </div>
            </form>
    </div>
    <div class="img col-sm-6 container-fluid center">
    </div>
</div>
</body>
</html>