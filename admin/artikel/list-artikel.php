<?php  

require_once '../app/config/handler.php';

// ambil seluruh gambar dari database
$result_artikel = get_all_data('artikel');

?>

<!-- Tombol Tambah Artikel -->
<a href="artikel.php?view=form-post" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Artikel</a>

<!-- Tabel List Artikel -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header mb-3">
                <h3 class="card-title">Daftar Artikel</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="myTable">
                    <thead class="bg-dark">
                        <tr>
                            <th>Judul</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result_artikel as $row) : ?>
                        <tr>
                            <td><?= $row['judul_artikel'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td>
                                <a href="artikel.php?view=edit-artikel&id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?page=artikel&tabel_name=artikel&id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('hapus artikel ini?')">Hapus</a>
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