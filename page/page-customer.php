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
	<link rel="stylesheet" type="text/css" href="../asset/css/reset.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/main.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="../asset/js/jquery.js"></script>
	<script type="text/javascript" src="../asset/js/main.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

	<section class="billboard">
		<header>
			<div class="wrapper">
				<a href="#"><img src="../asset/img/yes.png" class="h_logo" alt="" title="VIVALO"></a>
				<nav>
					<ul class="main_nav">
						<li class="current"><a href="../index.php">Halaman Utama</a></li>
						<li><a href="page-profilecostumer.php">Profil</a></li>
						<li><a href="page-pengaturan.php">Pengaturan</a></li>
						<li><a href="#">Tentang</a></li>
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
			<img src="../asset/img/1.png" alt="" title=""/>
			<hr class="sp"/>
			<img src="../asset/img/2.png" alt="" title=""/>
			<hr class="sp"/>
			<img src="../asset/img/33.png" alt="" title=""/>
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

	<br>

  <section class="call_to_action">
    <div class="" style="padding-top: 100px;">
      <section class="">
        <form method="post" class="" action="<?= APP_URL ?>page/action/pesan.php" style="font-size: 30pt; padding-left: 15%;" id="formPesanan">
          <table style="width: 80%;" border="1">
            <tr>
              <td style="width: 30%;">Tanggal Pesan</td>
              <td style="width: 5%">:</td>
              <td style="width: 45%"><input autocomplete="off" type="text" name="datepicker" id="datepicker" style="font-size: 30pt; width: 100%;"></td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <?php foreach($db->query("SELECT * FROM `vivalo_paket` WHERE 1")->fetch_all() as $key => $paket): ?>
            <tr>
              <td style="width: 15%;"><?= ($key == 0 ? "Paket" : NULL) ?></td>
              <td style="width: 5%">:</td>
              <td style="width: 45%; padding-left: 8%;" align="left"><input type="checkbox" name="paket" value="<?= $paket[0] ?>" style="transform: scale(2);">&nbsp;&nbsp;&nbsp;<?= $paket[1] ?> <small style="font-size: 15pt;">~ 1kg : Rp <?= $paket[2] ?></small></td>
            </tr>
            <?php endforeach ?>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center">
              </td>
              <td align="center">
                <a href="javascript:" class="cta_btn" style="margin: 0px; width: 70%;" onclick="$('#formPesanan').submit();">KIRIM</a>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </div>
  </section><!-- call_to_action End -->


	<section class="newsletter">
		<div class="wrapper">
			<p>"Berbahagialah dan laundry baju kotormu"</p>
		</div>
	</section><!-- newsletter End -->

	<footer>
		<img src="../asset/img/yoo.png" alt="" title="">
		<nav>
			<ul>
				<li><a href="#">Daftar Harga</a></li>
				<li><a href="#">Kebijakan</a></li>
			</ul>
		</nav>
		<hr class="footer_sp"/>
		<p class="rights">© 2018 VIVALO | Viva Laundry Online - Ambil, Cuci, Antar, Puas .</p>
	</footer><!-- footer End -->

<script type="text/javascript">
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
</body>