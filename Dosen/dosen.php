<?php
include 'koneksi.php';

$sql = "SELECT * FROM tugaslist";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>
    <a href="input_tugas.php">Tambah Tugas</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["nama"]."</td>
                    <td>".$row["tugas"]."</td>
                    <td>".$row["deadline"]."</td>
                    <td>".$row["status"]."</td>
                    <td>
                        <a href='edit_tugas.php?id=".$row["id"]."'>Edit</a> | 
                        <a href='hapus_tugas.php?id=".$row["id"]."'>Hapus</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada tugas</td></tr>";
        }
        ?>
    </table>
</body>

<footer>Halaman Dosen</footer>
</html>

<?php
$conn->close();
?>
