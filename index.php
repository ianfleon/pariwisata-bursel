<?php

require_once 'app/config/handler.php';

$artikels = get_data_page("SELECT * FROM artikel", 1, 3);

?>

<!DOCTYPE html>
<html lang="id">
<head>
<!-- Header -->
<?php require_once 'app/views/partial/head.php' ?>
</head>

<style>
    .link-white { color: white }
    .link-white:hover { color: white; }
    .text-light { color: rgb(180, 180, 180) }
</style>

<body>
<!-- Nav -->
<?php require_once 'app/views/partial/nav.php' ?>

<div class="jumbotron hero">
    <img src="assets/img/hero-bg.jpg" class="img-hero" alt="">
    <div class="info-hero">
        <h4 class="font-weight-bold">Pariwisata Buru Selatan</h4>
        <p>Maluku</p>
    </div>
</div>

<!-- Label Galeri -->
<div class="container d-flex justify-content-center text-center">
    <div class="label">
        <h4 class="label-section font-weight-bold">Galeri</h4>
        <p class="text-muted">Nikmati berbagai tempat indah disini</p>
    </div>
</div>

<!-- Galeri -->
<div class="container-fluid bg-section py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img/pantai2.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="assets/img/tanjung.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-4">
                <img src="assets/img/kalapa.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
</div>

<!-- Label Artikel -->
<div class="container d-flex justify-content-center text-center py-3">
    <div class="label">
        <h4 class="label-section font-weight-bold">Artikel</h4>
        <p class="text-muted">Berbagai informasi terbaru dari Buru Selatan</p>
    </div>
</div>

<!-- Carausel -->
<div class="container-fluid pb-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="col-md-6 m-auto">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <?php foreach($artikels['data'] as $i => $a) : ?>
                <div class="carousel-item <?= ($i == 0) ? 'active' : '' ?>">
                    <img src="<?= BASE_URL ?>/assets/img_upload/<?= $a['nama_file'] ?>" class="d-block w-100 img-carousel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                          <a class="link-white" href="artikel.php?baca=<?= $a['id'] ?>"><?= $a['judul_artikel'] ?></a>
                        </h5>
                        <p class="text-light"><?= $a['tanggal'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
            </a>

        </div>
    </div>
</div>

<!-- Profile -->
<div class="container-fluid d-flex justify-content-center text-center bg-section pt-3 pb-3">
    <div class="col-md-8">
        <h4 class="label-section font-weight-bold">Tentang Buru Selatan</h4>   
        <p class="text-muted">
            Kabupaten Buru Selatan adalah sebuah kabupaten yang berada di provinsi Maluku, Indonesia, yang terletak di pulau Buru. Ibu kotanya adalah Namrole. Kabupaten ini dibentuk berdasarkan Undang-Undang Nomor 32 Tahun 2008 yang merupakan pemekaran dari Kabupaten Buru.
        </p>
        <img src="assets/img/bursel-logo.png" width="170" alt="">
    </div>
</div>

<!-- Footer -->
<div class="container-fluid bg-section pt-3 pb-1 text-center">
    <p class="text-muted">
        Kabupaten Buru Selatan, Provinsi Maluku.
    </p>
</div>

<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>
