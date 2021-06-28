<!DOCTYPE html>
<html lang="en">

<!-- ++ Header -->
<head>
<?php require_once 'app/views/partial/head.php' ?>

</head>
<body>
	
<!-- ++ Navbar -->
<?php require_once 'app/views/partial/nav.php' ?>

<div class="container mt-7 mb-5">

	<div class="label">
	    <h4 class="label-section ml-2"><u>📷 Galeri</u></h4>
	</div>

	<div class="masonry">

		<div class="item-wrap">
			<div class="item">
				<img src="assets/img/pulau1.jpg">
				<div class="info-gambar">
					<p class="font-weight-bold">Pantai Oki</p>
					<a href="#" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>

		<div class="item-wrap">
			<div class="item">
				<img src="assets/img/pantai1.jpg">
				<div class="info-gambar">
					<p class="font-weight-bold">Pantai Oki</p>
					<a href="#" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>

		<div class="item-wrap">
			<div class="item">
				<img src="assets/img/pantai2.jpg">
				<div class="info-gambar">
					<p class="font-weight-bold">Pantai Oki</p>
					<a href="#" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>

		<div class="item-wrap">
			<div class="item">
				<img src="assets/img/pantai3.jpg">
				<div class="info-gambar">
					<p class="font-weight-bold">Pantai Oki</p>
					<a href="#" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>

		<div class="item-wrap">
			<div class="item">
				<img src="assets/img/kalapa.jpg">
				<div class="info-gambar">
					<p class="font-weight-bold">Pantai Oki</p>
					<a href="#" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>
	</div>

	<?php require_once 'app/views/partial/page.php' ?>
	
</div>


<!-- ++ Footer -->
<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>