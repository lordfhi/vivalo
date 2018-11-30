
<!DOCTYPE html>
<html lang="en">
<?php 
include 'attr_head.php';
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
                          
                                <th>Kode Pembelian</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Total Harga</th>
                                <th>Tanggal Pembelian</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php foreach($db->query("SELECT kd_pembelian, vivalo_pembelian.kd_barang, total_harga, jumlah_barang, date, vivalo_kebutuhan.nama_barang FROM `vivalo_pembelian` JOIN vivalo_kebutuhan ON vivalo_pembelian.kd_barang = vivalo_kebutuhan.kd_barang")->fetch_all() as $konsumen): ?>
                            <tr>
                                <td><?= $konsumen[0] ?></td>
                                <td><?= $konsumen[1] ?></td>
                                <td><?= $konsumen[5] ?></td>
                                <td><?= $konsumen[3] ?></td>
                                <td><?= $konsumen[2] ?></td>
                                <td><?= $konsumen[4] ?></td>
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