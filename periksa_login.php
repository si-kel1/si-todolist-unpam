<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$sebagai = $_POST['sebagai'];

if($sebagai == "admin"){

	$login = mysqli_query($koneksi, "SELECT * FROM adminn WHERE admin_username='$username' AND admin_password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['admin_id'];
		$_SESSION['nama'] = $data['admin_nama'];
		$_SESSION['username'] = $data['admin_username'];
		$_SESSION['status'] = "admin_logedin";
		header("location:admin/");
	}else{
		header("location:index.php?alert=gagal");
	}

}elseif($sebagai == "dosen"){
	$login = mysqli_query($koneksi, "SELECT * FROM dosen WHERE dosen_username='$username' AND dosen_password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['dosen_id'];
		$_SESSION['nama'] = $data['nama_dosen'];
		$_SESSION['username'] = $data['dosen_username'];
		$_SESSION['status'] = "dosen_logedin";
		header("location:dosen/");
	}else{
		header("location:index.php?alert=gagal");
	}

}elseif($sebagai == "mahasiswa"){

	$login = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE mahasiswa_username='$username' AND mahasiswa_password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['mahasiswa_id'];
		$_SESSION['nama'] = $data['nama_mahasiswa'];
		$_SESSION['username'] = $data['mahasiswa_username'];
		$_SESSION['status'] = "mahasiswa_logedin";
		header("location:mahasiswa/");
	}else{
		header("location:index.php?alert=gagal");
	}
}
