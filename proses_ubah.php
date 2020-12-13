<?php

include "koneksi.php";

$id = $_GET['id'];

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['kelas'];


$sql = $pdo->prepare("UPDATE siswa SET nis=:nis, nama=:nama, jenis_kelamin=:jk, telp=:telp WHERE id=:id");
$sql->bindParam(':nis', $nis);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':kelas', $kelas);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>