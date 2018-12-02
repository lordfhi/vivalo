<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// get email user
$email = $_POST["email"];
$pass = $_POST["password"];

//
if (isset($_POST["password"]))
{
	$upd_pass = md5($pass);

	// cek data user
	$usrData = $db->query("SELECT * FROM `vivalo_users` WHERE `email` = '$email'");
	if ($usrData->num_rows > 0)
	{
		// data ada
		if ($db->query("UPDATE `vivalo_users` SET `password`='$upd_pass' WHERE `email` = '$email'"))
		{
			redirectPage("page/page-register.php?pesan=forgot");
		}
	}
} else {
	redirectPage("page/page-lupapassword.php?fail=yes");
}
