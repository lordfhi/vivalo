
	<table border="1">
        <tr>            
            <th>Kode Pemesanan</th>
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
            <td><?= $konsumen[4] ?> kg</td>
            <td><?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["nama_paket"] ?> (Rp <?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["harga_paket"] ?>)</td>
            <td>Rp <?= ($konsumen[4] * $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["harga_paket"]) ?></td>
            <td><?= $konsumen[3] ?></td>
            <td><?= $db->query("SELECT * FROM `vivalo_laporan_pemasukan` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["status"] ?></td>
        </tr>
        <?php endforeach ?>
	</table>