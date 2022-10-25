<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div id="users">
    <div class="container px-5">
        <div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-lime">Daftar User <span class="kategori-user">: Admin</span></div>

        <div class="d-lg-flex justify-content-between mb-5">
            <div class="choose-user">
                <div class="btn btn-lime btn-kategori-user" data-user="Admin" onclick="getUsers('admin')">Admin</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user" data-user="Driver" onclick="getUsers('driver')">Driver</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user" data-user="Customer" onclick="getUsers('customer')">Customer</div>
            </div>

            <div class="search-user d-flex">
                <input type="text" class="form-control" placeholder="cari user">
                <button type="button" class="btn btn-lime ms-2"><i class="fa-solid fa-search"></i></button>
            </div>
        </div>

        <div class="d-flex justify-content-center spinner">
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div class="row show-users">
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
        getUsers('admin');
    })

    function getUsers(role) {
        $('.spinner').removeClass('hide').addClass('d-flex');
        $('.show-users').html('');
        $.ajax({
            url: '/getUsers/' + role,
            type: 'post',
            dataType: 'JSON',
            success: function(data) {
                $('.spinner').addClass('hide').removeClass('d-flex');
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
                                <div class="card" style="width: 18rem;">
                                    <img src="` + result.foto + `" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="card-text">` + result.nama + `</div>
                                    </div>
                                </div>
                            </div>
                        `);
                        imgError();
                    })
                }
                $('title').html('Daftar Users - ' + role);

            }
        })
    }
</script>

<?= $this->endSection(); ?>