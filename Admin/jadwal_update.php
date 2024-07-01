<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];

mysqli_query($koneksi, "update kelas set nama_kelas='$nama'  where kode_kelas='$id'");
header("location:kelas.php");