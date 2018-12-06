<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_paket'];
 
 
// menghapus data dari database

// get all paket
$lapData = $db->query("SELECT * FROM `vivalo_pemesanan` where `kd_paket` = '$id'")->fetch_all();
foreach ($lapData as $laporanData)
{
	$delLapData = $db->query("DELETE FROM `vivalo_laporan_pemasukan` WHERE `kd_pemesanan` = '".$laporanData[0]."'");
}
if ($delLapData)
{
	if ($db->query("DELETE FROM `vivalo_pemesanan` WHERE `kd_paket` = '$id'"))
	{
		if($db->query("DELETE FROM `vivalo_paket` WHERE `kd_paket` = '$id'"))
		{
			//mengalihkan halaman kembali ke index.php
			redirectPage("page/admin/paket.php");
		}
	}else{
		redirectPage("page/admin/paket.php");
	}
}else{
	echo "error";
}




?>