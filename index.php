<?php
require_once __DIR__."/config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIVALO | VIVA Laundry Online</title>
  <link rel="stylesheet" type="text/css" href="asset/css/reset.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="asset/js/main.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

  <section class="billboard">
    <header>
      <div class="wrapper">
        <a href="#"><img src="asset/img/yes.png" class="h_logo" alt="" title="VIVALO"></a>
        <nav>
          <ul class="main_nav">
            <li class="current"><a href="<?= (cekLoginAuth() ? APP_URL."page/page-customer.php" : APP_URL."index.php") ?>">Halaman Utama</a></li>
            <li><a href="page/page-profilecostumer.php">Profil</a></li>
            <li><a href="page/page-pengaturan.php">Pengaturan</a></li>
            <?= (cekLoginAuth() ? "<li><a href='".APP_URL."page/action/logout.php'>Keluar</a></li>" : "<li><a href='".APP_URL."page/page-register.php'>Masuk</a></li>") ?>
          </ul>
        </nav>
      </div>
    </header>

    <section class="caption">
      <p class="cap_title">VIVALO</p>
      <p class="cap_title">VIVA Laundry Online</p>
      <p class="cap_desc">Ambil, Cuci, Antar, Puas</p>
    </section>
  </section><!-- Billboard End -->

  <section class="services wrapper">
    <div class="S_icons">
      <img src="asset/img/1.png" alt="" title=""/>
      <hr class="sp"/>
      <img src="asset/img/2.png" alt="" title=""/>
      <hr class="sp"/>
      <img src="asset/img/33.png" alt="" title=""/>
    </div>
    <ul class="desc">
      <li>
        <h3>Layanan</h3>
        <p>Viva Laundry Online memberikan pelayanan melaundry pakaian Anda dengan cepat, bersih, dan memuaskan.</p>
        <p> ~ </p>
      </li>
      <li>
        <h3>Paket</h3>
        <p>Menyediakan paket pilihan untuk memberikan pengalaman melaundry yang akan dapat dirasa lebih efisien dan menyenangkan.</p>
        <p> ~ </p>
      </li>
      <li>
        <h3>Pesan</h3>
        <p>Memberikan kemudahan dalam akses dan melakukan pemesanan laundry hanya dengan menyantumkan data valid Anda pada sistem.</p>
        <p> ~ </p>
      </li>
    </ul>
  </section><!-- services End -->
  
  <section class="call_to_action" style="margin-bottom: 0px;">
    <div class="wrapper">
      <img src="asset/img/ii.png" alt="" title="">
      <section class="cta_desc">
        <h3>Ayo Mulai!</h3>
        <p>Tekan tombol dibawah ini untuk mulai pesanan.</p>
        <a href="page/page-customer.php" class="cta_btn">PESAN</a>
      </section>
    </div>
  </section><!-- call_to_action End -->

  <section class="newsletter">
    <div class="wrapper" align="center">
      <p style="margin-left: 0px;">"Berbahagialah dan laundry baju kotormu"</p>
    </div>
  </section><!-- newsletter End -->

  <footer>
    <img src="asset/img/yoo.png" alt="" title="">
    <nav>
      <ul>
        <!-- <li><a href="#">Daftar Harga</a></li>
        <li><a href="#">Kebijakan</a></li>
 -->      </ul>
    </nav>
    <hr class="footer_sp"/>
    <p class="rights">© 2018 VIVALO | Viva Laundry Online - Ambil, Cuci, Antar, Puas .</p>
  </footer><!-- footer End -->

</body>
<script type="text/javascript">
$( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
</html>