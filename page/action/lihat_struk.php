
<?php 
include '../admin/attr_head.php';
?>

<style type="text/css">
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #f34f4e;
  color: white;
}
#customers td {
  text-align: center;
}
</style>
<div class="row">
  <div class="col-md-12">
    <a class="btn btn-success" style="float: right;" id="print" href="<?php echo APP_URL.'page/action/lihat_struk2.php?kd_pemesanan='.$_GET['kd_pemesanan']; ?>">Cetak</a>
  </div>
  <div class="col-md-6">
    <span style="color:red;font-size: 15px;">VIVALO | Viva Laundry Online</span>
    <span style="color:black;font-size: 12px;font-weight: bold;">Jl. Jendral Sudirman KM. 05, Kudus</span>
  </div>
  <div class="col-md-3">
    <span style="color:red;font-size: 12px;">
      <img src="../../asset/img/yes.png" style="">
    </span>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-12"><hr style="background: red;"></div>
  <div class="col-md-4">
    <span style="color:red;font-size: 15px;">Tanggal</span><br>
    <span style="color:black;font-size: 12px;font-weight: bold;"><?php echo date("F d, Y", strtotime($db->fetch($db->query("SELECT * FROM `vivalo_pemesanan` WHERE `kd_pemesanan` = '".$_GET["kd_pemesanan"]."'"))["date"])); ?></span>
  </div>

  <div class="col-md-4">
    <span style="color:red;font-size: 15px;">Untuk</span><br>
    <span style="color:black;font-size: 12px;font-weight: bold;">
      <?php $kosnumen = $db->fetch($db->query("SELECT * FROM `vivalo_konsumen` INNER JOIN vivalo_pemesanan ON vivalo_pemesanan.id_konsumen = vivalo_konsumen.id_konsumen WHERE `kd_pemesanan` = '".$_GET["kd_pemesanan"]."'")); ?>
    <?php echo $kosnumen['nama_konsumen'].' , '.$kosnumen['alamat'].'. , No Telp'. $kosnumen['no_hp']; ?></span>
  </div>

  <div class="col-md-4">
    <span style="color:red;font-size: 15px;">Hal</span><br>
    <span style="color:black;font-size: 12px;font-weight: bold;">Pembayaran Laundry</span>
  </div>
  <div class="col-md-12"><hr style="background: red;"></div>
  <div class="col-md-12">
    <span style="color:red;font-size: 15px;">Pembayaran Laundry</span><br>
    <span style="color:black;font-size: 12px;font-weight: bold;">Rincian: </span><br>
    <table id="customers">
      <tr>
        <th>Jumlah (Kg)</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Total</th>
      </tr>
      <?php $subtotal = 0; ?>
      <?php foreach ($db->query("SELECT * FROM `vivalo_barang` WHERE `kd_pemesanan` = '".$_GET["kd_pemesanan"]."'") as $val): ?>
        
      <tr>
        <td><?php echo $val['jumlah_berat']; ?></td>
        <td><?php echo $val['nama_barang']; ?></td>
        <td><?php echo 'Rp '.number_format($val['harga']); ?></td>
        <td><?php echo 'Rp '.number_format($val['total_harga']); ?></td>
      </tr>
      <?php $subtotal += $val['total_harga']; ?>
      <?php endforeach ?>
    </table>
  </div>
  <div class="col-md-12"><br></div>
  <div class="col-md-12">
    <span style="float: right;">Subtotal: <b>Rp <?php echo number_format($subtotal); ?></b></span><br>
  </div>
  <div class="col-md-12">
    <span style="float: right;"> <b>Admin By 
      <?php 
      if ($_SESSION['user_level'] == 'Admin') {
        $admin = $db->fetch($db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$_SESSION["user_info"]["id_admin"]."'"));
        echo $admin["nama_admin"];
      }else{
        $admin = $db->fetch($db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$_SESSION["user_info"]["id_manajer"]."'"));
        echo $admin["nama_manajer"];
      }
      ?>
    </b></span>
  </div>
  <div class="col-md-12">
    <span style="float: right;color: #f34f4e;font-size: 12px;"> <b>Terima Kasih Sudah Bergabung Dengan Layanan Jasa Kami</b></span>
  </div>
</div>  
</div>
