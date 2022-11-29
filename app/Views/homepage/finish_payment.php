<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<style type="text/css">
     .card-LottieConfettie{
        position: absolute;
        z-index: -1;
        left: 0;
        margin: 0 auto;
        width: 100%;
        height: 500px;
    }

    #payment-message .card{
        position:  absolute;
        z-index: 2;
    }

    @media only screen and (max-width:  768px) {
        img.LottieConfettie{
            width: 450px;
        }
    }
</style>

<div class="link-animate"></div>

<nav class="navbar bg-white p-3 shadow">
    <div class="container">
        <a class="navbar-brand color-wotle fw-bold" href="/">
            <img src="/wotle_assets/img/logo/logo_wotle.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            Wotle
        </a>        
    </div>
</nav>
 

<div id="payment-message" data-category="finishpayment">
    <div class="container">
        <div class="d-flex justify-content-center card-LottieConfettie">
            <img src="" alt="" class="LottieConfettie">
        </div>
        <div class="text-center mt-5 d-flex justify-content-center">
            <div class="card border-0 bg-transparent mt-5">
                <div class="card-body">         
                    <div class="h1 animate__animated animate__tada animate-check"><i class="fa-solid fa-check text-lime h1"></i></div>
                    <div class="h3 fw-bold text-lime animate__animated animate__rubberBand animate-text">Pembayaran Berhasil</div>
                    <div class="mt-3 text-muted">Terimakasih telah melakukan transaksi pada aplikasi Wotle</div>
                </div>
            </div>        
        </div>
    </div>
</div>


<script src="/wotle_assets/js/payment.js"></script>

<?= $this->endSection(); ?>