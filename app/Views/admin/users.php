<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div id="users">
    <div class="container px-5">
        <div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-lime">Daftar User <span class="kategori-user">: Admin</span></div>

        <div class="d-flex justify-content-between mb-5">
            <div class="choose-user">
                <div class="btn btn-lime btn-kategori-user" data-user="Admin">Admin</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user" data-user="Driver">Driver</div>
                <div class="btn btn-outline-lime ms-3 btn-kategori-user" data-user="Customer">Customer</div>
            </div>

            <div class="search-user d-flex">
                <input type="text" class="form-control" placeholder="cari user">
                <button type="button" class="btn btn-lime ms-2"><i class="fa-solid fa-search"></i></button>
            </div>
        </div>

    <div class="row">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    </div>
</div>

<script>
    $(document).ready(function(){
      $('.btn-kategori-user').click(function(){
          $('.btn-kategori-user').removeClass('btn-lime').addClass('btn-outline-lime')
          $(this).removeClass('btn-outline-lime').addClass('btn-lime')
        let user = $(this).data('user');
        $('.kategori-user').html(': '+user);        
      })
    })
</script>

<?= $this->endSection(); ?>