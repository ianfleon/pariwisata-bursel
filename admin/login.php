<?php

session_start();

if (isset($_SESSION['admin_login'])) {
	echo "Anda sudah login!";
	header("Refresh: 2; url='index.php'");
	die();
}

if (isset($_POST['login'])) {

	$id = $_POST['id'];
	$pass = $_POST['password'];

	require_once '../app/config/handler.php';

	$data = query_get("SELECT * FROM admin_tbl WHERE admin_id = '$id' AND admin_pass = '$pass'");

	if (count($data) == 1) {
		echo "Berhasil login!";
		$_SESSION['admin_login'] = $id;
		header("Refresh: 2; url='index.php'");
		die();
	} else {
		$notif = "Akun tidak ditemukan!";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<!-- ++ head -->
<?php require_once '../app/views/partial/head.php' ?>
</head>
<body>

<div class="container d-flex">
	<div class="card border-dark mb-3 mx-auto mt-5" style="max-width: 21rem;">
	  <div class="card-header">🌴 Login</div>
	  <div class="card-body text-dark">
	    <form action="" method="POST">
		  <div class="form-group">
		    <label for="id-admin">ID Admin</label>
		    <input type="text" class="form-control" id="id_admin" name="id" aria-describedby="emailHelp" required>
		    <small id="emailHelp" class="form-text text-muted">Perhatikan ID dengan benar.</small>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" required>
		  </div>
<!-- 		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div> -->
		  <button type="submit" class="btn btn-primary" name="login">Login</button>
		</form>
		<?php if (isset($notif)) : ?>
		<p style="color: red" class="mt-2"><?= $notif ?></p>
		<?php endif; ?>
	  </div>
	</div>
</div>

</body>
</html>