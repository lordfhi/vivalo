<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_barang'];
 
 
// menghapus data dari database

// get all paket
$db->query("DELETE FROM `vivalo_kebutuhan` WHERE `kd_barang` = '$id'");
redirectPage('/page/admin/barang.php');



?>