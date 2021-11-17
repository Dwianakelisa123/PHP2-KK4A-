<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_siswa"; //nama database kalian

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn){
        echo "koneksi berhasil";
     }else{
        echo "koneksi gagal";
     }

?>