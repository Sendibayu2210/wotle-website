<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div id="ticket" class="bg-content w-100 px-4">
        <div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-lime">Daftar Tiket</div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="fw-bold text-lime">Rute : Kuningan - Bandung</div>

                <div class="row px-3 mt-3">
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Pemberangkatan</div>
                        <div class="fw-bold mt-2">
                            <div>Kuningan (kng)</div>
                        </div>
                    </div>
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Tujuan</div>
                        <div class="fw-bold mt-2">
                            <div>Bandung (bdg)</div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3 border">
                        <div class="text-muted">Waktu</div>
                        <div class="fw-bold mt-2">Sabtu, 15 Oktober 2022</div>
                        <div class="fw-bold">Pukul : 13.00 WIB</div>
                    </div>
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Harga</div>
                        <div class="fw-bold mt-2">Rp 170.000</div>
                    </div>
                    <div class="col-lg-2 py-3  my-auto">
                        <div class="text-center">
                            <button class="btn btn-lime">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class=" mt-4 d-flex">
                    <div class="me-3">Driver : Alex John</div>
                    <div class="me-3">Tipe : Alphard G-79x</div>
                    <div class="me-3">No Polisi : E 7483 YDG</div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="fw-bold text-lime">Rute : Kuningan - Jakarta</div>

                <div class="row px-3 mt-3">
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Pemberangkatan</div>
                        <div class="fw-bold mt-2">
                            <div>Kuningan (kng)</div>
                        </div>
                    </div>
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Tujuan</div>
                        <div class="fw-bold mt-2">
                            <div>Bandung (bdg)</div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3 border">
                        <div class="text-muted">Waktu</div>
                        <div class="fw-bold mt-2">Rabu, 19 Oktober 2022</div>
                        <div class="fw-bold">Pukul : 13.00 WIB</div>
                    </div>
                    <div class="col-lg-2 py-3 border">
                        <div class="text-muted">Harga</div>
                        <div class="fw-bold mt-2">Rp 200.000</div>
                    </div>
                    <div class="col-lg-2 py-3  my-auto">
                        <div class="text-center">
                            <button class="btn btn-lime">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class=" mt-4 d-flex">
                    <div class="me-3">Driver : Alex John</div>
                    <div class="me-3">Tipe : Alphard G-79x</div>
                    <div class="me-3">No Polisi : E 7483 YDG</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>