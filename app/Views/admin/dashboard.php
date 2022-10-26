<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="d-flex">
    <?= $this->include('layout/sidebar-admin'); ?>

    <section id="content-admin" class="bg-content">
        <div class="d-flex justify-content-between">
            <div>
                <div class="h4 fw-bold">Halo, <?= $user['nama']; ?></div>
                <div>Selamat datang</div>
            </div>
            <div class="notification shadow d-flex justify-content-center">
                <div class="pt-2"><i class="fa-regular fa-bell h5 text-secondary"></i></div>
            </div>
        </div>

        <form action="" method="get" class="mt-4 d-flex">
            <input type="text" class="form-control border-0" placeholder="Search">
            <button class="btn btn-lime ms-3">Search</button>
        </form>


        <div class="mt-4">
            <div class="h5 fw-bold mb-3">Discover World</div>
            <div class="menu d-flex justify-content-between ">
                <div>
                    <a href="#" class="me-3 active">Popular Places</a>
                    <a href="#" class="me-3">Recomended</a>
                    <a href="#" class="me-3">Near Me</a>
                </div>
                <div>
                    <a href="" class="text-lime">view all <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="mt-4">
                <div class="row">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="col-lg-4">
                            <div class="card card-img border-0">
                                <img src="https://i.pinimg.com/236x/f5/af/d1/f5afd19a6f162e5b8a86a916b6479a77.jpg" class="card-img-top" alt="...">
                                <div class="d-flex justify-content-center">
                                    <div class="card-body-content">
                                        <div class="fw-bold">Lorem</div>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div>Lorem ipsum dolor sit amet </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="circle shadow bg-lime">
                                                    <i class="fa-solid fa-arrow-right text-white pt-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="mt-5 event">
            <div class="h4 fw-bold mb-3">Event Dates</div>
            <div class="date">
                <div class="days d-flex justify-content-between"></div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="col-lg-6">
                            <div class="card border-0 mb-4 border-radius-15">
                                <div class="card-body">
                                    <div class="card border-0 mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4 py-auto">
                                                <img src="https://i.pinimg.com/736x/c9/b4/fb/c9b4fbc92ae7dad28793324e91028ab1.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="h6 fw-bold">Lorem</h5>
                                                    <div class="card-text text-muted">This is a wider card with</div>
                                                    <div class="card-text"><small class="text-lime">more</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>




    </section>

    <section id="profile">

        <img src="https://cdn.99images.com/photos/wallpapers/3d-abstract/minimalist-phone%20android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-jz9ey.jpg" alt="" class="bg-profile">

        <div class="content">
            <div class="profile-title h5">My Profile</div>

            <div class="d-flex justify-content-center">
                <div class="card-circle-img">
                    <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/136668030/original/f4d193bd68861ec50d0106d0fe123bfd17aad9e1/draw-your-old-and-new-picture-with-this-style.jpg" alt="">
                </div>
            </div>
            <div class="mt-3 fw-bold text-center text-white">Admin Wotle</div>
            <div class="mt-2 small text-center text-white">Super Admin</div>


            <div class="destination-trip mt-5">
                <div class="h5 my-4 text-white">Destination Trip</div>
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="card-body-content mb-3 border-0 border-radius-15 p-3 bg-white">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="circle shadow bg-lime ">
                                    <i class="fa-solid fa-arrow-right text-white pt-2"></i>
                                </div>
                            </div>
                            <div class="col-lg-9 small">
                                <div class="fw-bold">Lorem</div>
                                <div>Lorem ipsum </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>



<script>
    $(function() {
        var date;
        var wa = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
        for (var i = 0; i <= 10; i++) {
            date = new Date();
            date.setDate(date.getDate() + i);
            var day = $("<div>", {
                class: "dates",
                id: "day-" + i
            }).appendTo($(".date .days"));
            if (i == 0) {
                day.addClass("today");
            }
            var dNum = date.getDate();
            day.html((dNum < 10 ? "0" + dNum : dNum));
            if (i == 0) {
                $("<span>").html("Today").appendTo(day);
            } else if (i == 1) {
                $("<span>").html("Tom").appendTo(day);
            } else {
                $("<span>").html(wa[date.getDay()]).appendTo(day);
            }
        }
    });
</script>

<?= $this->endSection(); ?>