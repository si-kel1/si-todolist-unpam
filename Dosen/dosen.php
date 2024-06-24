<?php
include 'koneksi.php';

$sql = "SELECT * FROM tugaslist";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <h1>Data Dosen</h1>
</head>
<body>
    <h2>To-Do List</h2>
    <a href="input_tugas.php">Add Task</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Dosen</th>
            <th>Tugas</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["dosen"]."</td>
                    <td>".$row["tugas"]."</td>
                    <td>".$row["due_date"]."</td>
                    <td>".$row["status"]."</td>
                    <td>
                        <a href='edit_task.php?id=".$row["id"]."'>Edit</a> | 
                        <a href='delete_task.php?id=".$row["id"]."'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No tasks found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
