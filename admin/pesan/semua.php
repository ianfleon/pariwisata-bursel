<?php  
require_once '../app/config/handler.php';

$result = get_all_data('message_tb');

if (isset($_GET['today'])) {
    $result = $today;
}

?>

<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header mb-1">
            <h3 class="card-title">Kotak Masuk</h3>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->

        <div class="card-body p-0">
            <div class="mailbox-controls">
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default mb-2 btn-sm" onclick="location.reload()">
                  <i class="fas fa-sync-alt"></i>
                </button>
            </div>

            <!-- Daftar Pesan -->
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>🗑️</th>
                            <th>Nama Pengirim</th>
                            <th>Subjek</th>
                            <th>⏰</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) :?>
                        <tr>
                            <td>
                                <div class="icheck-primary">
                                    <a href="hapus.php?page=pesan&tabel_name=message_tb&id=<?= $row['id'] ?>" class="btn btn-default btn-sm" onclick="return confirm('hapus pesan ini?')">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="mailbox-name">
                                <a href="pesan.php?baca=<?= $row['id'] ?>"><?= $row['nama_lengkap'] ?></a>
                            </td>
                            <td class="mailbox-subject">
                                <?= $row['subjek'] ?>
                            </td>
                            <td class="mailbox-date"><?= $row['waktu'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                  </tbody>
                </table>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->