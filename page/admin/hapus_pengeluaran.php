<?php 
require_once __DIR__."/../../config/config.php";
$id = $_GET['kd_pembelian'];
 
 
// menghapus data dari database
$db->query("delete from vivalo_pembelian where kd_pembelian='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_pengeluaran.php");



?>