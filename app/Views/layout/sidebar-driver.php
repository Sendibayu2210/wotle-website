<section id="sidebar" class="border-transparent">
    <div class="logo-title mb-5 mt-5">
        <div class="d-flex">
            <div><img src="/wotle_assets/img/logo/logo_wotle.png" alt="" class="logo-wotle"></div>
            <div class="h4 fw-bold my-auto ms-3 color-wotle">WOTLE</div>
        </div>
    </div>

    <div class="list-menu">
        <a href="/dashboard" class="d-flex py-2 ps-4 <?= ($link == 'dashboard') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-house fa-fw"></i></div>
            <div class="">Dashboard</div>
        </a>
        <a href="/profile" class="d-flex py-2 ps-4 <?= ($link == 'profile') ? 'active' : ''; ?>">
            <div class="me-2"><i class="fa-solid fa-user fa-fw"></i></div>
            <div class="">Profile</div>
        </a>       
        <a href="" class="d-flex py-2 ps-4">
            <div class="me-2"><i class="fa-solid fa-bell fa-fw"></i></div>
            <div class="circle-notif">Notifikasi</div>
        </a>
        <a href="/logout" class="d-flex py-2 ps-4 btn-logout">
            <div class="me-2"><i class="fa-solid fa-sign-out fa-fw"></i></div>
            <div class="">Keluar</div>
        </a>
    </div>

</section>