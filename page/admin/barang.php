
<!DOCTYPE html>
<html lang="en">
<?php 
include 'attr_head.php';
?>
<style type="text/css">
  .dataTables_length, .dataTables_filter {
    display: none;
  }
</style>
    <body>
      <?php
      if (isset($_GET["pesan"]))
      {
        if ($_GET["pesan"] == "buat_oke") echo "<script>alert('Berhasil menambahkan data paket.')</script>";
        if ($_GET["pesan"] == "data_ada") echo "<script>alert('Gagal menambahkan data paket, data sudah ada!')</script>";
      }
      ?>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Tambah Barang
                    </button>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($db->query("SELECT * FROM `vivalo_kebutuhan` WHERE 1")->fetch_all() as $barang): ?>
                            <tr>
                                <td align="center"><?= $barang[0] ?></td>
                                <td><?= $barang[1] ?></td>
                                <td><?= $barang[2] ?></td>
                                <td><a href="edit_barang.php?kd_barang=<?php echo  $barang[0]; ?>" class="btn btn-warning">Edit</a>&nbsp;<a href="../action/hapus_barang.php?kd_barang=<?php echo  $barang[0]; ?>" class="btn btn-danger">Hapus</a></td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= APP_URL ?>page/action/tambah_barang.php" method="post" id="formTambahPaket">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Barang :</label>
            <input type="text" class="form-control" required="" id="recipient-name" name="nama_barang">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Harga Barang :</label>
            <input type="text" class="form-control" required="" id="recipient-name" name="harga">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="button" class="btn btn-primary" onclick="$('#formTambahPaket').submit();">Simpan</button>
      </div>
    </div>
  </div>
</div>

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
    $('#example').DataTable({
      "language":{
        "url":"indonesia.json",
        "sEmptyTable":"Tidads"
      }
    });
} );
</script>

    </body></html>