<?php 
session_start();
require_once __DIR__."/../../config/config.php";

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = $db->db_query("select * from vivalo_user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location: ../page-customer.php");
}else{
header("location: ../page-register.php?pesan=gagal");
}



?>