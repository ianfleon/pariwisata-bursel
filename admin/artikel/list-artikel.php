<!-- Tombol Tambah Artikel -->
<a href="artikel.php?view=form-post" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Artikel</a>

<!-- Tabel List Artikel -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Daftar Artikel</h3>
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
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            <td>Draft</td>
                            <td>11-7-2014</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
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