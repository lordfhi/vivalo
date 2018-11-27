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
      <div class="main-title"></div>
      <div id="holder">
         <div id="login-holder">
            <h4>Sudah punya akun?</h4>
            <div id="login-inputs">
               <input id="username" class="login-inputs" type="text" placeholder='Nama Pengguna'>
               <input id="password" class="login-inputs" type="password" placeholder='Kata Sandi'>
            </div>
            <a href="#" class='login-inputs'>Lupa Kata Sandi??</a>
            <a href="page/page-costumer.php" id="login">MASUK</a>
         </div>
         <div id="divider"></div>
         <div id="signup-holder">
            <h4>Belum punya akun?</h4>
            <div id="form-container">
	            <form method="post" action="config/proses-register.php">
	               <input id="full-name" class="signup-inputs" name="nama" type="text" placeholder='Nama Pengguna'>
	               <input id="Username" class="signup-inputs" type="text" name="username" placeholder='Username'>
	               <input id="password" class="signup-inputs" type="password" name="password" placeholder='Kata Sandi'>
	               <button id='btn-regis'>OKE</button>
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