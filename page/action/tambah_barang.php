<?php 
require_once __DIR__."/../../config/config.php";

//
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];

// Simpan paket
$actPaket = $db->query("INSERT INTO `vivalo_kebutuhan`(`kd_barang`, `nama_barang`, `harga`) VALUES ('$kode_paket','$nama_barang','$harga')");
if ($actPaket)
{
	// Jika berhasil
	redirectPage("page/admin/barang.php?pesan=buat_oke");
}
