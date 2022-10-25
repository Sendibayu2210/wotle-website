<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="login col-lg-6 p-5">
        <nav class="navbar bg-white">
            <div class="container-fluid">
                <a class="navbar-brand color-wotle fw-bold" href="/">
                    <img src="/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                    Wotle
                </a>
            </div>
        </nav>
        <div class="col-lg-8 d-flex justify-content-center ms-5">
            <form action="/cek-login" method="post">
                <?= csrf_field(); ?>
                <div class="text-center mb-5 h4">
                    Login Your Account
                </div>
                <div class="mb-3">
                    <label for="" class="small text-muted">Username/Email</label>
                    <input type="text" name="username" id="username" class="form-control border-0 border-bottom <?= (session()->getFlashdata('username')) ? 'is-invalid' : ''; ?>" value="<?= session()->getFlashdata('username') ?>" autocomplete="off">
                    <div class="invalid-feedback username"><?= session()->getFlashdata('message'); ?></div>
                </div>
                <div class="mb-3">
                    <label for="" class="small text-muted">Password</label>
                    <input type="password" name="password" id="password" class="form-control border-0 border-bottom">
                    <div class="invalid-feedback password"></div>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="" id="show_password" class="me-2"><label for="show_password" class="text-muted cursor-pointer">Lihat password</label>
                </div>
                <button type="submit" class="btn  btn-login mt-3 w-100">Login</button>
            </form>
        </div>
    </div>
    <div class="background-login col-lg-6">
        <img src="/img/background_login.jpeg" alt="">
    </div>
</div>

<script>
    $("#show_password").change(function() {
        if (this.checked) {
            $('#password').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
        }
    });
</script>



<?= $this->endSection(); ?>