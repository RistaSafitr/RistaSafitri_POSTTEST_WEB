<?php
    session_start();
    if (isset($_POST['regisSubmit'])){
        $_SESSION['regisSubmit'] = $_POST['regisSubmit'];
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['telp'] = $_POST['telp'];
        $_SESSION['regisUsername'] = $_POST['regisUsername'];
        $_SESSION['regisPassword'] = $_POST['regisPassword'];
        $_SESSION['konfirPassword'] = $_POST['konfirPassword'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest4 - Jasa Print Online Samarinda </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css" type='text/css'>
    <script src="jquery.js"></script>
</head>
<body>
    <div class="header">
            <div class="header-logo">Print Online Samarinda</div>
            <div class="header-item">
                <ul>
                    <li><button id="mode"><img src="logo/icons8-180-degree-30.png" alt="dark mode"></button></li>
                    <li><img src="logo/icons8-cart-32.png" alt="cart"></li>
                    <li>Login/Daftar</li>
                    <li>Akun</li>
                    <li><a href="home.html" style="text-decoration: none;">Beranda</li></a>
                </ul>
            </div>
    </div>

    <div class="main">
        <div class="main-login">
                <center><h2 id="login-judul">Login/Daftar</h2> <br><br></center>
                <img class="login-pic" src="image/acount-concept.jpg" alt="" height="300px" width="300px" style="float:left;">
                <form class="login" action="login.php" method="get">
                    <label for="username">Username</label> <br>
                    <input type="text" name="username" id="username" required> <br>
                    <label for="password">Password</label> <br>
                    <input type="password" name="password" id="password" required> <br><br>
                    <input type="submit" name="submit" value="Log In"> <br><br>
                    <p>Belum Punya Akun? <a href="registrasi.php">Register</a></p>
                </form>
        </div>
    </div>

    <?php
        if(isset($_GET['submit']) && isset($_SESSION['regisSubmit'])){
            if($_GET['username'] == $_SESSION['regisUsername']){
                if($_GET['password'] == $_SESSION['regisPassword']){
                    echo "<h1>Login Berhasil!!</h1>";
                    echo "
                        <script>
                            alert('Login Berhasil!!!');
                            location.href = 'home.html';
                        </script>
                    ";  
                }
                else {
                    echo "<center><h1>Username atau Password Salah !!</h1></center>";
                }
            }
        }
    ?>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
    <script src="javaScript.js"></script>
</body>
</html>