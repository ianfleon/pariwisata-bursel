<?php 

require_once 'app/config/handler.php';

$page = 1;
$perpage = 4;

$galeris = get_data_page("SELECT * FROM galeri_tb", $page, $perpage);

?>

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

		<?php foreach($galeris['data'] as $g) : ?>
		<div class="item-wrap">
			<div class="item">
				<img src="<?= BASE_URL ?>/assets/img_upload/<?= $g['nama_file'] ?>">
				<div class="info-gambar">
					<p class="font-weight-bold"><?= $g['keterangan'] ?></p>
					<a href="<?= $g['gmaps'] ?>" target="_blank" class="btn btn-outline-light">Lihat Peta</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>

	</div>

	<?php // require_once 'app/views/partial/page.php' ?>
	
</div>


<!-- ++ Footer -->
<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>