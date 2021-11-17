<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM siswa";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat : " . $baris[4] . "<br>";
        echo "<a href='ubah_data.php?id_siswa=$baris[0]'>Ubah &nbsp</a>";
        echo "<a href='hapus.php?id_siswa=$baris[0]'>Hapus</a>";
        $a++;
    }
    $conn->close();

?>