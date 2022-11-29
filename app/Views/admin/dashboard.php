<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>


<div class="bg-content container py-4 px-4 dashboard">
    <div class="d-lg-flex justify-content-between">
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
        <div class="notification shadow d-flex justify-content-center mb-3">
            <div class="pt-2"><i class="fa-regular fa-bell h5 text-secondary"></i></div>
        </div>
    </div>



    <div class="mt-4">
        <div class="h5 fw-bold mb-3">Discover World</div>
        <div class="menu d-flex justify-content-between ">
            <div>
                <a href="#" class="me-3 active">Popular Places</a>
                <a href="#" class="me-3">Recomended</a>
                <a href="#" class="me-3">Near Me</a>
            </div>
            <div>
                <a href="" class="text-wotle">view all <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="mt-4">
            <div class="row group-destinasi"></div>
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
        </div>
    </div>
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