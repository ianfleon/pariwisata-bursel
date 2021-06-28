<!DOCTYPE html>
<html lang="id">
<head>
<!-- Header -->
<?php require_once 'app/views/partial/head.php' ?>
</head>
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
            <div class="col-md-3">
                <img src="assets/img/pantai2.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="assets/img/pantai3.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="assets/img/kalapa.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-3">
                <img src="assets/img/pulau1.jpg" class="img-thumbnail" alt="...">
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
                <div class="carousel-item active">
                    <img src="assets/img/pantai1.jpg" class="d-block w-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tempat Wisata Paling Banyak dikunjungi..</h5>
                        <p>Senin, 12 September 2021</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kalapa.jpg" class="d-block w-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Suasana Bursel disaat pandemi</h5>
                        <p>Senin, 12 September 2021</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/pantai3.jpg" class="d-block w-100 img-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kapal Pesiar Berdatangan ke Buru Selatan</h5>
                        <p>Senin, 12 September 2021</p>
                    </div>
                </div>
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
