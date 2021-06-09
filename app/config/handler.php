<?php /* Main Function */

// koneksi //
$conn = mysqli_connect("localhost", "ian", "ian", "paribursel_db");

// query //
function my_query($query)
{
	global $conn;
	$hasil = mysqli_query($conn, $query);
}

// upload gambar //
function upload_gambar($img, $dir = null)
{

	$nama = $img['name'];
	$tmp = $img['tmp_name'];
	$size = $img['size'];

	$nama_baru = uniqid() . "." . end(explode('.', $nama));
	var_dump($nama_baru);

	// move_uploaded_file($tmp, '../assets/img/' . $dir . '/' . $nama_baru);

	if (is_dir('../assets/img')) {
		echo "ada";
		die();
	}
	else
	{
		echo "no";
		die();
	}

}

// function artikel //
function artikel_func($cmd = null, $data, $img)
{

	$judul = $data['judul'];
	$konten = $data['konten'];
	$status = $data['status'];

	$waktu = date("m-d-y");

	$cover = upload_gambar($img, 'artikel_thumb');

	// var_dump($data);
	var_dump($waktu);

	die();

	if ($cmd == 'tambah' || $cmd == null) {
		$query = "INSERT INTO artikel_tb VALUES (null, '$judul', '$konten', '$cover', '$waktu', '$status')";
	}

	$hasil = my_query($query);

}