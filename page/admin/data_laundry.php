
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
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Konsumen</th>
                                <th>Kode Pemesanan</th>
                                <th>Jumlah Laundry</th>
                                <th>Kode Paket</th>
                                <th>Jumlah Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>33</td>
                                <td>KP-32</td>
                                <td>30</td>
                                <td>KPKT-9</td>
                                <td>Rp.100.000.000</td>
                                <td><button class="btn btn-success">OKE</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>32</td>
                                <td>KP-31</td>
                                <td>31</td>
                                <td>KPKT-10</td>
                                <td>Rp.30.000.000</td>
                                <td><button class="btn btn-warning">PENDING</button></td>
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