<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

       <!--  <nav class="navbar bg-white">
            <div class="container-fluid">
                <a class="navbar-brand color-wotle fw-bold" href="/">
                    <img src="/wotle_assets/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
                    Wotle
                </a>
                <a href="/register" class="text-muted">Daftar</a>
            </div>
        </nav>  -->       
<div class="row my-4 row-login">
    <div class="col-lg-5 px-lg-5 py-3">
        <div class="">
            <div class="card border-0 shadow br-20 mt-3 py-4 px-3">
                <div class="card-body">
                    <form action="#" method="post">
                        <?= csrf_field(); ?>
                        <div class="text-center h4 color-wotle fw-bold">Masuk ke akun</div>
                        <div class="mb-4 text-center">Silahkan masukan Email dan Kata Sandi Anda</div>
                        <div class="hide message-login"><?= session()->getFlashdata('message'); ?></div>
                        <?php if (session()->getFlashdata('message_auth')) : ?>
                            <div class="mb-3 text-center alert alert-success"><?= session()->getFlashdata('message_auth'); ?></div>
                        <?php endif; ?>

                        <div class="mb-4">                            
                            <input type="email" name="username" id="username" class="form-control shadow-none input-login" value="" autocomplete="off" autofocus placeholder="Email">
                            <div class="invalid-feedback username"></div>
                        </div>
                        <div class="mb-4">                            
                            <input type="password" name="password" id="password" class="form-control shadow-none input-login" placeholder="Kata Sandi">
                            <div class="invalid-feedback password"></div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="small"><input type="checkbox" name="" id="show_password" class="me-2"><label for="show_password" class="text-muted cursor-pointer">Lihat kata sandi</label></div>
                            <a href="/forgot-password" class="small text-wotle">Lupa kata sandi ?</a>
                        </div>
                        <button type="button" class="btn  btn-login mt-3 w-100">Masuk</button>
                        <div class="text-center mt-4 d-flex justify-content-center align-items-center">
                            <div>Belum punya akun ? </div><a href="/register" class="small text-wotle fw-bold ms-2">Buat Akun</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 overflow-hidden d-md-none d-sm-none d-xs-none d-lg-block">
        <div class="position-relative">
            <img src="/wotle_assets/img/background_login.png" alt="" class="img-login"> 
        </div>
    </div>
    <a class="navbar-brand color-wotle fw-bold d-md-none d-lg-block d-sm-none d-xs-none" href="/">
        <div class="d-flex align-items-center">
            <img src="/wotle_assets/img/logo/logo_wotle.png" alt="Logo" width="40" height="45" class="d-inline-block align-text-top me-2">            
        </div>        
    </a>
</div>


<?= $this->endSection(); ?>