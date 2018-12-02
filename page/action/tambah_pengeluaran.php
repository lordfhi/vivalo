<?php 
require_once __DIR__."/../../config/config.php";

//
$kd_barang = $_POST["kd_barang"];
$jumlah_barang = $_POST["jumlah_barang"];
$date = date("Y-m-d", strtotime($_POST["datepicker"]));
$total_harga = $db->fetch($db->query("SELECT * FROM `vivalo_kebutuhan` WHERE `kd_barang` = '".$kd_barang."'"))["harga"] * $jumlah_barang;
// save date ke pembelian
$pembData = $db->query("INSERT INTO `vivalo_pembelian`(`kd_barang`, `total_harga`, `jumlah_barang`, `date`) VALUES ('$kd_barang','$total_harga','$jumlah_barang','$date')"); 
if ($pembData)
{
	// simpan ke laporan
	$kd_pembelian = $db->last_id();
	$db->query("INSERT INTO `vivalo_laporan_pengeluaran`(`kd_pembelian`, `status`) VALUES ('$kd_pemesanan','sukses')");

	redirectPage('page/admin/data_pengeluaran.php?pesan=oke');
}