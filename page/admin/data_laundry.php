
<!DOCTYPE html>
<html lang="en">

<?php 
include 'attr_head.php';
?>
      <?php
      if (isset($_GET["pesan"]))
      {
        if ($_GET["pesan"] == "oke") echo "<script>alert('Berhasil memperbarui data.')</script>";
      }
      ?>

    <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
      <?php
       include 'navbar.php';

        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <?php require_once __DIR__."/attr_nav.php" ?>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">

              <div class="row">
               <div class="container-fluid">
                 <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th>Kode Pemesanan</th>
                                <th>Konsumen</th>
                                <th>Jumlah Laundry</th>
                                <th>Kode Paket</th>
                                <th>Jumlah Harga</th>
                                <th>Tanggal Pesan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($db->query("SELECT * FROM `vivalo_pemesanan`")->fetch_all() as $konsumen): ?>
                            <tr>
                                <td><?= $konsumen[0] ?></td>
                                <td><?= ucfirst($db->query("SELECT * FROM `vivalo_konsumen` WHERE `id_konsumen` = '".$konsumen[1]."'")->fetch_assoc()["nama_konsumen"]) ?></td>
                                <td><?= $konsumen[4] ?> kg</td>
                                <td><?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["nama_paket"] ?> (Rp <?= $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["harga_paket"] ?>)</td>
                                <td>Rp <?= ($konsumen[4] * $db->query("SELECT * FROM `vivalo_paket` WHERE `kd_paket` = '".$konsumen[2]."'")->fetch_assoc()["harga_paket"]) ?></td>
                                <td><?= $konsumen[3] ?></td>
                                <td><?= strtoupper($db->query("SELECT * FROM `vivalo_laporan_pemasukan` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["status"]) ?></td>
                                <td>
                                  <?php 
                                  $status = $db->query("SELECT * FROM `vivalo_laporan_pemasukan` WHERE `kd_pemesanan` = '".$konsumen[0]."'")->fetch_assoc()["status"];
                                  if ($status == "pending")
                                  {
                                    echo '<a href="'.APP_URL.'page/action/update-status-pesanan.php?kd_pemesanan='.$konsumen[0].'&status=diproses" class="btn btn-primary">Proses</a>';
                                  } else
                                  if ($status == "diproses")
                                  {
                                    echo '<a href="'.APP_URL.'page/action/update-status-pesanan.php?kd_pemesanan='.$konsumen[0].'&status=selesai" class="btn btn-warning">Selesi</a>';
                                  } else
                                  if ($status == "selesai")
                                  {
                                    echo '<a href="#" class="btn btn-success disabled">DONE</a>';
                                  }
                                  ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                 </div>
               </div>
              </div>




            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                  <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with
                  <i class="mdi mdi-heart text-danger"></i>
                </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      <!-- plugins:js -->
      <script src="../../asset/vendors/js/vendor.bundle.base.js"></script>
      <script src="../../asset/vendors/js/vendor.bundle.addons.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="../../asset/js/off-canvas.js"></script>
      <script src="../../asset/js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="../../asset/js/dashboard.js"></script>
      <!-- End custom js for this page-->
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    </body></html>