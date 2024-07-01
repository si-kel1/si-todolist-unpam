<?php 
include '../koneksi.php';
$nama =$_POST['nama'];


mysqli_query($koneksi, "insert into matkul values (NULL,'$nama')");
header("location:matkul.php");