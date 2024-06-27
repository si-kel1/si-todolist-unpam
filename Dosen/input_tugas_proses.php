<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tugas = $_POST['tugas'];
$deadline = $_POST['deadline'];
$status = $_POST['status'];

$sql = "INSERT INTO tugaslist (id, nama, tugas, deadline, status) VALUES ('$id', '$nama', '$tugas', '$deadline', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Tugas baru berhasil ditambahkan";
    header("Location: dosen.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
