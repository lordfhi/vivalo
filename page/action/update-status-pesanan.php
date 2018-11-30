<?php 
require_once __DIR__."/../../config/config.php";

//
$kd_pemesanan = $_GET["kd_pemesanan"];
$status = $_GET["status"];

$updData = $db->query("UPDATE `vivalo_laporan_pemasukan` SET `status`='$status' WHERE `kd_pemesanan` = '$kd_pemesanan'");
if ($updData)
{
	redirectPage("page/admin/data_laundry.php?pesan=oke");
}
