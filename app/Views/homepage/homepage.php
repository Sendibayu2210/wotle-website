<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent pt-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><img src="/wotle_assets/img/logo/logo_wotle.png" alt="" class="logo-wotle"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#download">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#ulasan">Ulasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#kontak">Kontak</a>
                </li>                
            </ul>
            <div class="">
                <a href="/login" class="me-3 link-login">Masuk</a>
                <a href="/register" class="link-register">Daftar</a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div id="homepage">
<!-- page first -->
    <div class="page-first pb-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-10 col-sm-7 text-first-page d-flex align-items-center">
                    <div>
                        <div class="h1 text-dark">Perjalanan <span class="text-wotle">Nyaman dan Menyenangkan</span></div>
                        <div class="mt-4 lh-base">
                            Anda ingin melakukan perjalanan antar kota? Bingung mau jasa transportasi apa yang MUDAH, CEPAT Dan TEPAT? Wotle andalannya. Perjalanan dengan kenyamanan, ketepatan dan kemudahan akan didapatkan.
                        </div>
                        <div class="my-3">Unduh aplikasi</div>          
                        <div class="d-flex">                                        
                            <div class="logo-mitra">                                                
                                <a href="/download" class="btn btn-wotle">Download <i class="fa-solid fa-download ms-2"></i></a>                        
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-lg-5 d-lg-flex bg-first-page">
                    <div class="card-img-small mx-3 my-auto">
                        <img src="/wotle_assets/img/wisata1.jpg" alt="">
                    </div>
                    <div class="card-img-large mx-3">
                        <img src="/wotle_assets/img/wisata2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page first -->
    <!-- service -->
    <div id="home" class="py-5 bg-light-gray">
        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-4 mb-3">                
                    <div class="d-flex justify-content-center">
                        <img src="/wotle_assets/img/question2.png" alt="" class="max-width-300">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="h3 fw-bold text-wotle">Apa itu Wotle ?</div>
                    <div class="mt-3">
                        Wotle merupakan aplikasi berbasis android sebagai media digitalisasi perkembangan di bidang transportasi travel secara online. Wotle juga sebagai sarana dan layanan, ini memudahkan dalam pemesanan terutama By request, informasi harga, informasi pengemudi, live track dan live chat.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="layanan" class="service py-5 bg-light-gray">
        <div class="container">
            <div class="text-wotle h5">Layanan</div>
            <div class="h3 fw-bold mb-4 title-service text-secondary">Keuntungan menggunakan layanan kami ? </div>
            <div class="row">
                <div class="col-lg-4 mb-5 text-lg-start text-md-center text-sm-center text-xs-center">
                    <div class="service-icon bg-wotle-second d-flex justify-content-center my-4">
                        <div class="my-auto h4"><i class="fas fa-search text-white"></i></div>
                    </div>
                    <div class="h4">Pencarian Mudah</div>
                    <div class="my-2">Mencari travel lebih mudah, sistem akan menampilkan daftar perjalanan ke destinasi tujuan.</div>
                    <!-- <div class="small"><a href="#" class="text-wotle">selanjutnya</a></div> -->
                </div>
                <div class="col-lg-4 mb-5 text-lg-start text-md-center text-sm-center text-xs-center">
                    <div class="service-icon bg-wotle d-flex justify-content-center my-4">
                        <div class="my-auto h4"><i class="fas fa-users text-white"></i></div>
                    </div>
                    <div class="h4">Mitra Terpercaya</div>
                    <div class="my-2">bekerjasama dengan mitra yang terpercaya, sehingga membuat pelanggan merasa aman dan tenang saat diperjalanan.</div>
                    <!-- <div class="small"><a href="#" class="text-wotle">selanjutnya</a></div> -->
                </div>
                <div class="col-lg-4 mb-5 text-lg-start text-md-center text-sm-center text-xs-center">
                    <div class="service-icon bg-wotle-second d-flex justify-content-center my-4">
                        <div class="my-auto h4"><i class="fas fa-car text-white"></i></div>
                    </div>
                    <div class="h4">Pantau Perjalanan Secara Realtime</div>
                    <div class="my-2">Pelanggan dapat melihat alur perjalanan secara realtime</div>
                    <!-- <div class="small"><a href="#" class="text-wotle">selanjutnya</a></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->

    <!-- page download -->
    <div id="download" class="bg-content">
        <div class="container py-5">
            <div class="py-5">
                <div class="text-center">
                    <div class="h2 color-wotle">Download aplikasi Wotle </div>
                    <div class="mt-5">
                        <a href="/download" class="btn btn-lg btn-wotle">Download <i class="fa-solid fa-download ms-2"></i></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page download -->

    <div class="container">
        <!-- portofolio -->
        <div class="portofolio pt-lg-3 pt-sm-3 mt-2">
            <div class="w-80">
                <div class="row">
                    <div class="col-lg-5 my-sm-5">
                        <div class="d-flex justify-content-center">
                            <div class="img-border-not-bottom-right">
                                <img src="/wotle_assets/img/promo/10.png" alt="" class="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto text-sm-center text-md-center text-lg-start text-xs-center">
                        <div class="fw-bold h3 lh-base col-lg-12">Dapatkan potongan harga 10% untuk perjalanan pertamamu</div>
                        <div>Potongan 10% untuk pengguna baru dan untuk perjalanan pertama, perjalanan nyaman dan hemat menantimu</div>
                        <button class="btn btn-wotle-second shadow mt-3">selengkapnya</button>
                    </div>
                </div>
                <div class="row pt-lg-0 pt-sm-5 mt-sm-5 mt-lg-0 mt-xs-5">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-6 my-auto text-sm-center text-md-center text-lg-start text-xs-center">
                        <div class="fw-bold h3 lh-base col-lg-12">Kumpulkan poin dari setiap perjalan, dan dapatkan tiket gratis</div>
                        <div>Setiap kamu melakukan perjalanan, akan mendapatkan poin yang bisa ditukar dengan tiket perjalanan berikutnya</div>
                        <button class="btn btn-wotle shadow mt-3">selengkapnya</button>
                    </div>
                    <div class="col-lg-5 my-sm-5">
                        <div class="d-flex justify-content-center">
                            <div class="img-border-not-bottom-right">
                                <img src="/wotle_assets/img/promo/poin2.png" alt="" class="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end portofolio -->

    </div>

    <!-- Client Review -->
    <div id="ulasan" class="client-review pt-5 mt-5 pb-5 bg-light-gray">
        <div class="container">
            <!-- <div class="text-wotle"></div> -->
            <div class="h3 py-2 pb-4 text-capitalize">Ulasan pelanggan</div>
            <div class="row">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-lg-4">
                        <div class="card card-customer-say mb-4 shadow border-0 <?= ($i % 2 == 0) ? 'bg-light' : 'bg-wotle text-white'; ?>">
                            <div class="card-body">
                                <div class="card-title"><span class="fw-bold">W*****@gmail.com</span></div>
                                <div class="small pt-2 <?= ($i % 2 == 0) ? 'text-muted' : 'text-white'; ?>">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero adipisci veniam odit minus velit recusandae fugit laboriosam consequuntur corrupti excepturi.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus a nihil. Perspiciatis, totam nostrum tempora quia ipsa mollitia omnis voluptas delectus exercitationem nam, ullam quam laudantium cumque vel quo?
                                </div>
                                <div class="start mt-3">
                                    <?php for ($s = 0; $s < 5; $s++) : ?>
                                        <i class="fa-solid fa-star text-orange"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <!-- end Client Review -->

    <div class="footer bg-dark text-white p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="h4">Wotle - Wonderful Sutle</div>
                    <div>jasa transportasi travel yang mudal, cepat dan tepat? Wotle andalannya. Perjalanan dengan kenyamanan, ketepatan dan kemudahan</div>
                </div>          
                <div id="kontak" class="col-lg-3 col-sm-6 mb-4">
                    <div class="h4">Kontak</div>
                    <div class="mb-3"><a href="#" target="_blank" class="text-white"><i class="fa-brands fa-whatsapp text-white me-2"></i>WhatsApp</a></div>
                    <div class="mb-3"><a href="#" target="_blank" class="text-white"><i class="fa-brands fa-instagram text-white me-2"></i>Instagram</a></div>         
                    <div class="mb-3"><a href="#" target="_blank" class="text-white"><i class="fa-solid fa-phone text-white me-2"></i>Telepon</a></div>
                </div>
                <div class="col-lg-3 mb-4 text-center">
                    <div class="h4 mb-4">
                        <img src="/wotle_assets/img/logo/logo_wotle.png" class="max-width-80">
                    </div>
                    <div class="sosmed d-flex justify-content-center">
                        <div class="mx-3"><a href="#"><i class="fa-brands fa-whatsapp h3 text-white"></i></a></div>                    
                        <div class="mx-3"><a href="#"><i class="fa-brands fa-instagram h3 text-white"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>