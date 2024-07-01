<?php 
include '../koneksi.php';
$nama =$_POST['nama'];


mysqli_query($koneksi, "insert into kelas values (NULL,'$nama')");
header("location:kelas.php");