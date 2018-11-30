<?php
require_once __DIR__."/../config/config.php";

if (!cekLoginAuth())
{
   redirectPage("page/page-register.php");
}
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
        <li class="current"><a href="../index.php">Halaman Utama</a></li>
        <li><a href="page-profilecostumer.php">Profil</a></li>
        <li><a href="page-pengaturan.php">Pengaturan</a></li>
        <li><a href="#">Tentang</a></li>
        <?= (cekLoginAuth() ? "<li><a href='".APP_URL."page/action/logout.php'>Keluar</a></li>" : "<li><a href='".APP_URL."page/page-register.php'>Masuk</a></li>") ?>
      </ul>
    </nav>
  </div>
</header>

<?php
  $user_info = $db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$_SESSION["user_info"]["id_konsumen"]."'")->fetch_assoc();
  $user_login = $db->query("SELECT * FROM `vivalo_users` WHERE `id_konsumen` = '".$_SESSION["user_info"]["id_konsumen"]."'")->fetch_assoc();
?>


<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet" type="text/css">
<div id="profile-wrap">
  <div class="pulse1"></div>
  <div class="pulse2"></div>
  <div class="profile-overlay"></div>
  <div class="profile-image"></div>
  <div class="profile-name" style="color: black !important;">
    <h2 style="color: black !important;">Hi, "<?= $user_info["nama_konsumen"] ?>"<br>
      <span style="color: black !important;"> E-mail : <?= $user_login["email"] ?> </span>
      <span style="color: black !important;">No. Telepon : <?= $user_info["no_hp"] ?></span>
      <span style="color: black !important;">Alamat : <?= $user_info["alamat"] ?></span></h2>
  </div>
  <div class="profile-social">
    <ul>
     <section class="call_to_action">
      <a href="page-pengaturan" class="cta_btn">EDIT</a>
    </section> 
  </ul>
</div>
</div>
</div>

</body>

</html>
