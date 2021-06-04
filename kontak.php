<!DOCTYPE html>
<html lang="en">
<?php require_once 'app/views/partial/head.php' ?>
<body>
<?php require_once 'app/views/partial/nav.php' ?>

<!-- Profile -->
<div class="container-fluid d-flex justify-content-center mt-5 pt-3 pb-3">
    <div class="col-md-8 mt-5">
    <h4 class="card-title font-weight-bolder">Hubungi Kami</h4>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" class="form-control" required>
                        <small class="form-text text-muted">Contoh: Eko Saputro</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">Contoh: ekosaputro@gmail.com</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Subjek</label>
                        <input type="email" id="email" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">Topik dari pesan ini</small>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea type="text" class="form-control" id="pesan" required></textarea>
                        <small id="emailHelp" class="form-text text-muted">Tulis pesan anda untuk kami</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/partial/foot.php' ?>
</body>
</html>