<?php 
include '../koneksi.php';
$matkul  = $_POST['jadwal_matkul'];
$kelas  = $_POST['jadwal_kelas'];
$dosen  = $_POST['jadwal_dosen'];
$waktu  = $_POST['waktu'];


mysqli_query($koneksi, "insert into jadwall values (NULL,'$matkul','$kelas','$dosen','$waktu')");
header("location:jadwal.php");


