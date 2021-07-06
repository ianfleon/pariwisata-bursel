<?php  

require_once '../app/config/handler.php';

$id = $_GET['id'];
$page = $_GET['page'];
$tabel_name = $_GET['tabel_name'];

global $conn;

if ($tabel_name == "galeri_tb" || $tabel_name == "artikel") {
	// ambil nama file (foto) untuk dihapus
	$get_nama_file = get_by_id($tabel_name, $id);

	// hapus file dari direktori
	unlink('../assets/img_upload/'.$get_nama_file['nama_file']);
}

// hapus data dari tabase
$result = mysqli_query($conn, "DELETE FROM $tabel_name  WHERE id = $id");
header("location: $page.php", true, 301);
exit();

?>