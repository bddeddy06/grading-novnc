<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form mahasiswa
$nim = $_POST['nim'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim='$nim' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nim'] = $nim;
	$_SESSION['status'] = "login";
	header("location:mahasiswa/index.php");
}else{
	header("location:login-mahasiswa.php?pesan=gagal");
}
?>