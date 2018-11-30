
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
                <?php
        $id = $_GET['kd_barang'];
          $data = $db->query("select * from vivalo_kebutuhan where kd_barang='$id'")->fetch_assoc();
                 ?>
               <form action="<?= APP_URL ?>page/action/update_barang.php" method="post" id="formTambahPaket">
                <input type="hidden" name="kd_barang" value="<?php echo $data['kd_barang']; ?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Barang :</label>
            <input type="text" class="form-control" required="" id="recipient-name" name="nama_barang" value="<?= $data['nama_barang']?>" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Barang :</label>
            <input type="text" class="form-control" required="" value="<?= $data['harga']?>" id="recipient-name" name="harga">
          </div>
          <button type="submit" class="btn btn-warning" >Edit</button>
        </form>
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