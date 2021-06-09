<!-- Tombol Tambah Galeri -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus"></i> Tambah Galeri
</button>

<!-- Tabel List Galeri -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Daftar Galeri</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Cari artikel..">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead class="bg-dark">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Info</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img class="img-thumbnail" src="https://images.unsplash.com/photo-1622744678361-64f90c825820?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" width="100" height="100">
                            </td>
                            <td>Draft</td>
                            <td class="text-muted">11-7-2014</td>
                            <td>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
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
        <form>
            <div class="modal-body">
                <div class="form-group">
                    <!-- <label for="exampleInputFile">Gambar</label> -->
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                    </div>
                </div>
                <p class="text-muted">*Gambar harus dipilih</p>

                <div class="form-group">
                    <label for="judul">Keterangan</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Informasi Tentang Gambar">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Upload!</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>