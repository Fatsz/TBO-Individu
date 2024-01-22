<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sef Mosi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        if(isset($_POST['username'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "INSERT INTO user(nama, username, email, password) values ('$nama', '$username', '$email', '$password')");
            if($query) {
                echo '<script>alert("Selamat, pendaftaran anda berhasil. Silahkan Login kembali."); location.href="login.php";</script>';
            }else{
                echo '<script>alert("Pendaftaran gagal")</script>';
            }
        }

    ?>

    <header>
        <div class="logo">
            <img src="assets/sefmosi-4.png" alt="logo" class="logo-img" />
            <h1 class="logo-title" onclick="#">Sef MOSI</h1>
        </div>
        <nav>
            <ul>
                <li><a href="Home.php">HOME</a></li>
                <li><a href="#ABOUT">ABOUT</a></li>
                <li><a href="#KONTAK">KONTAK</a></li>
            </ul>
        </nav>
        <div class="reglog">
            <a href="login.php">login</a>
            /
            <a href="register.php">register</a>
        </div>
    </header>
    <form method = "post">
        <table class="container">
            <tr>
                <td colspan="2" align="center">
                    <h3>Register User</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Register</button>
                        <a href="login.php">Login</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>