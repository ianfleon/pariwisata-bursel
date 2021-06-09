<?php

$view = 'list-artikel.php'; // default view

/* Ganti View */
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

<!-- Konten -->
<div class="content-wrapper py-3">
    <section class="content">
        <div class="container-fluid">
            <?php require_once 'artikel/' . $view ?>
        </div>
    </section>
</div>
<!-- # Konten -->

<!-- ++ Footer -->
<?php require_once '../app/views/admin/footer.php' ?>