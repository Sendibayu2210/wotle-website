<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<form action="/cek-login" method="post">

    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="">Username/Email</label>
        <input type="text" name="username" id="username" class="form-control <?= (session()->getFlashdata('username')) ? 'is-invalid' : ''; ?>" value="<?= session()->getFlashdata('username') ?>">
        <div class="invalid-feedback username"><?= session()->getFlashdata('message'); ?></div>
    </div>
    <div class="mb-3">
        <label for="">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <div class="invalid-feedback password"></div>
    </div>

    <button type="submit" class="btn btn-lime btn-login mt-5">Login</button>
</form>


<?= $this->endSection(); ?>