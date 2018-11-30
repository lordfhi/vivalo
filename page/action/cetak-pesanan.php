<?php
require_once __DIR__."/../../config/config.php";

// Cetak pesanan
$kd_pemesanan = $_GET["kd_pemesanan"];

if ($db->query("SELECT * FROM `vivalo_pemesanan` WHERE `kd_pemesanan` = '$kd_pemesanan'")->num_rows > 0)
{
	// data pemesanan ada
	$data_pemesanan = $db->query("SELECT * FROM `vivalo_pemesanan` WHERE `kd_pemesanan` = $kd_pemesanan")->fetch_assoc();
	$data_konsumen = $db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$data_pemesanan['id_konsumen']."'")->fetch_assoc();
	$data_paket = $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$data_pemesanan['kd_paket']."'")->fetch_assoc();

	include_once __DIR__."/../cetak-pesanan.php";
}