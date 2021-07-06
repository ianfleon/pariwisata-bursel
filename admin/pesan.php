<?php  

require_once '../app/config/handler.php'; // main function

// ambil seluruh gambar dari database
$result_pesan = get_all_data('message_tb');

$tgl = date("Y-m-d");

$today = query_get("SELECT * FROM message_tb WHERE waktu LIKE '%$tgl%'");

?>

<!-- ++ Header -->
<?php require_once '../app/views/admin/header.php' ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper py-3">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Urutan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="?today" class="nav-link">
                    <i class="fas fa-inbox"></i> Hari ini
                    <span class="badge bg-success float-right"><?= count($today) ?></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pesan.php" class="nav-link">
                    <i class="far fa-envelope"></i> Semua
          <span class="badge bg-primary float-right"><?= mysqli_num_rows($result_pesan) ?></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->

      <!-- ++ View Pesan -->
      <?php
        if (isset($_GET['baca'])) {
          require_once 'pesan/baca.php';
        } else {
          require_once 'pesan/semua.php';
        }
      ?>


      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once '../app/views/admin/footer.php' ?>