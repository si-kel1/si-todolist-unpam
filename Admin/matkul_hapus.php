<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from matkul where kode_matkul='$id'");
mysqli_query($koneksi, "delete from matkul where kode_matkul='$id'");
header("location:matkul.php");
