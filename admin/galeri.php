<?php

$view = 'list-galeri.php'; // default view

if (isset($_GET['view'])) {
    if (file_exists('galeri/' . $_GET['view'] . '.php')) {
        $view = $_GET['view'] . '.php';
    } else {
        $view = 'list-galeri.php';
    }
}

?>


<!-- ++ Header -->
<?php require_once '../app/views/admin/header.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper py-3">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <?php require_once 'galeri/' . $view ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- ++ Footer -->
<?php require_once '../app/views/admin/footer.php' ?>