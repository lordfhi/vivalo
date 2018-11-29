
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
                          <p class="mb-0 text-right">Total</p>
                          <div class="fluid-container">
                            <h3 class="font-weight-medium text-right mb-0">Rp.4.000.000</h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
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
                            <h3 class="font-weight-medium text-right mb-0">3455</h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
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
                            <h3 class="font-weight-medium text-right mb-0">5693</h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
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
                            <h3 class="font-weight-medium text-right mb-0">246</h3>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
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