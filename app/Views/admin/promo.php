<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>
<div id="promo">
    <div class="container">

        <?= toast_message(); ?>

        <div class="d-flex justify-content-between mt-5 mb-4 pb-3 border-bottom">
            <div class="h3 me-4 my-auto text-lime fw-bold">Promo</div>
            <a href="tambah-promo" class="btn btn-lime btn-sm">Tambah</a>
        </div>
        <div class="row">
            <?php $gambar = 'https://www.static-src.com/siva/asset//09_2019/1200x460_Header_Microsite_Wonderful_Indonesia.jpg' ?>
            <?php foreach ($promo as $x) : ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card card-promo br-15 border-0 cursor-pointer" data-bs-toggle="modal" data-bs-target="#detail_promo" data-id="<?= $x['id']; ?>" data-judul="<?= $x['judul']; ?>" data-deskripsi="<?= $x['deskripsi']; ?>" data-poster="<?= $x['poster']; ?>" data-mulai="<?= $x['tgl_mulai']; ?>" data-akhir="<?= date('d M Y', strtotime($x['tgl_akhir'])); ?>" data-status="<?= $x['status']; ?>">
                        <img src="/img/promo/<?= $x['poster']; ?>" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?= $x['judul']; ?></p>
                            <div class="small"><i class="fa-solid fa-pen me-2"></i>Kode : <?= $x['kode_promo']; ?></div>
                            <div class="d-flex justify-content-between small">
                                <div class=""><i class="fa-solid fa-calendar-days me-2"></i>Berlaku hingga <?= date('d M Y', strtotime($x['tgl_akhir'])); ?></div>
                                <div class="<?= ($x['status'] == 'aktif') ? 'text-lime' : "text-danger"; ?>"><?= $x['status']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal Detail Promo-->
<div class="modal fade" id="detail_promo" tabindex="-1" aria-labelledby="detail_promoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detail_promoLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start detail-poster">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title detail-judul"></h5>
                                <p class="card-text detail-deskripsi"></p>
                                <div class="card-text "><small class="text-muted detail-expired"></small></div>
                                <div class="card-text "><small class="detail-status"></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-hapus" data-bs-toggle="modal" data-bs-target="#delete_promo">Hapus</button>
                <a href="" class="btn btn-lime btn-edit">Edit</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete Promo-->
<div class="modal fade" id="delete_promo" tabindex="-1" aria-labelledby="delete_promoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="delete_promoLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/hapus-promo" method="post">
                <div class="modal-body">
                    <div class="text-center">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" id="id_promo_delete">
                        <input type="hidden" name="_method" value="DELETE">
                        <div>Apakah anda yakin akan menghapus data ini ?</div>
                        <i>data ini tidak dapat dipulihkan setelah data terhapus</i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus Promo</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('.card-promo').click(function() {
            let id = $(this).data('id');
            let judul = $(this).data('judul');
            let deskripsi = $(this).data('deskripsi');
            let poster = $(this).data('poster');
            let mulai = $(this).data('mulai');
            let akhir = $(this).data('akhir');
            let status = $(this).data('status');

            $('.btn-edit').attr('href', '/edit-promo/' + id);

            $('#delete_promoLabel').html('Konfirmasi Penghapusan')
            $('#id_promo_delete').val(id)
            $('.detail-judul').html(judul);
            $('.detail-deskripsi').html(deskripsi);
            $('.detail-poster').attr('src', '/img/promo/' + poster);
            $('.detail-expired').html('berlaku hingga : ' + akhir)
            $("#detail_promoLabel").html(judul)
            if (status == 'aktif') {
                $('.detail-status').html('Status : ' + status).addClass('text-lime').removeClass('text-danger');
            } else {
                $('.detail-status').html('Status : ' + status).removeClass('text-lime').addClass('text-danger');
            }
        })
    })
</script>




<?= $this->endSection(); ?>