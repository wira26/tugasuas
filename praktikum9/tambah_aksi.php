<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "insert into mahasiswa(nama, npm, alamat) values('$nama', '$npm', '$alamat')");
    header("location:index.php")

?>