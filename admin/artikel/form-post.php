<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Tambah Artikel Baru</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                    <label for="judul">Isi Artikel</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    <span class="text-muted">*Tulis isi artikel anda disini.</span>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Cover Artikel</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                    </div>
                </div>
                    <p class="text-muted">*Gambar sampul untuk artikel</p>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plane"></i> Post!</button>
            </div>
        </form>
    </div>
</div>