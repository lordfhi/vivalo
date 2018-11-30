
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
                <div class="col-xl-2 col-lg-3 col-md-2 col-sm-6 grid-margin stretch-card">
                  
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                     
                          <a href="../action/exportPemasukan.php" class="btn btn-primary btn-lg btn-block">Laporan Pemasukan</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <div class="clearfix">
                     
                          <a href="../action/exportPengeluaran.php" class="btn btn-success btn-lg btn-block">Laporan Pengeluaran</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-2 col-sm-6 grid-margin stretch-card">
                 
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