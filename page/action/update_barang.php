<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// menangkap data yang di kirim dari form
$id = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
 
// update data ke database
$db->query("update vivalo_kebutuhan set nama_barang='$nama_barang', harga='$harga' where kd_barang='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/barang.php");
 
?>