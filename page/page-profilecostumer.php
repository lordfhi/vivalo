<?php
require_once __DIR__."/../config/config.php";

if (!cekLoginAuth())
{
   redirectPage("page/page-register.php");
}

// $user_info = $_SESSION['user_info'];
$user_info = $db->fetch($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$_SESSION["user_info"]["id_konsumen"]."'"));
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title>Profil Konsumen</title>
  
  <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" rel="stylesheet">
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="../asset/css/profile.css">

  
</head>

<body>
<div class="awe">
    <header>
   <div class="wrapper">
    <a href="#"><img src="../asset/img/yes.png" class="h_logo" alt="" title="VIVALO"></a>
    <nav>
      <ul class="main_nav">
        <li><a href="<?= (cekLoginAuth() ? APP_URL."page/page-customer.php" : APP_URL."index.php") ?>">Halaman Utama</a></li>
        <li class="current"><a href="page-profilecostumer.php">Profil</a></li>
        <li><a href="page-pengaturan.php">Pengaturan</a></li>
        <li><a href="#">Tentang</a></li>
        <?= (cekLoginAuth() ? "<li><a href='".APP_URL."page/action/logout.php'>Keluar</a></li>" : "<li><a href='".APP_URL."page/page-register.php'>Masuk</a></li>") ?>
      </ul>
    </nav>
  </div>
</header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet" type="text/css">
<div id="profile-wrap">
  <div class="pulse1"></div>
  <div class="pulse2"></div>
  <div class="profile-overlay">
    <?php if ($user_info['file'] != ''): ?>
        <img src="../../asset/img/<?= $user_info["file"] ?>" style="border-radius: 50%;width: 270px;height: 280px;">
    <?php endif ?>
  </div>
  <div class="profile-image"></div>
  <div class="profile-name" style="color: white !important;">
    <h2 style="color: white    !important;">Hi, "<?= $user_info["nama_konsumen"] ?>"<br>
      <span style="color: white    !important;"> E-mail : <?= $user_info["email"]; ?> </span>
      <span style="color: white    !important;">No. Telepon : <?= $user_info["no_hp"] ?></span>
      <span style="color: white    !important;">Alamat : <?= $user_info["alamat"] ?></span></h2>
  </div>
  <div class="profile-social">
    <ul>
     <section class="call_to_action">
      <a href="<?= APP_URL ?>page/page-pengaturan.php" class="cta_btn">EDIT</a>
    </section> 
  </ul>
</div>
</div>
</div>

</body>

</html>
