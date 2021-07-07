<?php

require_once 'app/config/handler.php';

$page = 1;
$perpage = 4;

$artikels = get_data_page("SELECT * FROM artikel", $page, $perpage);

if (isset($_GET['baca'])) {
		$id = $_GET['baca'];
		$artikel = query_get("SELECT * FROM artikel WHERE id = '$id'")[0];
		
		if (count($artikel) == 0) {
				header("Location: artikel.php");
		}
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Head Tags -->
<?php require_once 'app/views/partial/head.php' ?>

<body>

<!-- Navbar -->
<?php require_once 'app/views/partial/nav.php' ?>

<div class="container mt-7">

<!-- Tampilan Baca Artikel -->
<?php if (isset($_GET['baca'])) : ?>

<div class="col-xl-10 m-auto">
	<div class="card p-3">
	  	<h5 class="card-title">
	  		<b><?= $artikel['judul_artikel'] ?></b>
	  	</h5>
	  	<p class="text-muted">Diupload: <?= $artikel['tanggal'] ?></p>
	  	<img src="<?= BASE_URL ?>/assets/img_upload/<?= $artikel['nama_file'] ?>" class="thumb-post-baca">
	  	<div class="card-body py-3 px-0">
		    <p class="card-text">
		    	<?= $artikel['konten'] ?>
		    </p>
	  </div>
	</div>
</div>

<?php else : ?>

<div class="label">
	    <h4 class="label-section mb-3"><u>📪 Artikel</u></h4>
</div>

<!-- Tampilan Daftar Artikel -->
<div class="row">

		<?php foreach($artikels['data'] as $a) : ?>
		<div class="col-xl-3 mb-3">
			<div class="card">
			  <img class="thumb-post" src="<?= BASE_URL ?>/assets/img_upload/<?= $a['nama_file'] ?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">
			    	<a href="artikel.php?baca=<?= $a['id'] ?>"><?= $a['judul_artikel'] ?></a>
			    </h5>
			    <p class="card-text text-muted"><?= $a['konten'] ?></p>
			  </div>
			</div>
		</div>
		<?php endforeach; ?>

</div>

<?php // require_once 'app/views/partial/page.php' ?>

<?php endif; ?>
<!-- //endif -->

</div>

<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>