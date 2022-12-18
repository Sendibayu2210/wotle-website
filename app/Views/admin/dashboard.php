<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>


<div class="bg-content container py-4 px-4 dashboard">
    <div class="d-lg-flex justify-content-between pb-2 border-bottom">
        <div class="mb-3">
            <div class="h4 fw-bold">Halo, <span class="nama-user"></span></div>
            <div>Selamat datang</div>
        </div>
        <div class="col-lg-6 mb-3">
            <form action="" method="get" class="d-flex">
                <input type="text" class="form-control border-0" placeholder="Cari kota tujuan">
                <button class="btn btn-wotle ms-2">Cari</button>
            </form>
        </div>
        <!-- <div class="notification shadow d-flex justify-content-center mb-3">
            <div class="pt-2"><i class="fa-regular fa-bell h5 text-secondary"></i></div>
        </div> -->
    </div>

    <div class="mt-4">
        <!-- <div class="h5 fw-bold mb-3">Discover World</div>
        <div class="menu d-flex justify-content-between ">
            <div>
                <a href="#" class="me-3 active">Popular Places</a>
                <a href="#" class="me-3">Recomended</a>
                <a href="#" class="me-3">Near Me</a>
            </div>            
        </div> -->


        <!-- page list destination -->
        <div class="overflow-hidden pb-5 mb-5 mt-4">
            <div class="d-flex justify-content-between">
                <div class="h5 mb-5 fw-bold">Daftar Kota</div>                
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

        <!-- <div class="mt-4">
            <div class="row group-destinasi"></div>
        </div> -->

        <div class="mt-5 mb-3 event overflow-auto">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="h5 fw-bold">Lihat Tanggal Perjalanan</div>
                <a href="#review">Lihat Semua<i class="fa-solid fa-angle-right ms-2"></i></a>
            </div>
            <div class="date">
                <div class="days d-flex justify-content-between"></div>
            </div>

            <!-- <div class="mt-5">
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
                                                    <div class="card-text"><small class="text-wotle">more</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div> -->
        </div>

        <!-- Client Review -->
        <div id="ulasan" class="client-review  mt-5 pb-5">
            <div class="">
                <!-- <div class="text-wotle"></div> -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h5 fw-bold py-2 pb-4 text-capitalize">Ulasan pengguna</div>
                    <a href="#review">Lihat Semua<i class="fa-solid fa-angle-right ms-2"></i></a>
                </div>
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
    </div>    
</div>



<script>
    $('.landing-list-destination').flickity({          
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        freeScroll: true,
    });

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

    $.ajax({        
        url: 'https://apiwotleweb.wotle.org/getUser',
        type: 'post',
        dataType: 'json',
        data: {
            email: '<?= session()->get('email_wotle'); ?>',
        },
        success: function(result) {
            $('.nama-user').html(result.user.nama);            
        }
    })

    groupDestinasi();
    function groupDestinasi(){
        $.ajax({
            url : '/destination-group',
            type : 'get',
            dataType : 'json',
            success : function(result){
                $.each(result.destinasi, function(index, destinasi){
                    $('.group-destinasi').append(`
                        <div class="col-lg-4">
                            <div class="card card-img border-0">
                                <img src="https://i.pinimg.com/236x/f5/af/d1/f5afd19a6f162e5b8a86a916b6479a77.jpg" class="card-img-top" alt="...">
                                <div class="d-flex justify-content-center">
                                    <div class="card-body-content">
                                        <div class="fw-bold text-capitalize">`+destinasi.tujuan_akhir+`</div>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div>`+destinasi.tujuan_akhir+` adalah kota lorem ipsum</div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="circle shadow bg-wotle-second">
                                                    <i class="fa-solid fa-arrow-right text-white pt-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                })
            }
        })
    }
</script>

<?= $this->endSection(); ?>