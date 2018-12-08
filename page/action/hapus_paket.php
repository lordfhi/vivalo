<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_paket'];
 
 
// menghapus data dari database

// get all paket
$db->query("DELETE FROM `vivalo_paket` WHERE `kd_paket` = '$id'");
redirectPage('/page/admin/paket.php');


?>