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
<form id="contact" action="jadwal_act.php" method="post">
<h3>Tambahkan Mata Kuliah</h3>
<h4>Isikan data dengan lengkap</h4>
<fieldset>
<label>Nama Mata Kuliah</label>
                <select name="jadwal_matkul" class="form-control" required="required">
                  <option value="">- Pilih -</option>
                  <?php 
                  include '../koneksi.php';
                  $matkul = mysqli_query($koneksi,"SELECT * FROM matkul ORDER BY nama_matkul ASC");
                  while($k = mysqli_fetch_array($matkul)){
                    ?>
                    <option value="<?php echo $k['nama_matkul']; ?>"><?php echo $k['nama_matkul']; ?></option>
                    <?php 
                  }
                  ?>
                </select>

</fieldset>
<fieldset>
<label>Kelas</label>
<select name="jadwal_kelas" class="form-control" required="required">
                  <option value="">- Pilih Kelas -</option>
                  <?php 
                  include '../koneksi.php';
                  $kelas = mysqli_query($koneksi,"SELECT * FROM kelas ORDER BY kode_kelas ASC");
                  while($k = mysqli_fetch_array($kelas)){
                    ?>
                    <option value="<?php echo $k['nama_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
                    <?php 
                  }
                  ?>
                </select>
</fieldset>
<fieldset>
<label>Nama Mata Kuliah</label>
<select name="jadwal_dosen" class="form-control" required="required">
<option value="">- Pilih Dosen -</option>
                  <?php 
                  include '../koneksi.php';
                  $dosen = mysqli_query($koneksi,"SELECT * FROM dosen ORDER BY nama_dosen ASC");
                  while($k = mysqli_fetch_array($dosen)){
                    ?>
                    <option value="<?php echo $k['nama_dosen']; ?>"><?php echo $k['nama_dosen']; ?></option>
                    <?php 
                  }
                  ?>
                </select>
</fieldset>
<fieldset>
<label>waktu</label>
<input type="date" class="form-control" name="waktu" required="required" placeholder="Masukkan Waktu" value="<?php echo date('Y-m-d') ?>">
</fieldset>
<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Simpan</button>
</fieldset>

</form>
</div>

</body>
</html>

  