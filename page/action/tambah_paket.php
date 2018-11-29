<?php 
require_once __DIR__."/../../config/config.php";

//
$kode_paket = $_POST["kode_paket"];
$nama_paket = $_POST["nama_paket"];
$harga_paket = $_POST["harga_paket"];

// Cek kode paket
$kodePaket = $db->query("SELECT * FROM `vivalo_paket` WHERE `kode_paket` = '$kode_paket'");
if ($db->num_rows($kodePaket) == 0)
{
	// Simpan paket
	$actPaket = $db->query("INSERT INTO `vivalo_paket`(`kd_paket`, `nama_paket`, `harga_paket`) VALUES ('$kode_paket','$nama_paket','$harga_paket')");
	if ($actPaket)
	{
		// Jika berhasil
		redirectPage("page/admin/paket.php?pesan=buat_oke");
	}
}
else
{
	// Kalo kode paket sudah ada
	redirectPage("page/admin/paket.php?pesan=data_ada");
}