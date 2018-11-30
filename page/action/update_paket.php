<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// menangkap data yang di kirim dari form
$id = $_POST['kd_paket'];
$nama_paket = $_POST['nama_paket'];
$harga_paket = $_POST['harga_paket'];
 
// update data ke database
$db->query("update vivalo_paket set nama_paket='$nama_paket', harga_paket='$harga_paket' where kd_paket='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/paket.php");
 
?>