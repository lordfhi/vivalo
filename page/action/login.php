<?php 
require_once __DIR__."/../../config/config.php";

// menangkap data yang dikirim dari form
$user = $_POST['username'];
$pass = md5($_POST['password']);
 
// Validasi data
$data = $db->query("SELECT * FROM `vivalo_users` WHERE `username` = '$user'");
if ($db->num_rows($data) > 0)
{
	$loginData = $db->fetch($data);

	// Validasi password
	if ($loginData['password'] == $pass)
	{

		// Set session
		$_SESSION["user"] = $loginData;
		$_SESSION["user_level"] = $loginData["level"];
		if ($loginData["level"] == "1")
		{
			$_SESSION["user_info"] = $db->fetch($db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$loginData["id_admin"]."'"));
			$_SESSION["user_nama"] = $db->fetch($db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$loginData["id_admin"]."'"))["nama_admin"];
			$_SESSION["user_level"] = "Admin";
		} else
		if ($loginData["level"] == "2")
		{
			$_SESSION["user_info"] = $db->fetch($db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$loginData["id_manajer"]."'"));
			$_SESSION["user_nama"] = $db->fetch($db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$loginData["id_manajer"]."'"))["nama_manajer"];
			$_SESSION["user_level"] = "Manajer";
		} else
		if ($loginData["level"] == "3")
		{
			$_SESSION["user_info"] = $db->fetch($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$loginData["id_konsumen"]."'"));
			$_SESSION["user_nama"] = $db->fetch($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$loginData["id_konsumen"]."'"))["nama_konsumen"];
			$_SESSION["user_level"] = "Konsumen";
		}

		// Validasi user level
		if ($loginData["level"] == "1" || $loginData["level"] == "2")
		{
			redirectPage("page/admin/index.php");
		} else
		if ($loginData["level"] == "3")
		{
			redirectPage("page/page-customer.php");
		}
	}
	else
	{
		// Jika password salah
		redirectPage("page/page-register.php?pesan=gagal");
	}
} else {
	// Jika user tidak terdaftar
	redirectPage("page/page-register.php?pesan=gagal");
}