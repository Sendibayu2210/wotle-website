<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>
<div id="tambah-promo">
    <div class="container">
        <?= toast_message(); ?>

        <?= titleTop('Tambah Promo'); ?>
        <form action="/update-promo/<?= $promo['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="mb-2">Judul Promo</label>
                                <input type="text" name="judul" id="" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= (old('judul')) ? old('judul') : $promo['judul']; ?>">
                                <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Kode Promo</label>
                                <input type="text" name="kode_promo" id="" class="form-control <?= ($validation->hasError('kode_promo')) ? 'is-invalid' : ''; ?>" value="<?= (old('kode_promo')) ? old('kode_promo') : $promo['kode_promo']; ?>">
                                <div class="invalid-feedback"><?= $validation->getError('kode_promo'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Deskripsi Promo</label>
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>"><?= (old('deskripsi')) ? old('deskripsi') : $promo['deskripsi']; ?></textarea>
                                <div class="invalid-feedback"><?= $validation->getError('deskripsi'); ?></div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="mb-3">Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" id="" class="form-control <?= ($validation->hasError('tgl_mulai')) ? 'is-invalid' : ''; ?>" value="<?= (old('tgl_mulai')) ? old('tgl_mulai') : $promo['tgl_mulai']; ?>">
                                        <div class="invalid-feedback"><?= $validation->getError('tgl_mulai'); ?></div>
                                    </div>
                                    <div class="col-6">
                                        <label for="" class="mb-3">Tanggal Akhir</label>
                                        <input type="date" name="tgl_akhir" id="" class="form-control <?= ($validation->hasError('tgl_akhir')) ? 'is-invalid' : ''; ?>" value="<?= (old('tgl_akhir')) ? old('tgl_akhir') : $promo['tgl_akhir']; ?>">
                                        <div class="invalid-feedback"><?= $validation->getError('tgl_akhir'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card pb-4 border-0">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Pilih kategori poin promo</label>                                
                                <div class="row px-3">
                                    <div class="form-check col-6">
                                      <input class="form-check-input <?= ($validation->hasError('poin_promo')) ? 'is-invalid' : ''; ?> " type="radio" name="poin_promo" id="poin" value="poin" <?= ($promo['jumlah_poin']) ? 'checked' : '' ?>>
                                      <label class="form-check-label cursor-pointer" for="poin">
                                        Berikan Poin
                                      </label>
                                    </div>
                                    <div class="form-check col-6">
                                      <input class="form-check-input <?= ($validation->hasError('poin_promo')) ? 'is-invalid' : ''; ?> " type="radio" name="poin_promo" id="persen" value="persen" <?= ($promo['jumlah_persen']) ? 'checked' : '' ?>>
                                      <label class="form-check-label cursor-pointer" for="persen">
                                        Berikan diskon Persen
                                      </label>
                                    </div>
                                    <div class="invalid-feedback"><?= $validation->getError('poin_promo'); ?></div>
                                </div>                                
                                <div>
                                    <label for="">Masukan Nilai</label>
                                    <input type="text" class="form-control mt-1 <?= ($validation->hasError('nilai_promo')) ? 'is-invalid' : ''; ?>" name="nilai_promo" value="<?= ($promo['jumlah_poin'] != '') ? $promo['jumlah_poin'] : $promo['jumlah_persen']; ?>">
                                    <div class="invalid-feedback"><?= $validation->getError('nilai_promo'); ?></div>
                                </div>
                            </div>

                            <div>
                                <label for="" class="mb-3">Pilih Gambar</label>
                                <input type="hidden" name="file_lama" value="<?= $promo['gambar']; ?>">
                                <input type="file" name="berkas" id="input-file" onchange="imgPreview()" class="form-control <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>">
                                <div class="invalid-feedback"><?= $validation->getError('berkas'); ?></div>                                
                                <div class="mt-3 text-center card-image-preview">
                                    <div class="mb-4">Image Preview</div>
                                    <img src="/<?= $promo['gambar']; ?>" alt="" class="img-preview max-width-300">
                                </div>
                                </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-wotle w-100">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>

<?= $this->endSection(); ?>