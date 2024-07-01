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
<form id="contact" action="admin_update.php" method="post">
<h3>Tambahkan Admin</h3>
<h4>Isikan data dengan lengkap</h4>
<div class="box-body">
            <form action="admin_update.php" method="post" enctype="multipart/form-data">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from adminn where admin_id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['admin_nama'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['admin_id'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $d['admin_username'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" min="5" placeholder="Kosong Jika tidak ingin di ganti">
                
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto">
                
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

  