<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'koneksi.php';
?>
 
<h3>Form Pencarian</h3>
 
<form action="index.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
  <th>No</th>
  <th>Nis</th>
  <th>Nama Lengkap</th>
  <th>Jenis Kelamin</th>
  <th>Alamat</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysql_query($kon,"select * from siswa where Asal like '%".$cari."%'");    
 }else{
  $data = mysql_query($kon,"select * from siswa");  
 }
 $no = 1;
 while($d = mysql_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['NIS']; ?></td>
  <td><?php echo $d['Nama Lengkap']; ?></td>
  <td><?php echo $d['Jenis Kelamin']; ?></td>
  <td><?php echo $d['Alamat']; ?></td>
 </tr>
 <?php } ?>
</table>