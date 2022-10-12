<?php
    session_start();
    if (isset($_POST['regisSubmit'])){
        $_SESSION['regisSubmit'] = $_POST['regisSubmit'];
        $_SESSION['regisUsername'] = $_POST['regisUsername'];
        $_SESSION['regisPassword'] = $_POST['regisPassword'];
        $_SESSION['konfirPassword'] = $_POST['konfirPassword'];
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['telp'] = $_POST['telp'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script src="jquery.js"></script>
    <title>Akun Saya</title>
</head>
<body>
    <div class="header">
        <div class="header-logo">Print Online Samarinda</div>
        <div class="header-item">
            <ul>
                <li><button id="mode"><img src="logo/icons8-180-degree-30.png" alt="dark mode"></button></li>
                <li><button id="keranjang" onclick="cart()"><img src="logo/icons8-cart-32.png" alt="cart"></button></li>
                <li><a href="home.html" style="text-decoration: none;">Beranda</li></a>
                <li style="text-decoration: none;">Akun</li>
                <li>Login/Daftar</li>
            </ul>
            </div>
        </div>
    </div>

    <div class="main-regis">
        <button id="judul-saya">Hide</button>
        <div id="hide-data">
        <!-- <div id="data-saya">
            <img src="image/fotoPosttest.png" alt="foto" width="250px" height="350px">
        </div> -->
        <div id="data-saya">
            <table id="data-saya">
                <tbody>
                    <tr>
                        <td style="width:50%">Nama</td>
                        <td style="width: 10%">:</td>
                        <td> <?php echo $_SESSION["nama"]; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td> <?php echo $_SESSION["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon</td>
                        <td>:</td>
                        <td> <?php echo $_SESSION["telp"]; ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td> <?php echo $_SESSION["regisUsername"]; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td> <?php echo $_SESSION["regisPassword"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <img class="latar" src="image/login-background0.jpg" alt="">
    </div>

    <script src="javaScript.js"></script>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
</body>
</html>