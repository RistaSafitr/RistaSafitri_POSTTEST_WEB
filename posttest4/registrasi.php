<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script src="jquery.js"></script>
    <title>Register</title>
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

    <div id="main-regis">
        <center>
            <h2 id="judul-regis">Registrasi</h2> <br> </center>
            <form action="login.php" method="post">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama" required>
                <label for="username">Username: </label>
                <input type="text" name="regisUsername" id="username" required>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required>
                <label for="telp">Nomor Telpon: </label>
                <input type="tel" name="telp" id="telp" placeholder="  xxxx-xxxx-xxxx" pattern="^\d{4}-\d{4}-\d{4}$" required>
                <label for="password">Password: </label>
                <input type="password" name="regisPassword" id="password" required>
                <label for="password">Konfirmasi Password: </label>
                <input type="password" name="konfirPassword" id="konfirPassword" required> <br><br>
                <input type="submit" name="regisSubmit" value="Submit">
            </form>
    <img class="latar" src="image/login-background0.jpg" alt="">
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
    <script src="javaScript.js"></script>
</body>
</html>