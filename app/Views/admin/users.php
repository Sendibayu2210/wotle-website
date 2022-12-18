<?= $this->extend('layout/template-admin'); ?>
<?= $this->section('content'); ?>

<div id="users">
    <div class="container px-5">
        <div class="h3 mt-5 mb-4 fw-bold pb-3 border-bottom text-wotle">Daftar User <span class="kategori-user"></span></div>
        
        <input type="hidden" readonly name="" id="role-user">        
        <input type="hidden" readonly name="" id="status-user">        
        <div class="row choose-user mb-4"></div>          

        <div class="d-lg-flex justify-content-between mb-3 border-bottom">
            <div class="d-flex">
                <div class="status-user me-3 cursor-pointer active" data-status="semua">Semua</div>
                <div class="status-user me-3 cursor-pointer" data-status="aktif">Aktif</div>
                <div class="status-user me-3 cursor-pointer" data-status="nonaktif">Nonaktif</div>
                <div class="status-user me-3 cursor-pointer" data-status="ditangguhkan">Ditangguhkan</div>
            </div>
            <div class="search-user d-flex">
                <input type="text" class="form-control border-top-0 border-end-0 border-start-0 br-0 shadow-none bg-transparent border-bottom-wotle" placeholder="cari user" id="input-cari-user">
                <button type="button" class="btn br-0 text-wotle border-top-0 border-end-0 border-start-0 border-bottom-wotle btn-remove-input hide"><i class="fa-solid fa-close"></i></button>
                <button type="button" class="btn br-0 text-wotle border-top-0 border-end-0 border-start-0 border-bottom-wotle btn-cari-user"><i class="fa-solid fa-search"></i></button>
            </div>
        </div>

        <div class="d-flex justify-content-center spinner">
            <div class="spinner-border text-wotle m-5" role="status"><span class="visually-hidden">Loading...</span></div>
        </div>
        <input type="hidden" name="" id="input-status-user" value="semua">
        <div class="message-user"></div>
           <div class="card border-0 br-15 mb-5">
                <div class="table-responsive card-body table-user hide">
                <table class="table">
                    <thead class="small">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>                        
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="list-user text-muted small"></tbody>
                </table>
            </div>
         </div>
    </div>
</div>

<!-- Modal Detail User-->
<div class="modal fade" id="detail-user" tabindex="-1" aria-labelledby="detail-userLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detail-userLabel">Profile Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="spinner-detail-user text-center hide">
                    <div class="spinner-border text-wotle m-5" role="status"><span class="visually-hidden">Loading...</span></div>
                </div>
                <div class="modal-detail-user ">
                    <div class="card border-0 shadow br-20 w-lg-75 mx-auto">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-3 mb-4">
                                    <div class="mb-3 text-center">Profile</div>
                                    <input type="hidden" id="id-user">
                                    <div class="w-xy-100 mx-auto">
                                        <img src="/wotle_assets/img/foto/foto.webp" alt="" class="detail-foto-user object-fit-cover br-50 cursor-pointer" data-bs-toggle="modal" data-bs-target="#viewGambar">
                                    </div>
                                    <div class="detail-nama-user mt-3 fw-bold text-center"></div>
                                    <div class="detail-email-user text-muted text-center"></div>
                                    <div class="detail-status-user text-center mt-3"></div>

                                </div>
                                <div class="col-lg-8 ps-5">
                                    <div class="row pb-3 mt-3 border-bottom ">
                                        <div class="col-lg-6 mb-2 d-flex">
                                            <div class="text-dark me-2">No HP</div>
                                            <div class="text-muted detail-no_hp-user"></div>
                                        </div>
                                        <div class="col-lg-6 mb-2 d-flex">
                                            <div class="text-dark me-2">Kontak Darurat</div>
                                            <div class="text-muted detail-kontak_darurat-user"></div>
                                        </div>
                                    </div>
                                    <div class="row pb-3 mt-3 border-bottom ">
                                        <div class="col-lg-12 mb-2 d-flex">
                                            <div class="text-dark me-2">Alamat</div>
                                            <div class="text-muted detail-alamat-user"></div>
                                        </div>
                                    </div>
                                    <div class="row pb-3 mt-3 border-bottom ">
                                        <div class="col-lg-6 mb-2 d-flex">
                                            <div class="text-dark me-2">Tanggal Lahir</div>
                                            <div class="text-muted detail-ttl-user"></div>
                                        </div>
                                         <div class="col-lg-6 mb-2 d-flex">
                                            <div class="text-dark me-2">Tanggal Daftar</div>
                                            <div class="text-muted detail-created-user"></div>
                                        </div>
                                    </div>                                                
                                    <div class="row pb-3 mt-3 border-bottom">
                                        <div class="col-lg-2 mb-2 d-flex">
                                            <div class="text-dark me-2">Status</div>                                            
                                        </div>
                                         <div class="col-lg-10 mb-2 d-flex">
                                            <div class="me-3 d-flex">
                                                <button class="btn btn-light btn-sm btn-ubah-status" data-status="aktif">Aktifkan</button>
                                            </div>
                                            <div class="me-3 d-flex">
                                                <button class="btn btn-light btn-sm btn-ubah-status" data-status="nonaktif">Nonaktif</button>                                            
                                            </div>
                                            <div class="me-3 d-flex">
                                                <button class="btn btn-light btn-sm btn-ubah-status" data-status="ditangguhkan">Tangguhkan</button>                                                                                            
                                            </div>
                                        </div>
                                    </div>                                                
                                </div>                      
                            </div>   
                        </div>
                    </div>                        
                    <div class="card border-0 shadow br-20 w-lg-75 mx-auto mt-4">
                        <div class="card-body">
                            <div class="mb-3 h4">Berkas Driver</div>
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6 col-6 mb-3">
                                    <div class="mb-3">KTP</div>
                                    <div><img src="" data-bs-toggle="modal" data-bs-target="#viewGambar" alt="" class="img-ktp max-width-200 img-berkas-driver cursor-pointer br-15"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-3">
                                    <div class="mb-3">STNK</div>
                                    <div><img src="" data-bs-toggle="modal" data-bs-target="#viewGambar" alt="" class="img-stnk max-width-200 img-berkas-driver cursor-pointer br-15"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-3">
                                    <div class="mb-3">SIM</div>
                                    <div><img src="" data-bs-toggle="modal" data-bs-target="#viewGambar" alt="" class="img-sim max-width-200 img-berkas-driver cursor-pointer br-15"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6 mb-3">
                                    <div class="mb-3">SKCK</div>
                                    <div><img src="" data-bs-toggle="modal" data-bs-target="#viewGambar" alt="" class="img-skck max-width-200 img-berkas-driver cursor-pointer br-15"></div>
                                </div>
                            </div>
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
<div class="modal fade" id="viewGambar" tabindex="-1" aria-labelledby="viewGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {      
        getUsers('driver', 'semua');        
        getKategoriRole();        
    });

    $(document).ajaxComplete(function(){        
        let getRole = $("#role-user").val();        
        $(".btn-kategori-user."+getRole).addClass('active');
        $('.kategori-user').html(': ' + getRole);                 
    });

    function getStatusUsers(status) {
        let role = $('#role-user').val();
        getUsers(role, 'semua');
    }

    function getKategoriRole(){
        $.ajax({
            url : 'https://apiwotleweb.wotle.org/groupUsers',
            type : 'get',
            dataType : 'json',
            success: function(result){                        
                $.each(result.group_user, function(index, role){                    
                    $(".choose-user").append(`
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <div class="card btn-kategori-user cursor-pointer `+role.role+`" data-role="`+role.role+`" data-id_role="`+role.role+`">
                                <div class="card-body">
                                    <div class="title-kategori-user text-capitalize">`+role.role+`</div>
                                    <div class="jumlah-user fw-bold">`+role.count_user+`</div>
                                </div>
                            </div>
                        </div>
                    `);
                })

                $('.btn-kategori-user').click(function() {
                    $('.table-user, .message-user').addClass('hide');
                    $('.btn-kategori-user').removeClass('active');
                    $(this).addClass('active');
                    let role = $(this).data('role');
                    let idRole = $(this).data('id_role');
                    let status = $('#input-status-user').val()
                    let search = $('#input-cari-user').val();
                    $('.kategori-user').html(': ' + role);
                    $("#id-role").val(idRole);
                    getUsers(role,status, search);            
                })

                $('.status-user').click(function(){
                    $('.table-user, .message-user').addClass('hide');
                    $('.status-user').removeClass('active');
                    $(this).addClass('active');
                    let getStatus = $(this).data('status');
                    let getRole = $("#role-user").val();
                    $('#input-status-user').val(getStatus)
                    let search = $('#input-cari-user').val();
                    getUsers(getRole, getStatus,search);
                })
            }
        })
    }

    function getUsers(role, status, search = '') {
        $(".list-user").html('');
        $('.spinner').removeClass('hide').addClass('d-flex');        
        $('#role-user').val(role)
        // let id_role = $('#id-role').val();
        let url = 'https://apiwotleweb.wotle.org/getUsers';     
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'JSON',
            data: {
                // id_role : id_role,
                role: role,
                status: status,
                search: search,
            },
            success: function(result) {                  
                $('.spinner').addClass('hide').removeClass('d-flex');  
                $('title').html('Daftar Users - ' + role);                
                if(result.users.length <= 0){                    
                    $(".message-user").html(`<div class="alert alert-warning mt-5 text-center w-100">Ooops! Data tidak tersedia</div>`).removeClass('hide')                                    
                }else{                                      
                    $(".table-user").removeClass('hide')     
                    $(".message-user").addClass('hide')                    
                    $.each(result.users, function(index, user){   
                        let btnbg = 'btn-danger';
                        let status = 'Nonaktif'
                        if(user.status == 'aktif'){
                            btnbg = 'btn-lime';
                            status = 'Aktif'
                        }else if(user.status == 'ditangguhkan'){
                            status = "ditangguhkan";
                        }
                        else if(user.status == 'register'){
                            status = "pendaftaran";
                        }

                        $('.list-user').append(`
                             <tr class="cursor-pointer hover-wotle detail-user" data-id="`+user.id+`" data-bs-toggle="modal" data-bs-target="#detail-user">
                                <td>`+(index+1)+`</td>
                                <td>`+user.nama+`</td>
                                <td>`+user.email+`</td>
                                <td>`+user.no_hp+`</td>                            
                                <td class="text-center"><div class="btn btn-sm `+btnbg+` small">`+status+`</div></td>
                             </tr>
                        `);
                    }) 

                    $('.detail-user').click(function(){
                        $('.spinner-detail-user').removeClass("hide");
                        $(".modal-detail-user").addClass('hide')
                        let id = $(this).data('id');        
                        getUser(id);
                    })                   
                }
            }
        })
    }

    //  ambil 1 user saja
    function getUser(id){
        // jika data sudah terpanggil
        $.ajax({
            url : 'https://apiwotleweb.wotle.org/getUser',
            type : 'post',
            dataType : 'json',
            data : {
                id : id,
            },
            success : function(result){                
                if(result.code == '200'){     
                    $('#id-user').val(id);
                    $('.detail-nama-user').html(result.user.nama);
                    $('.detail-email-user').html(result.user.email);
                    $('.detail-no_hp-user').html(result.user.no_hp);
                    $(".detail-kontak_darurat-user").html(result.user.no_darurat);
                    $(".detail-alamat-user").html(result.user.alamat);                    
                    $(".detail-ttl-user").html(result.user.ttl); 
                    $(".detail-created-user").html(result.user.created_at); 
                    $('.img-ktp').attr('src',result.user.ktp);
                    $('.img-stnk').attr('src',result.user.stnk);
                    $('.img-sim').attr('src',result.user.sim);
                    $('.img-skck').attr('src',result.user.skck);

                    $(".detail-status-user").html(`<button class="btn btn-wotle btn-sm w-100">`+result.user.status+`</button>`);                    
                    $('.spinner-detail-user').addClass("hide");
                    $(".modal-detail-user").removeClass('hide')


                    $(".img-berkas-driver").click(function(){
                        let getImg  = $(this).attr('src');
                        $(".view-img").attr('src',getImg);
                    })


                    $('.btn-ubah-status').click(function(){
                        let status = $(this).data('status'); 
                        let id = $('#id-user').val();                                               
                        $('.detail-status-user').html(`<div class="spinner-border text-wotle m-5" role="status"><span class="visually-hidden">Loading...</span></div>`);
                        $.ajax({
                            url : 'https://apiwotleweb.wotle.org/changeStatus',
                            type : 'post',
                            dataType : 'json',
                            data : {
                                id : id,
                                status : status,
                            },
                            success : function(result){                                
                                getUser(result.id);                                
                            }

                        })

                    })
                }
            }
        })
    }

    //  $(window).on('load', function() {
    //     $('#detail-user').modal('show');
    // });
    // search user
    $("#input-cari-user").click(function(){
        $('.btn-remove-input').removeClass('hide');
    })
    $(".btn-remove-input").click(function(){
        $("#input-cari-user").val('');        
        $('.message-user, .btn-remove-input').addClass('hide');
        $('.table-user').removeClass('hide');
        let search = $('#input-cari-user').val();
        let role = $('#role-user').val();
        let status = $('#input-status-user').val();        
        getUsers(role, status, search);        

    })
    $('#input-cari-user').keypress(function(e) {
        let search = $('#input-cari-user').val();
        let role = $('#role-user').val();
        let status = $('#input-status-user').val();
        if (e.which == 13) {
            $('.table-user').addClass('hide')
            getUsers(role, status, search);
        }
    })     
    $('.btn-cari-user').click(function() {
        let search = $('#input-cari-user').val();
        let role = $('#role-user').val();
        let status = $('#input-status-user').val();
        $('.table-user').addClass('hide')
        getUsers(role, status, search);
    })
</script>

<?= $this->endSection(); ?>