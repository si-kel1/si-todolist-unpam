<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Tugas</h1>
    <form action="input_tugas_proses.php" method="post">
        ID: <input type="text" name="id" required><br>
        Nama: <input type="text" name="nama" required><br>
        Tugas: <input type="text" name="tugas" required><br>
        Deadline: <input type="date" name="deadline" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" value="Tambah">
    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Dosen</a>
</body>
</html>
