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
	  		<b>Pantai di Bursel kini jadi sorotan media sosial, Mari kita cek!</b>
	  	</h5>
	  	<p class="text-muted">Diupload: Senin, 12/01/21</p>
	  	<img src="https://images.unsplash.com/photo-1623237801980-0e2b1ea19cc3?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="thumb-post-baca">
	  	<div class="card-body py-3 px-0">
		    <p class="card-text">
		    	Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		    </p>
	  </div>
	</div>
</div>

<?php else : ?>

<!-- Tampilan Daftar Artikel -->
<div class="row">
	<?php for ($i=0; $i<5; $i++) : ?>
		<div class="col-xl-3 mb-3">
			<div class="card">
			  <img class="thumb-post" src="https://images.unsplash.com/photo-1623100603745-5f3d8d466bab?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">
			    	<a href="artikel.php?baca=1">Pantai paling banyak dikunjungi</a>
			    </h5>
			    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content..</p>
			  </div>
			</div>
		</div>
	<?php endfor; ?>
</div>

<?php endif; ?>
<!-- //endif -->
</div>

<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>