<?php
    session_start();
    if (isset($_SESSION['sesLogin']))
    {
        echo "<h1>Selamat Datang" . $_SESSION['sesLogin'] . "</h1>";
        echo "<h2>Halaman ini Bisa di akses jikan anda sudah login</h2>";
        echo "<h2>klik <a href= 'session03.php'> disini (session03.php) </a> untuk logout </h2>" ;
    }
?>