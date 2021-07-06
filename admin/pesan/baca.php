<?php 
$id_pesan = $_GET['baca']; /*ambil id dari url*/

$result = get_by_id('message_tb',$id_pesan); /*ambil data berdasarkan id*/
?>
<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header d-flex bg-light">
            <h3 class="card-title">Baca Pesan</h3>
            <button type="button" class="btn btn-default btn-sm ml-auto" data-container="body" title="Delete">
              <a href="hapus.php?page=pesan&tabel_name=message_tb&id=<?= $result['id'] ?>" onclick="return confirm('hapus pesan ini?')">
                <i class="far fa-trash-alt"></i> 
              Hapus</a>
            </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5><?= $result['subjek'] ?></h5>
                <h6><?= $result['email'] ?>
                  <span class="mailbox-read-time float-right"><?= $result['waktu'] ?></span>
                </h6>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p><?= $result['isi_pesan'] ?></p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->
    </div>
</div>