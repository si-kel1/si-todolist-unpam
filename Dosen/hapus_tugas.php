<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM tugaslist WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Tugas berhasil dihapus";
    header("Location: dosen.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
