<!-- ++ Header -->
<?php require_once '../app/views/admin/header.php' ?>

<?php

require_once '../app/config/handler.php';

$tgl = date("Y-m-d");

$p = query_get("SELECT * FROM message_tb WHERE waktu LIKE '%$tgl%'");
$a = query_get("SELECT * FROM artikel");
$g = query_get("SELECT * FROM galeri_tb");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= count($p) ?></h3>
                <p>Pesan Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-email-unread"></i>
              </div>
              <a href="pesan.php?today" class="small-box-footer">Lihat Pesan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= count($a) ?></h3>
                <p>Artikel</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="artikel.php" class="small-box-footer">Lihat Semua Artikel <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= count($g) ?></h3>
                <p>Galeri</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
              <a href="galeri.php" class="small-box-footer">Lihat Galeri <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-map-marker mr-1"></i>
                  Peta Buru Selatan
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019411.118003004!2d126.12725736361115!3d-3.5702936064432955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d72fece2b10e381%3A0x3f5f1c6b4708b0d3!2sKabupaten%20Buru%20Selatan%2C%20Maluku!5e0!3m2!1sid!2sid!4v1622704792654!5m2!1sid!2sid" style="border:0; width: 100%; height: 50vh" allowfullscreen="true" loading="lazy"></iframe>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- ++ Footer -->
<?php require_once '../app/views/admin/footer.php' ?>