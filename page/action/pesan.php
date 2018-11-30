<?php
require_once __DIR__."/../../config/config.php";

//
$id_konsumen = $_SESSION["user_info"]["id_konsumen"];
$kd_paket = $_POST["paket"];
$date = date("Y-m-d", strtotime($_POST["datepicker"]));
$jumlah_laundry = $_POST["jumlah_laundry"];

// Simpan data pesanan ke DB
$saveAct = $db->query("INSERT INTO `vivalo_pemesanan`(`id_konsumen`, `kd_paket`, `date`, `jumlah_laundry`, `total`) VALUES ('$id_konsumen', '$kd_paket', '$date', '$jumlah_laundry', '1')");
if ($saveAct)
{

	// Simpan ke DB laporan pemasukan
	$kd_pemesanan = $db->last_id();
	$db->query("INSERT INTO `vivalo_laporan_pemasukan`(`kd_pemesanan`, `status`) VALUES ('$kd_pemesanan','pending')");

	include_once realpath(__DIR__."/../")."/page-sukses-pesan.php";
}
