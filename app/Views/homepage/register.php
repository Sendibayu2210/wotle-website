<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="hide"><?= session()->getFlashdata('message'); ?></div>
<form action="/cek-register" method="post" enctype="multipart/form-data">
    <label for="">nama</label>
    <input type="text" name="nama" id="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="nama">
    <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>

    <label for="">email</label>
    <input type="text" name="email" id="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" placeholder="email">
    <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>

    <label for="">password</label>
    <input type="text" name="password" id="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="password">
    <div class="invalid-feedback"><?= $validation->getError('password'); ?></div>

    <label for="">ktp</label>
    <input type="file" name="ktp" id="ktp" class="form-control <?= ($validation->hasError('ktp')) ? 'is-invalid' : ''; ?>" placeholder="ktp">
    <div class="invalid-feedback"><?= $validation->getError('ktp'); ?></div>

    <label for="">sim</label>
    <input type="file" name="sim" id="sim" class="form-control <?= ($validation->hasError('sim')) ? 'is-invalid' : ''; ?>" placeholder="sim">
    <div class="invalid-feedback"><?= $validation->getError('sim'); ?></div>

    <label for="">plat_nomor</label>
    <input type="text" name="plat_nomor" id="plat_nomor" class="form-control <?= ($validation->hasError('plat_nomor')) ? 'is-invalid' : ''; ?>" placeholder="plat_nomor">
    <div class="invalid-feedback"><?= $validation->getError('plat_nomor'); ?></div>

    <label for="">plat_nomor</label>
    <input type="text" name="tipe_kendaraan" id="tipe_kendaraan" class="form-control <?= ($validation->hasError('plat_nomor')) ? 'is-invalid' : ''; ?>" placeholder="plat_nomor">
    <div class="invalid-feedback"><?= $validation->getError('plat_nomor'); ?></div>

    <label for="">foto</label>
    <input type="file" name="foto" id="foto" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" placeholder="foto">
    <div class="invalid-feedback"><?= $validation->getError('foto'); ?></div>


    <div class="mt-5">
        <button type="submit" class="btn btn-lime">Daftar</button>
    </div>
</form>



<?= $this->endSection(); ?>