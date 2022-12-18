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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#destinasi">Destinasi</a>
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
            <div class="row py-5">
                <div class="col-lg-7 col-md-10 col-sm-7 text-first-page d-flex align-items-center pt-5">
                    <div class="position-relative">
                        <div class="rounded-pill bg-primary-light px-3 py-2 d-flex align-items-center w-220">Jelajahi Indonesia <div class="indonesian-flag ms-2"><div></div><div></div></div></div>
                        <div class="h1 text-dark mt-4 fw-bold">Perjalanan <span class="text-wotle">Nyaman <span class="text-dark">dan</span> Menyenangkan</span></div>
                        <div class="mt-4 lh-base">
                            Anda ingin melakukan perjalanan antar kota? Bingung mau jasa transportasi apa yang MUDAH, CEPAT Dan TEPAT? Wotle andalannya. Perjalanan dengan kenyamanan, ketepatan dan kemudahan akan didapatkan.
                        </div>                        
                        <div class="row w-100 border px-4 mt-5 border-0 shadow choose-dest-date">
                            <div class="col-4 d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center justify-content-center mx-3 h4"><i class="fa-solid fa-location-dot text-wotle"></i></div>
                                    <div>
                                        <div>Tujuan</div>
                                        <div class="fw-bold">Jakarta</div>
                                    </div>               
                                </div>                   
                            </div>
                            <div class="col-5 d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center justify-content-center mx-3 h4"><i class="fa-solid fa-calendar-days text-wotle"></i></div>
                                    <div>
                                        <div>Tanggal</div>
                                        <div class="fw-bold"><?= date('d F Y', time()); ?></div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-3">
                                <div class="d-flex justify-content-end">
                                    <button class="d-flex justify-content-center align-items-center h5 border hw-60 br-50 bg-primary-light border-0">
                                        <i class="fa-solid fa-search text-wotle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>         
                    </div>    
                </div>
                <div class="col-lg-5 bg-first-page">
                    <div class="position-relative d-lg-flex justify-content-center">                        
                        <img src="/wotle_assets/img/linepanah.png" alt="" class="linepanahsdkfl">
                        <div class="text-lfdkas rounded-pill shadow small"><i class="fa-solid fa-map-pin me-1 text-wotle-second"></i> Pilih tujuanmu</div>
                        <div class="landing-page-img-top ">
                            <img src="/wotle_assets/img/peopletop.png" alt="">
                        </div>
                        <div class="line-fsdfk shadow">
                            <div></div><div></div>
                        </div>
                        <div class="line-dflks shadow">
                            <div></div><div></div><div></div>
                        </div>
                    </div>
                    <!-- <div class="card-img-small mx-3 my-auto">
                        <img src="/wotle_assets/img/wisata1.jpg" alt="">
                    </div>
                    <div class="card-img-large mx-3">
                        <img src="/wotle_assets/img/wisata2.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end page first -->
    <!-- service -->
    <div id="home" class="py-5 bg-light-gray">
        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-4 mb-3 ">                
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

    <div id="layanan" class="service pb-5 bg-light-gray">
        <div class="container">
            <!-- <div class="h3 fw-bold mb-4 title-service text-secondary">Keuntungan menggunakan layanan kami ? </div> -->            
            <div class="row">
                <div class="col-lg-3 mb-5 text-lg-start text-md-center text-sm-center text-xs-center d-flex align-items-center">
                    <div class="h2">Keuntungan buat kamu <img src="/wotle_assets/img/fire.png" alt="" class="w-30px"></div>
                </div>
                <div class="col-lg-3 mb-5 text-lg-start text-md-center text-sm-center text-xs-center">
                    <div class="service-icon d-flex justify-content-center my-4">
                        <!-- <div class="my-auto h4"><i class="fas fa-search text-white"></i></div> -->
                        <div class="position-relative"><img src="/wotle_assets/img/searchicon.png" alt="" class="w-100px"></div>
                    </div>
                    <div class="h4">Pencarian Mudah</div>
                    <div class="my-2">Mencari travel lebih mudah, sistem akan menampilkan daftar perjalanan ke destinasi tujuan.</div>                    
                </div>
                <div class="col-lg-3 mb-5 text-lg-start text-md-center text-sm-center text-xs-center pt-4">
                    <div class="service-icon  d-flex justify-content-center my-4">
                        <!-- <div class="my-auto h4"><i class="fas fa-users text-white"></i></div> -->
                        <div class="position-relative"><img src="/wotle_assets/img/peoplelk.png" alt="" class="w-60px"></div>
                    </div>
                    <div class="h4">Mitra Terpercaya</div>
                    <div class="my-2">bekerjasama dengan mitra yang terpercaya, sehingga membuat pelanggan merasa aman dan tenang saat diperjalanan.</div>                    
                </div>
                <div class="col-lg-3 mb-5 text-lg-start text-md-center text-sm-center text-xs-center">
                    <div class="service-icon d-flex justify-content-center my-4">
                        <!-- <div class="my-auto h4"><i class="fas fa-car text-white"></i></div> -->
                        <div class="position-relative"><img src="/wotle_assets/img/tracking.png" alt="" class="w-60px"></div>
                    </div>
                    <div class="h4">Pantau Perjalanan Secara Realtime</div>
                    <div class="my-2">Pelanggan dapat melihat alur perjalanan secara realtime</div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->

    <!-- page list destination -->
    <div class="container overflow-hidden py-5 my-5">
        <div class="d-flex justify-content-between">
            <div class="h2 mb-5">Pilihan Kota Tujuan</div>
            <div class="d-flex">
                <div class="btn-prev-destination h3 mx-2"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="btn-next-destination h3 mx-2"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="landing-list-destination">
          <div class="carousel-cell">
            <img src="https://i.pinimg.com/originals/b1/0d/75/b10d758b8f770af15bbfff88d162ba05.jpg" alt="">
            <div class="city-name rounded-pill small">Jakarta</div>
        </div>
          <div class="carousel-cell">
            <img src="https://indonesia.tripcanvas.co/id/wp-content/uploads/sites/2/2018/03/13-1-by-ragingpixels.jpg" alt="">
            <div class="city-name rounded-pill small">Tangerang</div>
        </div>
          <div class="carousel-cell">
            <img src="https://www.itrip.id/wp-content/uploads/2019/06/Tempat-Wisata-Bekasi.jpg" alt="">
            <div class="city-name rounded-pill small">Bekasi</div>
        </div>
          <div class="carousel-cell">
            <img src="https://i.pinimg.com/550x/02/a3/47/02a34771e0a6fed3b5f22dabf54c32b7.jpg" alt="">
            <div class="city-name rounded-pill small">Bandung</div>
        </div>
          <div class="carousel-cell">
            <img src="https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2021/11/ezgif.com-gif-maker-2021-11-11T201717.015.webp" alt="">
            <div class="city-name rounded-pill small">Semarang</div>
        </div>          
          <div class="carousel-cell">
            <img src="https://i.pinimg.com/originals/a0/7f/07/a07f078b53ee220baf76dd50c5d261b7.jpg" alt="">
            <div class="city-name rounded-pill small">Yogyakarta</div>
        </div>             
        </div>
    </div>  
    <!-- end page list destination -->

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


<script>
    $(document).ready(function(){
        $('.landing-list-destination').flickity({          
          cellAlign: 'left',
          contain: true,
          wrapAround: true,
          freeScroll: true,
        });
        $('.btn-next-destination').click(function(){
            clickBtn('.landing-list-destination .flickity-prev-next-button.next');
            setBgBtnNextPrev('.btn-next-destination');
        })
        $('.btn-prev-destination').click(function(){
            clickBtn('.landing-list-destination .flickity-prev-next-button.previous');
            setBgBtnNextPrev('.btn-prev-destination');
        })        
    })

    function clickBtn(data){
        $(data).click();
    }
    function setBgBtnNextPrev(data){
        $(data).css('background','#e5efff');
        setTimeout(function(){
            $(data).css("background",'#e95f5d')
        },200);
    }
</script>

<?= $this->endSection(); ?>