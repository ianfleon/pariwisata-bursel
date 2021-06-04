<?php

$view = 'list-galeri.php'; // default view

/* Ganti View */
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

<!-- Konten -->
<div class="content-wrapper py-3">
    <section class="content">
        <div class="container-fluid">
            <?php require_once 'galeri/' . $view ?>
        </div>
    </section>
</div>
<!-- # Kontent -->

<!-- ++ Footer -->
<?php require_once '../app/views/admin/footer.php' ?>