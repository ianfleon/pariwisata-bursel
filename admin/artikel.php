<?php

$view = 'list-artikel.php'; // default view

if (isset($_GET['view'])) {
    if (file_exists('artikel/' . $_GET['view'] . '.php')) {
        $view = $_GET['view'] . '.php';
    } else {
        $view = 'list-artikel.php';
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
          <?php require_once 'artikel/' . $view ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- ++ Footer -->
<?php require_once '../app/views/admin/footer.php' ?>