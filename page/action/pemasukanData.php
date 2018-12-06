
	<table border="1">
        <tr>            
            <th>No</th>
            <th>Konsumen</th>
            <th>Jumlah Laundry</th>
            <th>Kode Paket</th>
            <th>Jumlah Harga</th>
            <th>Tanggal Pesan</th>
            <th>Status</th>
        </tr>

        <?php foreach($db->query("SELECT * FROM `vivalo_pemesanan`")->fetch_all() as $konsumen): ?>
        <tr>
            <td><?= $konsumen[0] ?></td>
            <td><?= ucfirst($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$konsumen[1]."'")->fetch_assoc()["nama_konsumen"]) ?></td>
            <td><?php $q = $db->query("SELECT SUM(jumlah_berat) as jumlah FROM `vivalo_barang` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["jumlah"]; if($q == null || $q == ""){ echo "0"; }else{ echo $q; } ?> kg</td>
            <td><?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["nama_paket"] ?> (Rp <?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["harga_paket"] ?>)</td>
            <td>Rp <?php $qs = $db->query("SELECT total_harga FROM `vivalo_barang` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["total_harga"]; if($qs == null || $qs == ""){ echo "0"; }else{ echo $qs; } ?></td>
            <td><?= $konsumen[3] ?></td>
            <td><?= $db->query("SELECT * FROM `vivalo_laporan_pemasukan` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["status"] ?></td>
        </tr>
        <?php endforeach ?>
	</table>
<br>
Total Pemasukan : <b>Rp. <?=
    $db->query("SELECT SUM(total_harga) AS total FROM vivalo_barang")->fetch_assoc()['total'];
?>
</b>
<br>
<br>
Penanggung Jawab : 
<?php 
if ($_SESSION['user_level'] == 'Admin') {
    $admin = $db->fetch($db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$_SESSION["user_info"]["id_admin"]."'"));
    echo $admin["nama_admin"];
}else{
    $admin = $db->fetch($db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$_SESSION["user_info"]["id_manajer"]."'"));
    echo $admin["nama_manajer"];
}
?>
