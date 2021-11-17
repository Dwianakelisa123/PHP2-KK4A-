<?php
error_reporting (E_ALL ^ E_NOTICE);

    include './koneksi.php';

    $id = $_GET['id_siswa'];

    $sql = "DELETE FROM SISWA WHERE nis='$nis'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>