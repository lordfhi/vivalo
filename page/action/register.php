<?php
require_once __DIR__."/../../config/config.php";

$nama = $_POST["nama"];
$user = $_POST["username"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$pass = md5($_POST["password"]);
/**
 * Cek username belum terdaftar
 */
$cekData = $db->query("SELECT * FROM `vivalo_users` WHERE `username` = '$user'");
if ($db->num_rows($cekData) == 0)
{
	// Simpan data konsumen ke DB
	$consmData = $db->query("INSERT INTO `vivalo_konsumen`(`nama_konsumen`,`alamat`,`no_hp`) VALUES ('$nama','$alamat','$no_hp')");
	if ($consmData)
	{
		// Simpan data login ke DB
		$loginData = $db->query("INSERT INTO `vivalo_users`(`id_konsumen`, `username`, `password`, `level`) VALUES ('".$db->last_id()."','$nama','$pass','3')");
		if ($loginData)
		{
			// Jika berhasil
			// Set session
			$_SESSION["user"] = $db->fetch($db->query("SELECT * FROM `vivalo_users` WHERE `username` = '$user'"));
			$_SESSION["user_info"] = array('nama_konsumen'=>$nama, 'alamat'=>$alamat, 'no_hp'=>$no_hp);
			$_SESSION["user_info"] = array('nama_konsumen'=>$nama, 'alamat'=>$alamat, 'no_hp'=>$no_hp, 'id_konsumen'=>$_SESSION['user']['id_konsumen']);
			// $_SESSION["user_nama"] = $db->fetch($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$loginData["id_konsumen"]."'"))["nama_konsumen"];
			$_SESSION["user_level"] = 'Konsumen';
			$_SESSION["user_nama"] = $nama;

			// Redirect Halaman
			redirectPage("page/page-customer.php");
		}
	}
} else {
	// User telah terdaftar
	redirectPage("page/page-register.php?pesan=exists");
}

// print_r($_POST);