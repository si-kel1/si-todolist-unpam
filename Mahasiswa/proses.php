<?php

// Mendapatkan data dari form
$nama_tugas = $_POST['nama_tugas'];
$deskripsi_tugas = $_POST['deskripsi_tugas'];
$deadline = $_POST['deadline'];

// Menampilkan data yang telah diinput
echo "<h1>Data Tugas</h1>";
echo "<p>Nama Tugas: $nama_tugas</p>";
echo "<p>Deskripsi Tugas: $deskripsi_tugas</p>";
echo "<p>Deadline: $deadline</p>";
?>