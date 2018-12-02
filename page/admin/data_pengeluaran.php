
<!DOCTYPE html>
<html lang="en">
<?php 
include 'attr_head.php';
?>
      <?php
      if (isset($_GET["pesan"]))
      {
        if ($_GET["pesan"] == "oke") echo "<script>alert('Berhasil menambahkan data pengeluaran.')</script>";
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
                  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">+ Tambah Data Pengeluaran</button><br><br>
                 <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%;padding-top: 10px;">
                        <thead>
                            <tr>
                          
                                <th>Kode Pembelian</th>
                                <th>Barang</th>
                                <th>Harga Barang</th>
                                <th>Total Harga</th>
                                <th>Tanggal Pembelian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php foreach($db->query("SELECT kd_pembelian, vivalo_pembelian.kd_barang, total_harga, jumlah_barang, date, vivalo_kebutuhan.nama_barang, vivalo_kebutuhan.harga FROM `vivalo_pembelian` JOIN vivalo_kebutuhan ON vivalo_pembelian.kd_barang = vivalo_kebutuhan.kd_barang")->fetch_all() as $konsumen): ?>
                            <tr>
                                <td><?= $konsumen[0] ?></td>
                                <td><?= $konsumen[5] ?></td>
                                <td>Rp <?= $konsumen[6] ?></td>
                                <td>Rp <?= ($konsumen[3] * $konsumen[6]) ?></td>
                                <td><?= $konsumen[4] ?></td>
                                <td><a href="edit_pengeluaran.php?kd_pembelian=<?php echo $konsumen['0']; ?>" class="btn btn-warning">Edit</a>&nbsp;<a href="hapus_pengeluaran.php?kd_pembelian=<?php echo $konsumen['0']; ?>" class="btn btn-danger">Hapus</a></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        
                    </table>
                 </div>
               </div>
              </div>
            </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= APP_URL ?>page/action/tambah_pengeluaran.php" method="post" id="formTambahPaket">
             <div class="form-group">
             <label for="recipient-name" class="col-form-label">Kebutuhan :</label>
             <select class="custom-select" id="inputGroupSelect03" name="kd_barang">
              <option selected>Pilih...</option>
              <?php foreach($db->query("SELECT * FROM `vivalo_kebutuhan` ")->fetch_all() as $pengeluaran): ?>
             
              <option value="<?= $pengeluaran[0] ?>"><?= $pengeluaran[1] ?>, &nbsp; Harga: <?= $pengeluaran[2] ?></option>
            <?php endforeach?> 
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Barang :</label>
            <input type="text" class="form-control" required="" id="recipient-name" name="jumlah_barang">
          </div>
         

          <div class="form-group">
            <label for="message-text" class="col-form-label">Tanggal Pembelian :</label>
           <input type="date" class="form-control" required="" name="datepicker">
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
    $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<script type="text/javascript">

</script>

    </body></html>