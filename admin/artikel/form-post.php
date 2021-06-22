<?php

if (isset($_POST['posting'])) {
    $hasil = artikel_func('tambah', $_POST, $_FILES['cover']);
}

?>

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
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                <small id="emailHelp" class="form-text text-muted">*Publish : Artikel akan dipublikasi</small>
                <small id="emailHelp" class="form-text text-muted">*Draft : Artikel akan dijadikan sebagai draft (tidak dipublikasi)</small>
                </div>
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
                    <input type="file" class="form-control" name="cover" id="cover">
                    <span class="text-muted">*Pilih cover artikel</span>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="posting" class="btn btn-primary"><i class="fa fa-plane"></i> Post!</button>
            </div>
        </form>
    </div>
</div>