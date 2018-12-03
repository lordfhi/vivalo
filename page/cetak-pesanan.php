<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table style="width: 100%">
	<tr>
		<td colspan="3" align="center">
			<h1>STRUK PESAN KONSUMEN
			<br>
			VIVALO | Viva Laundry Online</h1>
		</td>
	</tr>
	<tr style="font-size: 30px;">
		<td style="width: 50%; padding-right: 200px;" valign="top" align="right">Nama</td>
		<td style="width: 2%;">:</td>
		<td><?= ucfirst($data_konsumen["nama_konsumen"]); ?></td>
	</tr>
	<tr style="font-size: 30px;">
		<td style="width: 50%; padding-right: 200px;" valign="top" align="right">Alamat</td>
		<td style="width: 2%;">:</td>
		<td><?= $data_konsumen["alamat"] ?></td>
	</tr>
	<tr style="font-size: 30px;">
		<td style="width: 50%; padding-right: 200px;" valign="top" align="right">Nomor Telepon</td>
		<td style="width: 2%;">:</td>
		<td><?= $data_konsumen["no_hp"] ?></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<h1>*_BERHASIL MELAKUKAN PEMESANAN LAUNDRY_*
			<br>
			Pada tanggal <?= $data_pemesanan["date"] ?>,
			<br>
			Dengan pesanan paket laundry adalah
			<br>
			"<?= strtoupper("PAKET ".$data_paket["nama_paket"]) ?>"</h1>
		</td>
	</tr>
</table>
<script type="text/javascript">
	// $(document).ready(function() {
		window.print();
	// });
</script>
</body>
</html>