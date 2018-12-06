<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// menangkap data yang di kirim dari form
$id = $_POST['kd_pembelian'];
$kd_barang = $_POST['kd_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$date = date("Y-m-d", strtotime($_POST["datepicker"]));
 
// update data ke database
$sql = "update vivalo_pembelian set kd_barang='$kd_barang', jumlah_barang='$jumlah_barang', date='$date' where kd_pembelian='$id'";
$db->query($sql);
// echo $sql;
// mengalihkan halaman kembali ke index.php
header("location:../admin/data_pengeluaran.php");
 
?>