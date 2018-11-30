<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_barang'];
 
 
// menghapus data dari database

// get all paket
$lapData = $db->query("SELECT * FROM `vivalo_pembelian` where `kd_barang` = '$id'")->fetch_all();
foreach ($lapData as $laporanData)
{
	$delLapData = $db->query("DELETE FROM `vivalo_laporan_pengeluaran` WHERE `kd_pembelian` = '".$laporanData[0]."'");
}
if ($delLapData)
{
	if ($db->query("DELETE FROM `vivalo_pembelian` WHERE `kd_barang` = '$id'"))
	{
		if($db->query("DELETE FROM `vivalo_kebutuhan` WHERE `kd_barang` = '$id'"))
		{
			//mengalihkan halaman kembali ke index.php
			redirectPage("page/admin/barang.php");
		}
	}
}




?>