<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', npm='$npm', alamat='$alamat' WHERE id = '$id'");
    header("location:index.php");
?>