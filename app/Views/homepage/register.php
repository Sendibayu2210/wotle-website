<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="hide"><?= session()->getFlashdata('message'); ?></div>

<div class="my-4 register">
    <div class="row row-login py-5">
        <div class="col-lg-5 px-5 py-3">
           <div class="card border-0 shadow br-20 py-3">
               <div class="card-body">
                    <div class="text-center h4 color-wotle fw-bold">Daftar akun</div>
                    <div class="mb-4 text-center">Silahkan mendaftar untuk menggunakan aplikasi Wotle</div>
                    <div class="hide message-login"><?= session()->getFlashdata('message'); ?></div>
                    <?php if (session()->getFlashdata('message_auth')) : ?>
                        <div class="mb-3 text-center alert alert-success"><?= session()->getFlashdata('message_auth'); ?></div>
                    <?php endif; ?>
                    <form action="/register-valid" method="post" enctype="multipart/form-data" id="form-register">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <input type="text" name="nama" id="nama" class="form-control shadow-none input-login" placeholder="Nama Lengkap" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback nama"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" id="email" class="form-control shadow-none input-login" placeholder="Email" value="<?= old('email'); ?>">
                            <div class="invalid-feedback email"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="no_hp" id="no_hp" class="form-control shadow-none input-login" placeholder="No Handphone" value="<?= old('no_hp'); ?>">
                            <div class="invalid-feedback no_hp"></div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control shadow-none input-login" placeholder="Kata Sandi" value="<?= old('password'); ?>">
                            <div class="invalid-feedback password"></div>
                            <div class="small mt-3"><input type="checkbox" name="" id="show_password" class="me-2"><label for="show_password" class="text-muted cursor-pointer optional">Lihat password</label></div>
                        </div>                
                        <div class="mt-3">
                            <button type="button" class="btn  btn-register w-100">Daftar</button>
                        </div>
                          <div class="text-center mt-4 d-flex justify-content-center align-items-center">
                            <div>Sudah punya akun ? </div><a href="/login" class="small text-wotle fw-bold ms-2">Masuk</a>
                        </div>
                    </form> 
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
</div>

<?= $this->endSection(); ?>