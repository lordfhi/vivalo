
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
		$data = $db->query("SELECT vivalo_laporan_pengeluaran.kd_pembelian, vivalo_pembelian.date, vivalo_pembelian.jumlah_barang, vivalo_pembelian.total_harga, vivalo_laporan_pengeluaran.status FROM `vivalo_laporan_pengeluaran` JOIN vivalo_pembelian ON vivalo_laporan_pengeluaran.kd_pembelian = vivalo_pembelian.kd_pembelian");
		$no = 1;
		while($d = $db->fetch($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['vivalo_laporan_pengeluaran.kd_pembelian']; ?></td>
			<td><?php echo $d['vivalo_pembelian.date']; ?></td>
			<td><?php echo $d['vivalo_pembelian.jumlah_barang']; ?></td>
			<td><?php echo $d['vivalo_pembelian.total_harga']; ?></td>
			<td>x</td>
		</tr>
		<?php 
		}
		?>
	</table>