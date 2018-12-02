<?php
require_once __DIR__."/../config/config.php";

if (cekLoginAuth())
{
   redirectPage(cekLoginUrl());
}
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
  
	<h1><strong>VIVALO</strong> : Lupa Password</h1>
	
  <div class="main-title"></div>
	
  <div id="holder">

   <div id="signup-holder" style="height: 420px !important;">

      <h4>Lupa password Anda?</h4>

      <?php
      if (isset($_GET["step2"]))
      {
        ?>
      <form action="<?= APP_URL ?>page/action/lupa-password.php" method="post">

      <input id="email" class="signup-inputs" type="text" placeholder='Email' name="email" value="<?= $_POST["email"] ?>" readonly>

      <input type="password" class="signup-inputs" placeholder="New Password" name="password" required="">

      <button type="submit" id="" style="width: 150px;height: 30px;background-color: #9b59b6;color: #fff;margin: 15px 50px;display: inline-block;border: none;margin-left:200px;">Konfirmasi</button>

      </form>
        <?php
      } else {
        ?>
      <form action="<?= APP_URL ?>page/page-lupapassword.php?step2=yes" method="post">

      <input id="email" class="signup-inputs" type="text" placeholder='Email' name="email" value="" required="">

      <button type="submit" id="" style="width: 150px;height: 30px;background-color: #9b59b6;color: #fff;margin: 15px 50px;display: inline-block;border: none;margin-left:200px;">Konfirmasi</button>

      </form>
        <?php
      }
      ?>
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