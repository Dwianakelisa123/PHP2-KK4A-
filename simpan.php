<?php
error_reporting(E_ALL ^ E_NOTICE);

    include './koneksi.php';

    $nama = isset ($_POST['id']) ?
    $_POST['id']:'';
    $value = isset($_POST['nis']) ?
    $_POST['nis'] : '';
    $value = isset($_POST['nama_lengkap']) ?
    $_POST['nama_lengkap'] : '';
    $nama = isset ($_POST['jenis_kelamin']) ?
    $_POST['jenis_kelamin']:'';
    $value = isset($_POST['alamat']) ?
    $_POST['alamat'] : '';

    $sql = "INSERT INTO SISWA (nis, nama_lengkap,alamat) VALUES ('$nis','$nama_lengkap','$alamat')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }