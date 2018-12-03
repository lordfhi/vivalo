<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <?php if ($_SESSION['user_level'] == 'Admin') { ?>
              <img src="../../asset/img/admin.png" alt="profile image">
            <?php }else{ ?>
              <img src="../../asset/img/manajer.png" alt="profile image">
            <?php } ?>
          </div>
          <div class="text-wrapper">
            <?php 
            if ($_SESSION['user_level'] == 'Admin') {
              $admin = $db->fetch($db->query("SELECT * FROM `vivalo_admin` WHERE `id_admin` = '".$_SESSION["user_info"]["id_admin"]."'"));
              echo '<p class="profile-name">'.$admin["nama_admin"].'</p>';
            }else{
              $admin = $db->fetch($db->query("SELECT * FROM `vivalo_manajer` WHERE `id_manajer` = '".$_SESSION["user_info"]["id_manajer"]."'"));
              echo '<p class="profile-name">'.$admin["nama_manajer"].'</p>';
            }
            ?>
            
            <div>
              <small class="designation text-muted"><?= $_SESSION["user_level"] ?></small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php if ($_SESSION["user_level"] != "Manajer"): ?>
      
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="data_laundry.php">
        <i class="menu-icon mdi mdi-backup-restore"></i>
        <span class="menu-title">Data Laundry</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="data_konsumen.php">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Data Konsumen</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="data_pengeluaran.php">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">Data Pengeluaran</span>
      </a>
    </li>
    <?php endif ?>
    <li class="nav-item">
      <a class="nav-link" href="laporan.php">
        <i class="menu-icon mdi mdi-sticker"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li>
    <li class="nav-item">
      &nbsp;
    </li>
    <?php if ($_SESSION["user_level"] != "Manajer"): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= APP_URL ?>page/admin/barang.php">
        <i class="menu-icon mdi mdi-sticker"></i>
        <span class="menu-title">Barang Kebutuhan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= APP_URL ?>page/admin/paket.php">
        <i class="menu-icon mdi mdi-sticker"></i>
        <span class="menu-title">Paket</span>
      </a>
    </li>
    <?php endif ?>
  </ul>
</nav>