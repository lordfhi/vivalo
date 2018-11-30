<table border="1">
	<thead>
		<tr>

			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Total Harga</th>
			<th>Tanggal Pembelian</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($db->query("SELECT kd_pembelian, vivalo_pembelian.kd_barang, total_harga, jumlah_barang, date, vivalo_kebutuhan.nama_barang FROM `vivalo_pembelian` JOIN vivalo_kebutuhan ON vivalo_pembelian.kd_barang = vivalo_kebutuhan.kd_barang")->fetch_all() as $konsumen): ?>
		<tr>
			<td><?= $konsumen[0] ?></td>
			<td><?= $konsumen[1] ?></td>
			<td><?= $konsumen[5] ?></td>
			<td><?= $konsumen[3] ?></td>
			<td><?= $konsumen[2] ?></td>
			<td><?= $konsumen[4] ?></td>
		</tr>
	<?php endforeach ?>
</tbody>
</table>