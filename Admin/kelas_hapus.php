<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from kelas where kode_kelas='$id'");
mysqli_query($koneksi, "delete from kelas where kode_kelas='$id'");
header("location:kelas.php");
