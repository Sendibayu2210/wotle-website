<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<style>
    .page-first {
        height: 90vh;
    }

    .page-first .card-img-small {
        width: 200px;
        height: 300px;
        border-radius: 45%;
    }

    .page-first .card-img-small::before {
        content: ' ';
        width: 200px;
        height: 300px;
        border-radius: 45%;
        border: 1px solid orange;
        position: absolute;
        margin-left: -10px;
        transform: translateY(2%);
        z-index: -1;
    }

    .page-first .card-img-small img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 45%;
    }

    .page-first .card-img-large {
        width: 300px;
        height: 400px;
        border-radius: 45%;
    }

    .page-first .card-img-large::before {
        content: ' ';
        width: 300px;
        height: 400px;
        border-radius: 45%;
        border: 1px solid green;
        position: absolute;
        margin-left: -10px;
        transform: translateY(2%);
        z-index: -1;
    }

    .page-first .card-img-large img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 45%;
    }

    .card-customer-say {
        border-radius: 20px 20px 0 20px;
    }

    .text-orange {
        color: orange;
    }

    .img-border-not-bottom-right {
        border-radius: 20px 20px 0 20px;
        width: 300px;
        position: relative;
    }

    .img-border-not-bottom-right .img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 20px 20px 0 20px;
    }

    .service-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .bg-light-gray {
        background: #f6f6f8;
    }

    .bg-first-page::before {
        content: ' ';
        position: absolute;
        z-index: -2;
        top: 0;
        right: 0;
        height: 100vh;
        width: 45%;
        background: #f6f6f8;
    }

    .btn-register {
        border-radius: 20px;
    }

    .logo-mitra img {
        width: 100px;
        margin-right: 15px;
    }

    .title-service::after {
        content: ' ';
        width: 200px;
        height: 2px;
        background: blue;
        position: absolute;
        margin-left: 20px;
        margin-top: 25px;
    }

    .line-page-first::before {
        content: ' ';
        width: 200px;
        height: 2px;
        background: blue;
        position: absolute;
        left: -100px;
        z-index: -1;
        margin: 20px;
    }

    @media only screen and (max-width: 992px) {
        .line-page-first::before {
            display: none;
        }
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent pt-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Wotle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Portofolio</a>
                </li>
            </ul>
            <div>
                <a href="/dashboard" class="btn btn-outline-secondary btn-register">Register</a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- page first -->
<div class="page-first pb-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6 text-capitalize">
                <div class="h1">We are creative digital & marketing agency</div>
                <div class="mt-4 h5">
                    we help to create clients desire task property & our team also colloboration with you
                </div>
                <div class="d-flex mt-5">
                    <div class="my-auto line-page-first"><i class="fa-regular fa-circle-play h1 text-primary me-4"></i></div>
                    <button class="btn btn-primary shadow">Get started</button>
                </div>

                <div class="pt-5 mt-4">
                    <div class="logo-mitra d-flex">
                        <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-sva-scholarship-20.png" alt="">
                        <img src="https://www.freepnglogos.com/uploads/netflix-tv-logo-png-9.png" alt="">
                        <img src="https://w7.pngwing.com/pngs/788/714/png-transparent-logo-facebook-social-media-business-restaurant-menu-books-blue-text-trademark.png" alt="">
                        <img src="https://w7.pngwing.com/pngs/1012/770/png-transparent-amazon-logo-amazon-com-amazon-video-logo-company-brand-amazon-logo-miscellaneous-wish-text.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex d-md-none d-sm-none d-xs-none bg-first-page">
                <div class="card-img-small mx-3 my-auto">
                    <img src="https://previews.123rf.com/images/rido/rido1010/rido101000565/8235680-business-discussion-at-working-meeting-in-office-vertical-copy-space.jpg" alt="">
                </div>
                <div class="card-img-large mx-3">
                    <img src="https://previews.123rf.com/images/rido/rido1010/rido101000565/8235680-business-discussion-at-working-meeting-in-office-vertical-copy-space.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page first -->
<!-- service -->
<div class="service py-5 bg-light-gray">
    <div class="container">
        <div class="text-primary h5 my-3">Service</div>
        <div class="h3 fw-bold mb-4 title-service">What we do ? </div>
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-lg-4 mb-5">
                    <div class="service-icon bg-primary d-flex justify-content-center my-3">
                        <div class="my-auto h4"><i class="fa-solid fa-rocket text-white"></i></div>
                    </div>
                    <div class="h4">Lorem</div>
                    <div class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aliquid suscipit nulla repellat modi eos mollitia provident corrupti, tenetur unde.</div>
                    <div class="small"><a href="#" class="text-primary">Read more</a></div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<!-- end service -->

<div class="container">
    <!-- portofolio -->
    <div class="portofolio pt-lg-3 pt-sm-3 mt-5">
        <div class="w-80">
            <div class="row">
                <div class="col-lg-5 my-sm-5">
                    <div class="d-flex justify-content-center">
                        <div class="img-border-not-bottom-right">
                            <img src="https://st4.depositphotos.com/5392356/28133/i/1600/depositphotos_281336672-stock-photo-portrait-young-architects-having-discussion.jpg" alt="" class="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-auto text-sm-center text-md-center text-lg-start">
                    <div class="fw-bold h3 lh-base col-lg-8">We give best solution to grow up your business </div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deleniti ipsum enim dolor hic a natus aspernatur eaque id libero.</div>
                    <button class="btn btn-primary shadow mt-3">Learn more</button>
                </div>
            </div>
            <div class="row pt-lg-0 pt-sm-5 mt-sm-5 mt-lg-0">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-6 my-auto text-sm-center text-md-center text-lg-start">
                    <div class="fw-bold h3 lh-base col-lg-8">We give best solution to grow up your business </div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deleniti ipsum enim dolor hic a natus aspernatur eaque id libero.</div>
                    <button class="btn btn-primary shadow mt-3">Learn more</button>
                </div>
                <div class="col-lg-5 my-sm-5">
                    <div class="d-flex justify-content-center">
                        <div class="img-border-not-bottom-right">
                            <img src="https://st4.depositphotos.com/5392356/28133/i/1600/depositphotos_281336672-stock-photo-portrait-young-architects-having-discussion.jpg" alt="" class="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end portofolio -->

</div>

<!-- Client Review -->
<div class="client-review pt-5 mt-5 pb-5 bg-light-gray">
    <div class="container">
        <div class="text-primary">Client Service</div>
        <div class="h3 py-2 pb-4 text-capitalize">What our customer say</div>
        <div class="row">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-lg-4">
                    <div class="card card-customer-say mb-4 shadow border-0 <?= ($i % 2 == 0) ? 'bg-light' : 'bg-dark text-white'; ?>">
                        <div class="card-body">
                            <div class="card-title fw-bold">Wotle@gmail.com</div>
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
            <div class="col-lg-5 mb-4">
                <div class="h4">Wotle</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, quis?</div>
            </div>
            <div class="col-lg-2 col-sm-6 mb-4">
                <div class="h4">Our Service</div>
                <div>Lorem 1</div>
                <div>Lorem 1</div>
                <div>Lorem 1</div>
                <div>Lorem 1</div>
            </div>
            <div class="col-lg-2 col-sm-6 mb-4">
                <div class="h4">Get Help</div>
                <div>lorem 1</div>
                <div>lorem 1</div>
                <div>lorem 1</div>
                <div>lorem 1</div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="h4 mb-4">Logo Wotle</div>
                <div class="sosmed d-flex justify-content-center">
                    <div class="mx-3"><a href="#"><i class="fa-brands fa-whatsapp h3 text-white"></i></a></div>
                    <div class="mx-3"><a href="#"><i class="fa-brands fa-facebook h3 text-white"></i></a></div>
                    <div class="mx-3"><a href="#"><i class="fa-brands fa-instagram h3 text-white"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>