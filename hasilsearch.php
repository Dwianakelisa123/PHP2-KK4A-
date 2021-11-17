<?php 
error_reporting(E_ALL ^ E_NOTICE);
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$link = mysqli_connect("localhost","root","","db_siswa");
$hasil=mysqli_query($link,"select * from siswa where $kolom like '%$cari%'");
echo "<br>";
echo "Ditemukan : $data";
echo "<br>";
while($d = mysqli_fetch_array($data))
{
    echo "NIS : ";
    echo $baris[0];
    echo "Nama Lengkap : ";
    echo $baris[1];
    echo "Jenis Kelamin : ";
    echo $baris[2];
    echo "Alamat : ";
    echo $baris[3];
}

?>