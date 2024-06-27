<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tugaslist WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Tugas</h1>
    <form action="edit_tugas_proses.php" method="post">
        ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" required><br>
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        Tugas: <input type="text" name="tugas" value="<?php echo $row['tugas']; ?>" required><br>
        Deadline: <input type="date" name="deadline" value="<?php echo $row['deadline']; ?>" required><br>
        Status: <input type="text" name="status" value="<?php echo $row['status']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali ke To-Do List</a>
</body>
</html>

<?php
$conn->close();
?>
