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
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");

            if(mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_array($query);
                $_SESSION['user'] = $data;
                echo '<script>alert("Selamat Anda Berhasil Login"); location.href="index.php";</script>';
            }else{

                echo '<script>alert("Username/password tidak sesuai");</script>';

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
                    <h3>Login User</h3>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Login</button>
                        <a href="register.php">Register</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>