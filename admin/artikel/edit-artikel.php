<?php
require_once '../app/config/handler.php';

$id_artikel = $_GET['id'];

$get_data_artikel = get_by_id('artikel', $id_artikel);

if (isset($_POST['submit'])) {
    $edit_artikel = edit_artikel($_POST);
    if( $edit_artikel ) 
    {
        $notif_sukses = true;
    }

    echo "
        <div class='row'>
            <div class='col-md'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Artikel <strong>Berhasil</strong> diubah!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>
            </div>
        </div>
        <meta http-equiv='refresh' content='1;url=artikel.php'>
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
                Artikel <strong>Berhasil</strong> diubah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- akhir notifikasi sukses -->


<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Edit Artikel</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $get_data_artikel['id'] ?>">
            <input type="hidden" name="gambar_lama" value="<?= $get_data_artikel['nama_file'] ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul" value="<?= $get_data_artikel['judul_artikel'] ?>">
                </div>
                <div class="form-group">
                    <label for="konten">Isi Artikel</label>
                    <textarea name="konten" id="konten" cols="30" rows="10" class="form-control"><?= $get_data_artikel['konten'] ?></textarea>
                    <span class="text-muted">*Tulis isi artikel anda disini.</span>
                </div>
                <img src="<?= BASE_URL ?>/assets/img_upload/<?= $get_data_artikel['nama_file'] ?>" width="300" class="img-thumbnail">
                <div class="form-group">
                    <label for="cover">Cover Artikel</label>
                    <input type="file" class="form-control" name="file" id="cover">
                    <span class="text-muted">*Pilih cover artikel</span>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plane"></i> Post!</button>
            </div>
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace( 'konten' );
</script>