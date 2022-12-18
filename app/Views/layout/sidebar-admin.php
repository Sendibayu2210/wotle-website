<section id="sidebar" class="border-transparent">
    <div class="logo-title mb-5 mt-5">
        <div class="d-flex justify-content-center">
            <div><img src="/wotle_assets/img/logo/logo_wotle.png" alt="" class="logo-wotle"></div>
            <div class="h4 fw-bold my-auto ms-3 text-wotle d-flex align-items-center">WOTLE</div>
        </div>
    </div>

    <div class="list-menu">
        <a href="/dashboard" class="d-flex py-2 ps-4 <?= ($link == 'dashboard') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid tex fa-house fa-fw"></i></div>
            <div class="">Dashboard</div>
        </a>
        <a href="/profile" class="d-flex py-2 ps-4 <?= ($link == 'profile') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid tex fa-user fa-fw"></i></div>
            <div class="">Profile</div>
        </a>
        <?php if (session()->get('role_wotle') == 'admin') :  ?>
            <a href="/users" class="d-flex py-2 ps-4 <?= ($link == 'users') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-solid tex fa-users fa-fw"></i></div>
                <div class="">Users</div>
            </a>
            <a href="/admin-promo" class="d-flex py-2 ps-4 <?= ($link == 'promo') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-brands fa-cc-discover"></i></div>
                <div class="">Promo</div>
            </a>
            <a href="/riwayat-perjalanan" class="d-flex py-2 ps-4 <?= ($link == 'riwayat') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-solid fa-car-side"></i></i></div>
                <div class="">Riwayat</div>
            </a>
            <!-- <a href="/tiket" class="d-flex py-2 ps-4 <?= ($link == 'tiket') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-solid tex fa-ticket fa-fw"></i></div>
                <div class="">Tiket</div>
            </a> -->
          <!--   <a href="/favorite" class="d-flex py-2 ps-4 <?= ($link == 'favorite') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-solid tex fa-bookmark fa-fw"></i></div>
                <div class="">Favorit</div>
            </a> -->
           <!--  <a href="/payment" class="d-flex py-2 ps-4 <?= ($link == 'payment') ? 'active' : ''; ?>">
                <div class="me-2"><i class="fa-solid tex fa-wallet fa-fw"></i></div>
                <div class="">Pembayaran</div>
            </a> -->
        <?php endif; ?>
        <!-- <a href="" class="d-flex py-2 ps-4">
            <div class="me-2"><i class="fa-solid tex fa-bell fa-fw"></i></div>
            <div class="circle-notif">Notifikasi</div>
        </a> -->
        <a href="/logout" class="d-block py-2 ps-4 btn-logout">
            <span class="d-flex">
                <div class="me-2"><i class="fa-solid tex fa-sign-out fa-fw"></i></div>
                <div class="">Keluar</div>
            </span>
        </a>
    </div>

</section>