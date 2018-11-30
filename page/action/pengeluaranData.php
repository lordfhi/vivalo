
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Pembelian</th>
			<th>Tanggal Pembelian</th>
			<th>Jumlah Barang</th>
			<th>Total Harga</th>
			<th>Status</th>
		</tr>
		   <?php 
require_once __DIR__."/../../config/config.php";
foreach($db->query("SELECT * FROM `vivalo_pengeluaran`")->fetch_assoc() as $pengeluaran): ?>
        <tr>
            <td><?= $pengeluaran[0] ?></td>
            <td><?= $pengeluaran[1]?></td>
            <td><?= $pengeluaran[4] ?> kg</td>
            <td><?= $pengeluaranp[3]?></td>
            <td>Rp <?= $pengeluaran[2]?></td>
        </tr>
        <?php endforeach ?>
	</table>