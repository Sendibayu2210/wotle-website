<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div id="users">
    <div class="container px-5">
        <div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-lime">Daftar User <span class="kategori-user">: Admin</span></div>

        <div class="d-lg-flex justify-content-between mb-5">
            <div class="choose-user">
                <input type="hidden" readonly name="" id="role-user">
                <div class="btn btn-lime btn-kategori-user admin" data-user="Admin" onclick="getUsers('admin','aktif')">Admin</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user driver" data-user="Driver" onclick="getUsers('driver','aktif')">Driver</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user customer" data-user="Customer" onclick="getUsers('customer','aktif')">Customer</div>
            </div>

            <div class="search-user d-flex">
                <input type="text" class="form-control" placeholder="cari user" id="input-cari-user">
                <button type="button" class="btn btn-lime ms-2 btn-cari-user"><i class="fa-solid fa-search"></i></button>
            </div>
        </div>


        <div class="d-flex justify-content-center spinner">
            <div class="spinner-border text-lime m-5" role="status"><span class="visually-hidden">Loading...</span></div>
        </div>


        <input type="hidden" name="" id="input-status-user">
        <div class="status-user mb-4"> </div>
        <div class="row show-users"></div>

    </div>
</div>

<!-- Modal Detail User-->
<div class="modal fade" id="detailUser" tabindex="-1" aria-labelledby="detailUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailUserLabel">Detail User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="spinner-detail text-center">
                    <div class="spinner-border text-lime m-5" role="status"><span class="visually-hidden">Loading...</span></div>
                </div>
                <div class="detail-user hide">
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <div class="mb-3 text-center">Foto Profile</div>
                            <img src="" alt="" class="detail-foto-user max-width-300 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewGambar">
                        </div>
                        <div class="col-lg-5 ps-5">
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Nama</div>
                                <div class="col-8 detail-nama-user"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Username</div>
                                <div class="col-8 detail-username-user"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Role</div>
                                <div class="col-8 detail-role-user"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Kode Referal</div>
                                <div class="col-8 detail-kode_referal-user"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Tautan Referal</div>
                                <div class="col-8 detail-tautan_referal-user"></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mb-3">
                                <div class="col-4 text-muted">Status</div>
                                <div class="col-8 detail-status-user"></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4 text-muted">Point</div>
                                <div class="col-8 detail-point-user"></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4 text-muted">Plat Nomor</div>
                                <div class="col-8 detail-plat_nomor-user"></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4 text-muted">Tipe Kendaraan</div>
                                <div class="col-8 detail-tipe_kendaraan-user"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="change-status-user">
                                <input type="hidden" readonly id="detail-id-user">
                                <button type="button" data-kategori="aktif" class="btn btn-change-status-user btn-lime btn-aktifkan-user hide w-100">Aktifkan User</button>
                                <button type="button" data-kategori="ditangguhkan" class="btn btn-change-status-user btn-warning btn-tangguhkan-user hide mt-3 w-100">Tangguhkan User</button>
                                <button type="button" data-kategori="nonaktif" class="btn btn-change-status-user btn-danger btn-nonaktifkan-user hide mt-3 w-100">Nonaktifkan User</button>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="mb-3">KTP</div>
                            <img src="" alt="" class="detail-ktp-user max-width-300 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewGambar">

                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="mb-3">SIM</div>
                            <img src="" alt="" class="detail-sim-user max-width-300 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewGambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- modal view gambar -->
<!-- Modal -->
<div class="modal fade" id="viewGambar" tabindex="-1" aria-labelledby="viewGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewGambarLabel">Lihat Gambar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center kategori-gambar"></div>
                <div class="d-flex justify-content-center">
                    <img src="" alt="" class="view-img w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.btn-kategori-user').click(function() {
            $('.btn-kategori-user').removeClass('btn-lime').addClass('btn-outline-lime')
            $(this).removeClass('btn-outline-lime').addClass('btn-lime')
            let user = $(this).data('user');
            $('.kategori-user').html(': ' + user);
        })

        getUsers('admin', 'aktif');;
    })

    function getStatusUsers(status) {
        let role = $('#role-user').val();
        getUsers(role, status);
    }

    function getUsers(role, status, search = '') {
        $('.spinner').removeClass('hide').addClass('d-flex');
        $('.show-users, .status-user').html('');
        $('#role-user').val(role)
        let url = '';
        if (search == '') {
            url = '/getUsers/' + role;
        } else {
            url = '/search-users';
        }

        $.ajax({
            url: url,
            type: 'post',
            dataType: 'JSON',
            data: {
                role: role,
                status: status,
                search: search,
            },
            success: function(data) {
                $('.spinner').addClass('hide').removeClass('d-flex');
                $('.status-user').append(`
                    <div class="btn status-aktif btn-outline-lime btn-kategori-status" data-status="aktif" onclick="getStatusUsers('aktif')">aktif <small class="color-wotle">` + data.count_user_aktif + `</small></div>
                    <div class="btn status-nonaktif btn-outline-lime ms-3 btn-kategori-status" data-status="nonaktif" onclick="getStatusUsers('nonaktif')">nonaktif <small class="color-wotle">` + data.count_user_nonaktif + `</small></div>
                    <div class="btn status-ditangguhkan btn-outline-lime ms-3 btn-kategori-status" data-status="ditangguhkan" onclick="getStatusUsers('ditangguhkan')">ditangguhkan <small class="color-wotle">` + data.count_user_ditangguhkan + `</small></div>
                `);
                // remove duplicate
                var seen = {};
                $('.btn-kategori-status').each(function() {
                    var txt = $(this).text();
                    if (seen[txt])
                        $(this).remove();
                    else
                        seen[txt] = true;
                });
                // end remove                

                if (data.status == 'aktif') {
                    $('#input-status-user').val('aktif');
                    $('.status-aktif').removeClass('btn-outline-lime').addClass('btn-lime');
                }
                if (data.status == 'nonaktif') {
                    $('#input-status-user').val('nonaktif');
                    $('.status-nonaktif').removeClass('btn-outline-lime').addClass('btn-lime');
                }
                if (data.status == 'ditangguhkan') {
                    $('#input-status-user').val('ditangguhkan');
                    $('.status-ditangguhkan').removeClass('btn-outline-lime').addClass('btn-lime');
                }
                if (data.message == 'search_not_found') {
                    $(".show-users").html(`
                        <div class="d-flex justify-content-center message mt-4">
                            <div class="alert alert-warning w-100">data pencarian ` + search + ` tidak ditemukan</div>
                        </div>
                    `)
                }
                if (data.users.length <= 0) {
                    $('.show-users').html('');
                    $(".show-users").html(`
                        <div class="d-flex justify-content-center message mt-4">
                            <div class="alert alert-warning w-100">data ` + role + ` tidak ada</div>
                        </div>
                    `)
                } else {
                    $.each(data.users, function(index, result) {
                        $('.message').html('');
                        $('.show-users').append(`
                            <div class="col-lg-4 col-md-6 col-12 mb-4">                            
                                <div class="card cursor-pointer card-user" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#detailUser" data-id="` + result.id + `" data-nama="` + result.nama + `" data-foto="` + result.foto + `" data-ktp="` + result.ktp + `" data-username="` + result.username + `" data-role="` + result.role + `" data-status="` + result.status + `" data-referal="` + result.referal + `" data-tautan_referal="` + result.tautan_referal + `" data-point="` + result.point + `">
                                    <img src="/img/foto/` + result.foto + `" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="card-text">` + result.nama + `</div>
                                            <div class="card-text">` + result.status + `</div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        `);
                        $(".card-user").click(function() {
                            let id = $(this).data('id');
                            getDetailUser(id);
                        })

                        $('.detail-foto-user').click(function() {
                            let getImg = $(".detail-foto-user").attr('src');
                            $('.view-img').attr('src', getImg);
                        })
                        $('.detail-ktp-user').click(function() {
                            let getImg = $(".detail-ktp-user").attr('src');
                            $('.view-img').attr('src', getImg);
                        })
                        $('.detail-sim-user').click(function() {
                            let getImg = $(".detail-sim-user").attr('src');
                            $('.view-img').attr('src', getImg);
                        })
                        imgError();
                    })
                }
                $('title').html('Daftar Users - ' + role);
            }
        })
    }

    function getDetailUser(id) {
        $('.spinner-detail').removeClass('hide');
        $('.detail-user, .btn-tangguhkan-user, .btn-nonaktifkan-user').addClass('hide')
        $('.btn-aktifkan-user').html('').addClass("hide");
        $.ajax({
            url: "/user/" + id,
            type: 'post',
            dataType: 'json',
            success: function(result) {
                $('#detail-id-user').val(result.user.id);
                $('.spinner-detail').addClass('hide');
                $('.detail-user').removeClass('hide');
                $(".detail-nama-user").html(result.user.nama);
                $(".detail-username-user").html(result.user.username);
                $(".detail-role-user").html(result.user.role);
                $(".detail-kode_referal-user").html(result.user.referal);
                $(".detail-tautan_referal-user").html(result.user.tautan_referal);
                $(".detail-point-user").html(result.user.point);
                $(".detail-plat_nomor-user").html(result.user.plat_nomor);
                $(".detail-tipe_kendaraan-user").html(result.user.tipe_kendaraan);
                $('.detail-foto-user').attr('src', '/img/foto/' + result.user.foto)
                $('.detail-ktp-user').attr('src', '/img/ktp_driver/' + result.user.ktp)
                $('.detail-sim-user').attr('src', '/img/sim_driver/' + result.user.sim)
                let textColor = '';
                if (result.user.status != "aktif") {
                    textColor = 'text-danger';
                    $('.btn-aktifkan-user').html('Aktifkan Driver').removeClass('hide');
                } else {
                    textColor = 'text-lime';
                    $('.btn-aktifkan-user').addClass('hide');
                }
                $(".detail-status-user").html(result.user.status).addClass(textColor);
                if (result.user.status == 'aktif' && result.user.role != 'admin') {
                    $(".btn-tangguhkan-user,.btn-nonaktifkan-user").removeClass('hide')
                } else {
                    $(".btn-tangguhkan-user,.btn-nonaktifkan-user").addClass('hide')
                }
            }
        })
    }

    $('.btn-change-status-user').click(function() {
        $(this).html(`<div class="spinner-border text-white" role="status"><span class="visually-hidden">Loading...</span></div>`);
        let kategori = $(this).data('kategori');
        let id = $('#detail-id-user').val();
        $.ajax({
            url: '/change-status',
            type: 'post',
            dataType: 'json',
            data: {
                id: id,
                status: kategori,
            },
            success: function(data) {
                $('.btn-kategori-user.' + data.role).click();
                $('.btn-aktifkan-user').html('Aktifkan User');
                $('.btn-tangguhkan-user').html('Tangguhkan User');
                $('.btn-nonaktifkan-user').html('Nonaktifkan User');

                $('#detailUser').modal('hide');
            }
        })
    })

    // search user
    $('#input-cari-user').keypress(function(e) {
        let search = $('#input-cari-user').val();
        let role = $('#role-user').val();
        let status = $('#input-status-user').val();
        if (e.which == 13) {
            getUsers(role, status, search);
        }
    })
    $('.btn-cari-user').click(function() {
        let search = $('#input-cari-user').val();
        let role = $('#role-user').val();
        let status = $('#input-status-user').val();
        getUsers(role, status, search);
    })
</script>

<?= $this->endSection(); ?>