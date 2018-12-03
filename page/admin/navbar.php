 <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="../../asset/images/logo.svg" alt="logo">
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="../../asset/images/logo-mini.svg" alt="logo">
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text"><?= $_SESSION["user_nama"] ?></span>
          <img class="img-xs rounded-circle" src="../../asset/img/admin.png" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <br>
          <?php
          // print_r($_SESSION);
          // error_reporting(0);
          if (isset($_SESSION["user_info"]["id_admin"])) {
            $user_info = $db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$_SESSION["user_info"]["id_admin"]."'")->fetch_assoc();
            $href = "edit_user.php?id_admin=".$user_info["id_admin"];
          }else{

            $users = $db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$_SESSION["user_info"]["id_manajer"]."'")->fetch_assoc();
            // echo "asw";
            $href = "edit_user.php?id_manajer=".$users["id_manajer"];
          }
          ?>
          <a class="dropdown-item" href="<?php echo $href; ?>">
            Pengaturan
          </a>
          <a class="dropdown-item" href="<?= APP_URL ?>page/action/logout.php">
            Keluar
          </a> 

        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>