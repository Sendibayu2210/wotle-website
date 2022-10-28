<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="login col-lg-5 px-5 py-3">
        <nav class="navbar bg-white">
            <div class="container-fluid">
                <a class="navbar-brand color-wotle fw-bold" href="/">
                    <img src="/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                    Wotle
                </a>
                <a href="/register" class="text-muted">Daftar</a>
            </div>
        </nav>
        <div class="col-lg-8 d-flex justify-content-center ms-lg-5 ps-lg-2 ms-md-5 ps-md-2 ps-ms-0">
            <form action="/cek-login" method="post">
                <?= csrf_field(); ?>
                <div class="text-center mb-5 h4 color-wotle">Login Your Account</div>
                <div class="hide message-login"><?= session()->getFlashdata('message'); ?></div>
                <?php if (session()->getFlashdata('message_auth')) : ?>
                    <div class="mb-3 text-center alert alert-success"><?= session()->getFlashdata('message_auth'); ?></div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="" class="small text-muted">Username/Email</label>
                    <input type="text" name="username" id="username" class="form-control shadow-none border-0 border-bottom" value="" autocomplete="off" autofocus>
                    <div class="invalid-feedback username"></div>
                </div>
                <div class="mb-3">
                    <label for="" class="small text-muted">Password</label>
                    <input type="password" name="password" id="password" class="form-control shadow-none border-0 border-bottom">
                    <div class="invalid-feedback password"></div>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div><input type="checkbox" name="" id="show_password" class="me-2"><label for="show_password" class="text-muted cursor-pointer">Lihat password</label></div>
                    <a href="/forgot-password" class="small text-muted">Lupa password ?</a>
                </div>
                <button type="button" class="btn  btn-login mt-3 w-100">Login</button>
                <div class="text-center mt-4">
                    <a href="/register" class="small">Daftar Akun Baru</a>
                </div>
            </form>

        </div>
    </div>
    <div class="background-login col-lg-7">
        <img src="/img/background_login.png" alt="">
    </div>
</div>


<?= $this->endSection(); ?>