<?php
require_once __DIR__."/../config/config.php";

if (!cekLoginAuth())
{
   redirectPage("page/page-register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIVALO | VIVA Laundry Online</title>
  <link rel="stylesheet" type="text/css" href="../../asset/css/reset.css">
  <link rel="stylesheet" type="text/css" href="../../asset/css/main.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="../../asset/js/main.js"></script>
  <style type="text/css">
    html {
      /*overflow: hidden;*/
    }
  </style>
</head>
<body>

  <!-- <section class="billboard"> -->
  <header>
    <center>
    <div class="wrapper">
      <a href="#">
        <img src="../../asset/img/yes.png" style="float: none;" class="h_logo" alt="" title="VIVALO">
      </a>
    </div>
    </center>
  </header>

  <!--  -->
  <section class="" style="background-color: #80808059; height: auto;">
    <div class="content" style=" padding-top: 10%;" align="center">
      <table style="width: 80%; font-size: 30pt; background-color: #504dff7a; color: #272525;">
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td style="width: 40%; padding-left: 45px;" align="left">Nama Pengguna</td>
          <td style="width: 5%;" align="center">:</td>
          <td align="center"><?= $_SESSION["user_nama"]; ?></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td style="width: 40%; padding-left: 45px;" align="left">Alamat</td>
          <td style="width: 5%;" align="center">:</td>
          <td align="center"><?= $_SESSION["user_info"]["alamat"]; ?></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td style="width: 40%; padding-left: 45px;" align="left">Nomor Telepon</td>
          <td style="width: 5%;" align="center">:</td>
          <td align="center"><?= $_SESSION["user_info"]["no_hp"]; ?></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
      </table>
      <div style="background-color: red; font-size: 30pt; color: white;" align="center">* Telah Berhasil Melakukan Pemesanan *</div>
      <table style="width: 80%; font-size: 30pt; background-color: #504dff7a; color: #272525;">
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td style="width: 40%; padding-left: 45px;" align="left">Tanggal Pesan</td>
          <td style="width: 5%;" align="center">:</td>
          <td align="center"><?= $_POST["datepicker"] ?></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td style="width: 40%; padding-left: 45px;" align="left">Paket Laundry</td>
          <td style="width: 5%;" align="center">:</td>
          <td align="center"><?= $db->query("SELECT `nama_paket` FROM `vivalo_paket` WHERE `kd_paket` = '".$_POST["paket"]."'")->fetch_assoc()["nama_paket"]; ?></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
        <tr>
          <td colspan="3" style="height: 20px;"></td>
        </tr>
      </table>
      <div align="center" style="width: 100%; margin-top: -20px;">
        <button class="cta_btn" style="font-size: 30pt;width: 20%; margin: 0px;" onclick="window.open('<?= APP_URL ?>page/action/cetak-pesanan.php?kd_pemesanan=<?= $kd_pemesanan ?>','Ratting','width=550,height=700,0,status=0,');">Cetak</button>
        <button class="cta_btn" style="font-size: 30pt;width: 20%; margin: 0px;" onclick="document.location='<?= APP_URL ?>page/page-customer.php'">Oke</button>
      </div>
      <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    </div>
  </section>
</body>
</html>