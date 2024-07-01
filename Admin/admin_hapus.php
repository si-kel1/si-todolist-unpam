<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from adminn where admin_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['admin_foto'];
unlink("../gambar/user/$foto");
mysqli_query($koneksi, "delete from adminn where admin_id='$id'");
header("location:admin.php");
