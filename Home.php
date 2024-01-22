<?php
session_start();
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
    <div class="container">
        <div class="intro" id="ABOUT">
            <p class="title">Hello,</p>
            <p class="description"> Smai Education Fair and Motivation <br> of Spiritual Intelligence Here!</p>
            <p>Informasi seputar PTN & PTS</p>
            <p>Pengen tau ada apa aja di event SEF MOSI?</p>
            <p>Silahkan daftar!</p>
        </div>
    </div>
</body>
</html>