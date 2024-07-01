<?php 
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../admin/style.css">
</head>
<body>
<div class="container"> 
<form id="contact" action="kelas_update.php" method="post">
<h3>Edit Data Mahasiswa</h3>
<h4>Isikan data dengan lengkap</h4>
<div class="box-body">
            <form action="kelas_update.php" method="post" enctype="multipart/form-data">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from kelas where kode_kelas='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['nama_kelas'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['kode_kelas'] ?>" required="required">
                </div>


                <fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Simpan</button>
</fieldset>
                <?php
              }

              ?>
              
            </form>
          </div>


</body>
</html>

  