<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dosen = $_POST['dosen'];
    $task = $_POST['tugas'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO tugas (dosen, tugas, due_date) VALUES ('$dosen', '$tugas', '$due_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Tugas sukses di tambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Tugas</title>
</head>
<body>
    <h2>Tambah Tugas</h2>
    <form method="post" action="add_task.php">
        <label for="dosen">Dosen:</label><br>
        <input type="text" id="dosen" name="dosen" required><br>
        <label for="tugas">Tugas:</label><br>
        <input type="text" id="tugas" name="tugas" required><br>
        <label for="due_date">Due Date:</label><br>
        <input type="date" id="due_date" name="due_date" required><br><br>
        <input type="submit" value="Add tugas">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
