<?php
require_once __DIR__."/../../config/config.php";

//
$id_konsumen = $_SESSION["user_info"]["id_konsumen"];
$kd_paket = $_POST["paket"];
$date = date("Y-m-d", strtotime($_POST["datepicker"]));

// Simpan data pesanan ke DB
$saveAct = $db->query("INSERT INTO `vivalo_pemesanan`(`id_konsumen`, `kd_paket`, `date`) VALUES ('$id_konsumen', '$kd_paket', '$date')");
if ($saveAct)
{

	// Simpan ke DB laporan pemasukan
	$kd_pemesanan = $db->last_id();
	$db->query("INSERT INTO `vivalo_laporan_pemasukan`(`kd_pemesanan`, `status`) VALUES ('$kd_pemesanan','??')");

	include_once realpath(__DIR__."/../")."/page-sukses-pesan.php";
}
