<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div class="container bg-content">
    <div class="h3 mt-5 fw-bold pb-3 border-bottom text-lime">Destinasi Favorit</div>

    <div class="mt-3">
        <?php foreach ($favorite as $x) : ?>
            <div class="card border-0 mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 text-center">
                            <div style="width: 120px; height:70px;">
                                <img src="/img/destinasi/<?= $x['gambar']; ?>" alt="" style="width: 100%; height:100%; object-fit:cover;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="fw-bold mb-3"><?= $x["tujuan"]; ?></div>
                            <div class="small text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora optio voluptates consequuntur non voluptatem quaerat at harum molestiae illo enim?</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-end">
                                <button class="bg-transparent border-0"><i class="fa-solid fa-bookmark text-lime h5"></i></button>
                                <button class="bg-transparent border-0"><i class="fa-solid fa-ellipsis-vertical h5"></i></button>
                            </div>
                            <div class="text-end pt-4">
                                <a href="#" class="text-decoration-none btn btn-sm btn-purple-100">Lihat destinasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endsection(); ?>