<?php

if (isset($_POST['submit'])) {

    $tambah_artikel = tambah_artikel($_POST);
    
    if( $tambah_artikel ) 
    {
        $notif_sukses = true;
    }

    echo "
        <div class='row'>
            <div class='col-md'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Artikel <strong>Berhasil</strong> ditambahkan!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>
            </div>
        </div>
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
                Artikel <strong>Berhasil</strong> ditambahkan!
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
            <h3 class="card-title">Tambah Artikel Baru</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                    <label for="konten">Isi Artikel</label>
                    <textarea name="konten" id="konten" cols="30" rows="10" class="form-control"></textarea>
                    <span class="text-muted">*Tulis isi artikel anda disini.</span>
                </div>
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