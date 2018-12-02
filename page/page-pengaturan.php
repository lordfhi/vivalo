<?php
require_once __DIR__."/../config/config.php";


if (!cekLoginAuth())
{
   redirectPage("page/page-register.php");
}
$user_info = $_SESSION['user_info'];
?>

<!DOCTYPE html>

<html lang="en" >


<head>

  <meta charset="UTF-8">

  <title>Profil | VIVALO (VIVA Laundry Online)</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
 rel="stylesheet">

  <script src="https://use.fontawesome.com/512a791d9f.js"></script>


  
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>


  <link rel="stylesheet" href="../asset/css/style.css">


</head>


<body>
	<div class="cont_centrar">

  <div class="cont_login">
  <div class="main-title">
  
	<h1><strong>VIVALO</strong> : Pengaturan Profil</h1>
	
  <div class="main-title"></div>
	
  <div id="holder">

   <div id="signup-holder" style="height: 420px !important;">

      <h4>Edit Profil Anda?</h4>

      <form action="<?= APP_URL ?>page/action/save-profile.php" method="post">

      <?php
        $user_info = $db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$_SESSION["user_info"]["id_konsumen"]."'")->fetch_assoc();
        $user_login = $db->query("SELECT * FROM `vivalo_users` WHERE `id_konsumen` = '".$_SESSION["user_info"]["id_konsumen"]."'")->fetch_assoc();
      ?>

      <input id="full-name" class="signup-inputs" type="text" placeholder='Nama Pengguna' name="nama_konsumen" value="<?= $user_info["nama_konsumen"] ?>">

      <input id="email" class="signup-inputs" type="text" placeholder='Email' name="email" value="<?= $user_login["email"] ?>">

      <input id="no_hp" class="signup-inputs" type="text" name="no_hp" placeholder='No HP' value="<?= $user_info["no_hp"] ?>">

      <input id="password" class="signup-inputs" type="password" placeholder='Kata Sandi' name="password">

      <textarea class="signup-inputs" name="alamat" placeholder="Alamat" cols="4" style="box-shadow:1px 1px 2px rgba(0,0,0,.2);-o-box-shadow:1px 1px 2px rgba(0,0,0,.2);-ms-box-shadow:1px 1px 2px rgba(0,0,0,.2);-moz-box-shadow:1px 1px 2px rgba(0,0,0,.2);-webkit-box-shadow:1px 1px 2px rgba(0,0,0,.2);width:250px;height:50px;margin-top:20px;border:none;border-radius:0;text-indent:10px;display:none;margin-left:150px"><?= $user_info["alamat"] ?></textarea>

      <button type="submit" id="" style="width: 150px;height: 30px;background-color: #9b59b6;color: #fff;margin: 15px 50px;display: inline-block;border: none;margin-left:200px;">Konfirmasi</button>

      <input type="hidden" name="old_password" value="<?= $user_login["password"] ?>">

      </form>

      <button id="signup">Konfirmasi</button>
   </div>

  </div>
  
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

   <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

   <script  src="../asset/js/index.js"></script>
   <script type="text/javascript">
    setTimeout(function(){
      $("#signup").click();
    }, 100);
     $("#signup-holder").slideDown();
   </script>
</body>
</html>