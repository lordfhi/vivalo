<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_paket'];
 
 
// menghapus data dari database
$act1 = $db->query("delete from vivalo_pemesanan where kd_paket='$id'");
if ($act1)
{
	
$db->query("delete from vivalo_paket where kd_paket='$id'");
}
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/paket.php");



?>