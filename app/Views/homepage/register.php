<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="hide"><?= session()->getFlashdata('message'); ?></div>

<nav class="navbar bg-white p-3 shadow mb-4">
    <div class="container">
        <a class="navbar-brand color-wotle fw-bold" href="/">
            <img src="/wotle_assets/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            Wotle
        </a>
        <a href="/login" class="me-2 link-login">Masuk</a>
    </div>
</nav>
<div class="mb-4 container">
    <div class="fw-bold h4">Buat akun baru <span class="color-wotle">Khusus Driver</span></div>
    <div class="my-4 message-register"></div>
</div>
<div class="container mb-5 pb-5 register">
    <form action="/register-valid" method="post" enctype="multipart/form-data" id="form-register">
        <div class="row">
            <div class="login col-lg-6 px-5 py-3">
                <?= csrf_field(); ?>
                <div class="mb-3"><label class="text-muted wajib mb-1" for="">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control shadow-none border-0 border-bottom" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback nama"></div>
                </div>
                <div class="mb-3"><label class="text-muted wajib mb-1" for="">Email</label>
                    <input type="text" name="email" id="email" class="form-control shadow-none border-0 border-bottom" value="<?= old('email'); ?>">
                    <div class="invalid-feedback email"></div>
                </div>
                <div class="mb-3"><label class="text-muted wajib mb-1" for="">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control shadow-none border-0 border-bottom" value="<?= old('no_hp'); ?>">
                    <div class="invalid-feedback no_hp"></div>
                </div>
                <div class="mb-3"><label class="text-muted wajib mb-1" for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control shadow-none border-0 border-bottom" value="<?= old('password'); ?>">
                    <div class="invalid-feedback password"></div>
                    <div class="small"><input type="checkbox" name="" id="show_password" class="me-2"><label for="show_password" class="text-muted cursor-pointer optional">Lihat password</label></div>
                </div>                
                <div class="mt-3">
                    <button type="button" class="btn  btn-register w-100">Daftar</button>
                </div>
            </div>
           <!--  <div class="col-lg-4 px-5 py-3">
                <div class="mb-3"> <label class="text-muted wajib mb-1" for="">ktp</label>
                    <input type="file" name="ktp" id="ktp" class="form-control " onchange="cekSizeFile('ktp')" placeholder="ktp" accept="image/jpg,image/png,image/jpeg" value="<?= old('ktp'); ?>">
                    <div class="invalid-feedback ktp"></div>
                    <div class="card-preview-ktp mt-2 hide"><img src="" alt="" class="max-width-100 image-preview-ktp"></div>
                </div>

                <div class="mb-3"><label class="text-muted wajib mb-1" for="">sim</label>
                    <input type="file" name="sim" id="sim" class="form-control " onchange="cekSizeFile('sim')" placeholder="sim" accept="image/jpg,image/png,image/jpeg" value="<?= old('sim'); ?>">
                    <div class="invalid-feedback sim"></div>
                    <div class="card-preview-sim mt-2 hide"><img src="" alt="" class="max-width-100 image-preview-sim"></div>
                </div>

                <div class="mb-3"><label class="text-muted wajib mb-1" for="">foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" onchange="cekSizeFile('foto')" placeholder="foto" accept="image/jpg,image/png,image/jpeg" value="<?= old('foto'); ?>">
                    <div class="invalid-feedback foto"></div>
                    <div class="card-preview-foto mt-2 hide"><img src="" alt="" class="max-width-100 image-preview-foto"></div>
                </div>
            </div> -->
            <div class="col-lg-6 background-register">
                <img src="/wotle_assets/img/background_register.png" alt="">
            </div>
        </div>      
    </form>
</div>

<?= $this->endSection(); ?>