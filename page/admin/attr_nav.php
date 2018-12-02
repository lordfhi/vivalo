<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="../../asset/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><?= $_SESSION["user_nama"] ?></p>
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