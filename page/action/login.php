<?php 
require_once __DIR__."/../../config/config.php";

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = $db->query("select * from vivalo_user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
if($db->num_rows($data) > 0){
	$userData = $db->fetch($data);
	if ($userData->level == "1" || $userData->level == "2")
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location: ../admin/index.php");
	} else
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location: ../admin/index.php");
	}
} else {
	header("location: ../page-register.php?pesan=gagal");
}
