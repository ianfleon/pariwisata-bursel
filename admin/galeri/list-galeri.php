<?php  
require_once '../app/config/handler.php';

// ambil seluruh gambar dari database
$result_galeri = get_all_data('galeri_tb');

if( isset($_POST['submit']) )
{
    $tambah_galeri = tambah_galeri($_POST);
    if( $tambah_galeri ) 
    {
        $notif_sukses = true;
    }

    echo "
        <div class='row'>
            <div class='col-md'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Foto <strong>Berhasil</strong> diupload!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>
            </div>
        </div>
        <meta http-equiv='refresh' content='1'>
    ";
}

?>

<!-- notifikasi sukses -->
<?php 
global $notif_sukses;
if( $notif_sukses == true ): 
    ?>
    <div class="row">
        <div class="col-md">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Foto <strong>Berhasil</strong> diupload!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- akhir notifikasi sukses -->

<!-- Tombol Tambah Galeri -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus"></i> Tambah Galeri
</button>

<!-- Tabel List Galeri -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header mb-3">
                <h3 class="card-title">Daftar Galeri</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="myTable">
                    <thead class="bg-dark">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Info</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_galeri as $row) : ?>
                        <tr>
                            <td>
                                <img class="img-thumbnail" src="<?= BASE_URL ?>/assets/img_upload/<?= $row['nama_file'] ?>" width="100" height="100">
                            </td>
                            <td><?= $row['keterangan'] ?></td>
                            <td>
                                <a href="hapus.php?page=galeri&tabel_name=galeri_tb&id=<?= $row['id'] ?>" onclick="return confirm('Hapus gambar ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                <a href="<?= $row['gmaps'] ?>" class="btn btn-success" target="_blank"><i class="fa fa-map"></i> Lihat Peta</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
            <!-- <label for="exampleInputFile">Gambar</label> -->
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" required>
                    <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                </div>
            </div>
            <p class="text-muted">*Gambar harus dipilih</p>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Masukan Informasi Tentang Gambar" name="keterangan">
            </div>

            <div class="form-group">
                <label for="keterangan">Link Peta (Google Maps)</label>
                <input type="text" class="form-control" id="gmaps" placeholder="Masukan Informasi Tentang Gambar" name="gmaps">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" name="submit" class="btn btn-primary">Upload!</button>
        </div>
    </form>
</div>
</div>
</div>
</div>