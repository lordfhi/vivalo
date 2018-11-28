
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
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <div class="nav-link">
                  <div class="user-wrapper">
                    <div class="profile-image">
                      <img src="../../asset/images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                      <p class="profile-name">Richard V.Welsh</p>
                      <div>
                        <small class="designation text-muted">Manager</small>
                        <span class="status-indicator online"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
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
              <li class="nav-item">
                <a class="nav-link" href="laporan.php">
                  <i class="menu-icon mdi mdi-sticker"></i>
                  <span class="menu-title">Laporan</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">

              <div class="row">
               <div class="container-fluid">
                 <div class="col-md-12">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Konsumen</th>
                                <th>Nama Konsumen</th>
                                <th>Alamat</th>
                                <th>Nomer Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>22</td>
                                <td>Andri K</td>
                                <td>Jakarta Timur</td>
                                <td>089663273728</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>221</td>
                                <td>Luthfi K</td>
                                <td>Jakarta Timur</td>
                                <td>089663273728</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>22</td>
                                <td>Dika K</td>
                                <td>Jakarta Timur</td>
                                <td>089663273728</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>212</td>
                                <td>Sokar K</td>
                                <td>Jakarta Timur</td>
                                <td>089663273728</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>25</td>
                                <td>Awing K</td>
                                <td>Jakarta Timur</td>
                                <td>089663273728</td>
                            </tr>
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