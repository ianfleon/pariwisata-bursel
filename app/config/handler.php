<?php /* Main Function */

// koneksi //
$conn = mysqli_connect("localhost", "root", "", "paribursel_db");

function query_get($query)
{
	global $conn;
	$data = mysqli_query($conn, $query);

	$rows = [];

	while ($row = mysqli_fetch_assoc($data)) {
		$rows[] = $row;
	}

	return $rows;

}

// get all data
function get_all_data($table_name)
{
	global $conn;
	$query = "SELECT * FROM $table_name";
	return $execute = mysqli_query($conn, $query);
}

// get by id
function get_by_id($table_name,$id)
{
	global $conn;
	$query = "SELECT * FROM $table_name WHERE id = $id";
	$execute = mysqli_query($conn, $query);
	return mysqli_fetch_assoc($execute);
}

// kirim pesan //
function send_message($data)
{
	$full_name = htmlspecialchars( $data['nama_lengkap'] );
	$email = htmlspecialchars( $data['email'] );
	$subject = htmlspecialchars( $data['subjek'] );
	$message_content = htmlspecialchars( $data['isi_pesan'] );

	global $conn;
	$query = "INSERT INTO message_tb VALUES ('', '$full_name', '$email', '$subject', '$message_content', null)";
	return $result = mysqli_query($conn, $query);
}

function tambah_galeri($data)
{
	global $conn;
	$keterangan_gambar = htmlspecialchars($data['keterangan']);
	$waktu = date("m-d-y");
	$gmaps = $data['gmaps'];

	$gambar = upload_gambar();

	if( !$gambar ) 
	{
		return False;
	}

	$query = mysqli_query($conn, "INSERT INTO galeri_tb VALUES('', '$gambar', '$keterangan_gambar', '$waktu', '$gmaps')");

}

// upload gambar
function upload_gambar()
{
	$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
	$nama_file = $_FILES['file']['name'];
	$x = explode('.', $nama_file);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi;


	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070) {
			$dir = '../assets/img_upload/';
			
			if (!is_dir($dir)) {
				mkdir($dir);
			}
			
			move_uploaded_file($file_tmp, $dir.$nama_file_baru);
			return $nama_file_baru;
			
		}
	}
}

// tambah artikel
function tambah_artikel($data)
{
	global $conn;
	$judul_artikel = htmlspecialchars($data['judul']);
	$konten = $data['konten'];
	$hari = hari_ini();
	$waktu = $hari.date(" d M Y");

	$gambar = upload_gambar();
	if( !$gambar ) 
	{
		return False;
	}

	$query = mysqli_query($conn, "INSERT INTO artikel VALUES('', '$judul_artikel', '$konten', '$gambar', '$waktu')");

}

// ubah artikel
function edit_artikel($data)
{
	global $conn;
	$judul_artikel = htmlspecialchars($data['judul']);
	$konten = $data['konten'];
	$hari = hari_ini();
	$waktu = $hari.date(" d M Y");
	$gambar_lama = $data['gambar_lama'];
	$id = $data['id'];

	if( $_FILES['file']['error'] === 4 )
	{
		$gambar = $gambar_lama;
	} else {
		$gambar = upload_gambar();
	}

	$query = mysqli_query($conn, "UPDATE artikel SET 
		judul_artikel = '$judul_artikel', 
		konten = '$konten', 
		nama_file = '$gambar', 
		tanggal = '$waktu'
		WHERE id = $id ");
}



function hari_ini() 
{
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}

function get_data_page($query, $page = 1, $data_per_page = 3) {

    global $conn;

    $total_hasil = query_get($query);
    
    $total_data = count($total_hasil); // total data ditabel
    
    // $data_per_page = 3; // data yang tampil /halaman
    $total_page = ceil($total_data / $data_per_page); // total halaman nanti

    $index_limit1 = 0; // index_awal default
        
    // jika page lebih dari 1
    if ( $page > 1 ) {
        $index_limit1 = ($page * $data_per_page) - $data_per_page; // mengambil data dari index berapa
    }

    // LIMIT QUERY TABLE
    $hasil_data = query_get($query . " LIMIT $index_limit1, $data_per_page");

    $hasil['data'] = $hasil_data;
    $hasil['total_halaman'] = $total_page;

    return $hasil;
}