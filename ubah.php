<?php 
error_reporting (E_ALL ^ E_NOTICE);

    include './koneksi.php';
    $name = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['nis']) ? $_POST['nis'] : '';
    $name = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $name = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $name = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    $sql = "UPDATE siswa SET nis='$nis', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nis='$nis'";
    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>