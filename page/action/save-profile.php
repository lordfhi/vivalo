<?php 
require_once __DIR__."/../../config/config.php";

$id_konsumen = $_SESSION["user_info"]["id_konsumen"];
$nama_konsumen = $_POST["nama_konsumen"];
$email = $_POST["email"];
$no_hp = $_POST["no_hp"];
$password = $_POST["password"];
$alamat = $_POST["alamat"];
$old_password = $_POST["old_password"];

if (isset($_POST["password"]) || $password !== "")
{
	$upd_pass = md5($password);
} else {
	$upd_pass = $old_password;
}

// update user
$usrUpd = $db->query("UPDATE `vivalo_konsumen` SET `nama_konsumen`='$nama_konsumen',`alamat`='$alamat',`no_hp`='$no_hp' WHERE `id_konsumen` = '$id_konsumen'");
$lgnUpd = $db->query("UPDATE `vivalo_users` SET `email`='$email',`password`='$upd_pass' WHERE `id_konsumen` = '$id_konsumen'");

redirectPage("page/page-profilecostumer.php");