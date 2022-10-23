<section id="sidebar" class="">
    <div class="logo-title mb-5">
        <img src="" alt="">
        <div class="d-flex">
            <div><img src="/img/logo/logo_wotle.png" alt="" class="logo-wotle"></div>
            <div class="h4 fw-bold my-auto ms-3 color-wotle">WOTLE</div>
        </div>
    </div>

    <div class="list-menu">
        <a href="/dashboard" class="d-flex py-2 ps-4 <?= ($link == 'dashboard') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-house"></i></div>
            <div class="">Dashboard</div>
        </a>
        <a href="/users" class="d-flex py-2 ps-4 <?= ($link == 'users') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-users"></i></div>
            <div class="">Users</div>
        </a>
        <a href="/admin-promo" class="d-flex py-2 ps-4 <?= ($link == 'promo') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-brands fa-cc-discover"></i></div>
            <div class="">Promo</div>
        </a>
        <a href="/tiket" class="d-flex py-2 ps-4 <?= ($link == 'tiket') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-ticket"></i></div>
            <div class="">Tiket</div>
        </a>
        <a href="/favorite" class="d-flex py-2 ps-4 <?= ($link == 'favorite') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-bookmark"></i></div>
            <div class="">Favorit</div>
        </a>
        <a href="" class="d-flex py-2 ps-4">
            <div class="me-2"><i class="fa-solid fa-envelope"></i></div>
            <div class="circle-notif">Pesan</div>
        </a>
        <a href="/payment" class="d-flex py-2 ps-4 <?= ($link == 'payment') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-wallet"></i></div>
            <div class="">Pembayaran</div>
        </a>
        <a href="" class="d-flex py-2 ps-4 btn-logout">
            <div class="me-2"><i class="fa-solid fa-sign-out"></i></div>
            <div class="">Keluar</div>
        </a>
    </div>

</section>