<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tugas = $_POST['tugas'];
$deadline = $_POST['deadline'];
$status = $_POST['status'];

$sql = "UPDATE tugaslist SET nama='$nama', tugas='$tugas', deadline='$deadline', status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Tugas berhasil diperbarui";
    header("Location: dosen.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
