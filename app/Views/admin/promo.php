<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>
<div id="promo">
    <div class="container">

        <?= toast_message(); ?>

        <div class="d-flex mt-5 mb-4 pb-3 border-bottom">
            <div class="h3 me-4 my-auto text-wotle fw-bold">Promo</div>
            <a href="tambah-promo" class="btn btn-wotle btn-sm">Tambah</a>
        </div>
        <div class="row">            
            <?php foreach ($promo as $x) : ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                    <div class="card card-promo br-15 border-0 cursor-pointer" data-bs-toggle="modal" data-bs-target="#detail_promo" data-id="<?= $x['id']; ?>">
                        <img src="<?= $x['gambar']; ?>" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?= $x['judul']; ?></p>
                            <div class="small"><i class="fa-solid fa-pen me-2"></i>Kode : <?= $x['kode_promo']; ?></div>
                            <div class="d-flex justify-content-between small">
                                <div class=""><i class="fa-solid fa-calendar-days me-2"></i>Berlaku hingga <?= date('d M Y', strtotime($x['tgl_akhir'])); ?></div>
                                <div class="text-capitalize <?= ($x['status'] == 'aktif') ? 'btn btn-sm btn-wotle' : "btn btn-sm btn-danger"; ?>"><?= $x['status']; ?></div>
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
                <a href="" class="btn btn-wotle btn-edit">Edit</a>
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
            $.ajax({
                url : '/detail-promo',
                type : 'post',
                dataType : 'json',
                data  : {
                    id : id,
                },
                success : function(result){
                    if(result.code == '200'){
                         $('.btn-edit').attr('href', '/edit-promo/' + result.promo.id);
                        $('#delete_promoLabel').html('Konfirmasi Penghapusan')
                        $('#id_promo_delete').val(result.promo.id)
                        $('.detail-judul').html(result.promo.judul);
                        $('.detail-deskripsi').html(result.promo.deskripsi);
                        $('.detail-poster').attr('src', result.promo.gambar);
                        $('.detail-expired').html('berlaku hingga : ' + result.promo.tgl_akhir)
                        $("#detail_promoLabel").html(result.promo.judul)
                        if (result.promo.status == 'aktif') {
                            $('.detail-status').html('Status : ' + result.promo.status).addClass('text-wotle').removeClass('text-danger');
                        } else {
                            $('.detail-status').html('Status : ' + result.promo.status).removeClass('text-wotle').addClass('text-danger');
                        }
                    }
                }
            })

           
        })
    })
</script>




<?= $this->endSection(); ?>