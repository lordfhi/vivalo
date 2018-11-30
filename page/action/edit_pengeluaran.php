<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// menangkap data yang di kirim dari form
$id = $_POST['kd_pembelian'];
$jumlah_barang = $_POST['jumlah_barang'];
$date = date("Y-m-d", strtotime($_POST["datepicker"]));
 
// update data ke database
$db->query("update vivalo_pembelian set jumlah_barang='$jumlah_barang', date='$date' where kd_pembelian='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/data_pengeluaran.php");
 
?>