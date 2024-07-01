<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from jadwall where jadwal_id='$id'");
mysqli_query($koneksi, "delete from jadwall where jadwal_id='$id'");
header("location:jadwal.php");
