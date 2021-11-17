<?php
error_reporting(E_ALL ^ E_NOTICE);

    include './koneksi.php';
    $id_siswa = $_GET["id_siswa"];

    $sql = "SELECT * FROM siswa WHERE id=".$id_siswa;
    $result = $conn->query($sql);

?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $result['nis']?>"><td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $result['jenis_kelamin']?>"><td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value="<?php echo $result['nama_lengkap']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"><?php echo $result['alamat'];?></textarea></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>