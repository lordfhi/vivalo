<?php 

require_once __DIR__."/../../config/config.php";
// print_r();
$id_konsumen = $_POST['id_konsumen'];
$nama_barang = $_POST['nama_barang'];
$jumlah_berat = $_POST['jumlah_berat'];
$total_harga = $_POST['total_harga'];

$index = 0;
foreach ($nama_barang as $barang_nama) {
	$q = "INSERT INTO `vivalo_barang` (`id_konsumen`,`nama_barang`,`jumlah_berat`,`total_harga`) VALUES ('$id_konsumen','$barang_nama','$jumlah_berat[$index]','$total_harga[$index]')";
	$db->query($q);
	$index++;
}


redirectPage("page/admin/data_laundry.php");
// $count = count($nama_barang);

// for($x=0;$x<$count;$x++){
	// mysql_query("INSERT INTO makanan values('','$makanan[$x]')");
	// $db->query("INSERT INTO `vivalo_barang`(`nama_konsumen`,`alamat`,`no_hp`) VALUES ('$nama','$alamat','$no_hp')");
// }
?>