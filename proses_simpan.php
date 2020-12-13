<?php

include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['kelas'];

$sql = $pdo->prepare("INSERT INTO siswa(nis, nama, jenis_kelamin, kelas) VALUES(:nis,:nama,:jk,:kelas)");
$sql->bindParam(':nis', $nis);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':jk', $jenis_kelamin);
$sql->bindParam(':kelas', $kelas);
$sql->execute(); 
if($sql){ 
  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
