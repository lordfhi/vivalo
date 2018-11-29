<?php
require_once __DIR__."/../config/config.php";

/**
 * Validasi kalo udah login
 */
if (cekLoginAuth())
{
   redirectPage(cekLoginUrl());
}
?>

<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Registrasi VIVALO (VIVA Laundry Online)</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
         rel="stylesheet">
      <script src="https://use.fontawesome.com/512a791d9f.js"></script>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
      <link rel="stylesheet" href="../asset/css/custom.css">
   </head>
   <body>
      <div class="cont_centrar">
      <div class="cont_login">
      <div class="main-title">
      <h1><strong>VIVALO</strong> : FORM REGISTRASI</h1>
      <div class="main-title">
         <?php 
         if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "exists"){
               echo "<center><h3>Daftar gagal! username telah terdaftar!</h3></center>";
            } else if($_GET['pesan'] == "gagal"){
               echo "<center><h3>Login gagal! username dan password salah!</h3></center>";
            }else if($_GET['pesan'] == "logout"){
               echo "<center><h3>Anda telah berhasil logout</h3></center>";
            }else if($_GET['pesan'] == "berhasil"){
               echo "<center><h3>Anda berhasil register</h3></center>";
             }else if($_GET['pesan'] == "belum_login"){
               echo "<center><h3>Anda harus login untuk mengakses halaman admin</h3></center>";
            }
         }
         ?>
      
   </div>
      <div id="holder">
         <div id="login-holder">
            <h4>Sudah punya akun?</h4>
            <div id="login-inputs">
                <div id="form-container-log">
                  <form action="action/login.php" method="post">
                  <input id="username" class="login-inputs" name="username" type="text" placeholder='Nama Pengguna' required="required">
                  <input id="password" class="login-inputs" name="password" type="password" placeholder='Kata Sandi' required="required">
                  <button class="btn-log">MASUK</button>
                  </form>
              </div>
            </div>
            <a href="#" class='login-inputs'>Lupa Kata Sandi??</a>
            <button id="login" class="btn-daftar">MASUK</button>
         </div>
         <div id="divider"></div>



         <div id="signup-holder">
            <h4>Belum punya akun?</h4>
            <div id="form-container">
	            <form method="post" action="action/register.php">
	               <input id="full-name" class="signup-inputs" name="nama" type="text" placeholder='Nama Pengguna' required="required">
	               <input id="Username" class="signup-inputs" type="username" name="username" placeholder='Username' required="required">
	               <input id="password" class="signup-inputs" type="password" name="password" placeholder='Kata Sandi' required="required">
	               <button id='btn-regis' class="btn-log">DAFTAR</button>
	            </form>
	        </div>
			<button id="signup" class="btn-daftar">DAFTAR</button>
            
         </div>
      </div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
      <script  src="../asset/js/index.js"></script>
   </body>
</html>