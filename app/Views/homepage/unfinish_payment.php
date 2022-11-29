<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="link-animate"></div>

<nav class="navbar bg-white p-3 shadow">
    <div class="container">
        <a class="navbar-brand color-wotle fw-bold" href="/">
            <img src="/wotle_assets/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            Wotle
        </a>        
    </div>
</nav>
 

<div id="payment-message" data-category="unfinishpayment">
    <div class="container">
        <!-- <div class="d-flex justify-content-center card-LottieConfettie">
            <img src="" alt="" class="LottieConfettie">
        </div> -->
        <div class="text-center mt-5 d-flex justify-content-center">
            <div class="card border-0 bg-transparent mt-5">
                <div class="card-body">         
                    <div class="h1  animate-check"><i class="fa-solid fa-xmark text-danger h1"></i></div>
                    <div class="h3 fw-bold text-danger animate__animated animate__rubberBand animate-text">Pembayaran Gagal</div>
                    <div class="mt-3 text-muted">Oopps! Maaf pembayaran tidak dapat dilakukan</div>
                </div>
            </div>        
        </div>
    </div>
</div>


<script src="/wotle_assets/js/payment.js"></script>

<?= $this->endSection(); ?>