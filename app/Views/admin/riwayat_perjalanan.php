<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div id="riwayat_perjalanan">
    <div class="container px-5 py-4">

        <div class="d-lg-flex justify-content-between pb-2 border-bottom mb-4">
            <div class="mb-3">
                <div class="h4 fw-bold">Riwayat Perjalanan</div>                
            </div>
            <div class="col-lg-6 mb-3">
                <form action="" method="get" class="d-flex">
                    <input type="text" class="form-control border-0" placeholder="Ketikan sesuatu disini">
                    <button class="btn btn-wotle">Cari</button>
                </form>
            </div>
            <!-- <div class="notification shadow d-flex justify-content-center mb-3">
                <div class="pt-2"><i class="fa-regular fa-bell h5 text-secondary"></i></div>
            </div> -->
        </div>

        <?php for($i=1; $i<=5; $i++) : ?>        

        <div class="card position-relative mb-5 border-0 shadow br-15">
            <div class="class-fdlk shadow color-wotle"><i class="fa-solid fa-car"></i></div>
            <div class="card-body py-4 px-4">
                <div class="row pb-3  border-bottom">
                    <div class="col-lg-8 col-6">
                        <div class="fw-bold text-wotle">Jakarta Barat - Terminal Soekarno Hatta</div>
                        <div class="mt-2">Sendi Bayu Nugraha</div>
                    </div>
                    <div class="col-lg-4 col-6 text-end">
                        <div><a class="btn-lime px-4 py-1 small rounded-pill">pembayaran berhasil</a></div>
                        <div class="mt-2">Tgl Pesan : 10/11/2022</div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <label for="" class="small text-muted">Berangkat</label>
                            <div>12 Des 2022</div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <label for="" class="small text-muted">Waktu</label>
                            <div>08.35 WIB</div>
                        </div>                    
                        <div class="col-lg-3 col-6">
                            <label for="" class="small text-muted">Pembayaran</label>
                            <div>Bank BCA</div>
                        </div>                 
                        <div class="col text-end">
                            <label for="" class="small text-muted">Total Bayar</label>
                            <div class="fw-bold text-wotle">Rp 125.000</div>
                        </div>   
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <label for="" class="small text-muted">Nomor HP</label>
                            <div>089783462389023</div>
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="small text-muted">Email</label>
                            <div>customer@gmail.com</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 col-6">
                            <label for="" class="small text-muted">Driver</label>
                            <div>Suryaman</div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <label for="" class="small text-muted">Kendaraan</label>
                            <div>Inova X73 - E 8733 ABX</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endfor; ?>
    </div>
</div>

<?= $this->endSection(); ?>