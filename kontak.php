<?php  
require 'app/config/handler.php';

if( isset($_POST['submit']) ) {
    $result = send_message($_POST);
    if( $result > 0 ) {
     $notif_sukses = true;
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'app/views/partial/head.php' ?>
<body>
    <?php require_once 'app/views/partial/nav.php' ?>

    <!-- Profile -->
    <div class="container-fluid d-flex justify-content-center mt-5 pt-3 pb-3">
        <div class="col-md-8 mt-5">
            <!-- notifikasi sukses -->
            <?php 
            global $notif_sukses;
            if( $notif_sukses == true ): 
            ?>
            <div class="row">
                <div class="col-md">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pesan <strong>Berhasil</strong> dikirim!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- akhir notifikasi sukses -->
            <h4 class="card-title font-weight-bolder">Hubungi Kami</h4>
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control" required name="nama_lengkap">
                            <small class="form-text text-muted">Contoh: Eko Saputro</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required name="email">
                            <small id="emailHelp" class="form-text text-muted">Contoh: ekosaputro@gmail.com</small>
                        </div>
                        <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" id="Subjek" class="form-control" required name="subjek">
                            <small id="emailHelp" class="form-text text-muted">Topik dari pesan ini</small>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea type="text" class="form-control" id="pesan" required name="isi_pesan"></textarea>
                            <small id="emailHelp" class="form-text text-muted">Tulis pesan anda untuk kami</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>