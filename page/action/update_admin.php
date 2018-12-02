<?php 
// koneksi database
require_once __DIR__."/../../config/config.php";

// menangkap data yang di kirim dari form
$id = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
 
// update data ke database
$db->query("update vivalo_admin set nama_admin='$nama_admin', no_hp='$no_hp', alamat='$alamat' where id_admin='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/index.php");
 
?>