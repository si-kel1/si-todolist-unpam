<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
        <div class="navigation">
        <ul>
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Tugas List</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Admin</span>
                    </a>
                </li>

                <li>
                    <a href="dosen.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Dosen</span>
                    </a>
                </li>

                <li>
                    <a href="mahasiswa.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="kelas.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="matkul.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Mata Kuliah</span>
                    </a>
                </li>
                <li>
                    <a href="jadwal.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Mahasiswa</h2>
                        <a href="mahasiswa_tambah.php" class="btn">Tambah mahasiswa</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                            <th width="1%">NO</th>
                            <th>NAMA</th>
                            <th>USERNAME</th>
                            <th width="15%">FOTO</th>
                            <th width="10%">OPSI</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                include '../koneksi.php';
                $no=1;
                $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_mahasiswa']; ?></td>
                    <td><?php echo $d['mahasiswa_username']; ?></td>
                    <td>
                      <center>
                        <?php if($d['mahasiswa_foto'] == ""){ ?>
                          <img src="../gambar/sistem/user.png" style="width: 80px;height: auto">
                        <?php }else{ ?>
                          <img src="../gambar/user/<?php echo $d['mahasiswa_foto'] ?>" style="width: 80px;height: auto">
                        <?php } ?>
                      </center>
                    </td>
                    <td>                        
                      <a class="btn btn-warning btn-sm" href="mahasiswa_edit.php?id=<?php echo $d['mahasiswa_id'] ?>"><i class="fa fa-cog"></i></a>
                      <?php if($d['mahasiswa_id'] != 1){ ?>
                        <a class="btn btn-danger btn-sm" href="mahasiswa_hapus.php?id=<?php echo $d['mahasiswa_id'] ?>"><i class="fa fa-trash"></i></a>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
                        </tbody>
                    </table>
                </div>

                <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
