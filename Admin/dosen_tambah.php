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
<form id="contact" action="dosen_act.php" method="post">
<h3>Tambahkan Dosen</h3>
<h4>Isikan data dengan lengkap</h4>
<fieldset>
<label>Nama</label>
<input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama ..">
</fieldset>
<fieldset>
<label>Username</label>
<input type="text" class="form-control" name="username" required="required" placeholder="Masukkan Username ..">
</fieldset>
<fieldset>
<label>Password</label>
<input type="password" class="form-control" name="password" required="required" min="5" placeholder="Masukkan Password ..">
</fieldset>
<fieldset>
<label>Foto</label>
<input type="file" name="foto">
</fieldset>
<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Simpan</button>
</fieldset>

</form>
</div>

</body>
</html>

  