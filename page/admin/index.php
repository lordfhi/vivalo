
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
        <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <?php require_once __DIR__."/attr_nav.php" ?>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">

              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-cube text-danger icon-lg"></i>
                        </div>

                        <div class="float-right">
                          <p class="mb-0 text-right">Total Pemasukan Laundry</p>
                          <div class="fluid-container">
                          
                            <h3 class="font-weight-medium text-right mb-0"> Rp. <?=
                              number_format($db->query("SELECT SUM(total_harga) AS total FROM vivalo_barang")->fetch_assoc()['total']);

                            ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                       
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-receipt text-warning icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Orders</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?=
                              $db->query("SELECT count(kd_pemesanan) AS kode FROM vivalo_pemesanan")->fetch_assoc()['kode'];

                            ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                      
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-poll-box text-success icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Pengeluaran</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">Rp. <?=
                              number_format($db->query("SELECT SUM(total_harga) AS total FROM vivalo_pembelian")->fetch_assoc()['total']);

                            ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                       
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                        <div class="float-left">
                          <i class="mdi mdi-account-location text-info icon-lg"></i>
                        </div>
                        <div class="float-right">
                          <p class="mb-0 text-right">Total Konsumen</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0"><?=
                              $db->query("SELECT COUNT(id_konsumen) AS total FROM vivalo_konsumen")->fetch_assoc()['total'];

                            ?></h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                      
                      </p>
                    </div>
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


    </body></html>