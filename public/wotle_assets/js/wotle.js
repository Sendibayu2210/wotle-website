// ==================== HOMEPAGE ==========================
$('a.nav-link').click(function(){
    $('a.nav-link').removeClass('active');
    $(this).addClass('active');
})
// ==================== END HOMEPAGE ==========================

// ==================== LOGIN ==========================
    $("#show_password").change(function() {
        if (this.checked) {
            $('#password').attr('type', 'text').focus();
        } else {
            $('#password').attr('type', 'password').focus();
        }
    });
    $('#username, #password').on('keypress', function(e) {
        if (e.which == 13) {
            $('.btn-login').click();
        }
    });

    $('.btn-login').click(function() {
        $('.message-login').html('');
        $(this).html(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> memeriksa`)
        $('#username, #password').removeClass('is-invalid');
        $('.invalid-feedback').html('');
        let username = $('#username').val();
        let password = $('#password').val();
        let csrf = $('[name="csrf_test_name"]').val();
        if (username == '') {
            $(this).html('login');
            $('#username').addClass('is-invalid').focus();
            $('.invalid-feedback.username').html('username harus diisi');            
        } else if (password == '') {
            $(this).html('login');
            $('#password').addClass('is-invalid').focus();
            $('.invalid-feedback.password').html('password harus diisi');
        } else {
            $.ajax({                
                url : 'https://apiwotleweb.wotle.org/login_validation',
                type: 'POST',
                dataType: "json",
                data: {
                    email: username,
                    password: password,                    
                },
                success: function(result) {                
                    let btnLogin = () => { $('.btn-login').html('login').css('color','#fff');}
                    if (result.message == 'email tidak ditemukan') {
                        $('#username').addClass('is-invalid').val(result.email).focus();
                        $('.invalid-feedback.username').html(result.message);
                        $('#password').val('')
                        btnLogin();
                    }
                    if (result.message == 'password salah') {
                        $('#password').addClass('is-invalid').focus();
                        $('.invalid-feedback.password').html(result.message);
                        btnLogin();
                    }
                    if (result.message == 'akun-nonaktif') {
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-warning">Akun anda belum divalidasi. mohon untuk menunggu 1x24 jam</div>`);
                        btnLogin();                        
                    }
                    if (result.message == 'akun ditangguhkan') {
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-danger">Akun anda ditangguhkan. info detail silahkan hubungi CS melalui email <span class="color-wotle">cs.wotle.org</span></div>`);
                        btnLogin();
                    }
                    if (result.message == 'login-success') {                        
                        $('.btn-login').html('login berhasil');
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-success">Login Berhasil</div>`);
                        $.ajax({
                            url : '/valid-login',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                e : result.data.email,
                                r : result.data.role,
                            },
                            success : function(data){
                                if(data.message == 'valid'){
                                    window.location.href = data.redirect;
                                }
                            }
                        })                        
                    }
                }
            })
        }

    })


    // ==================== REGISTER =========================
    $('.register label.wajib').append(`<span class='color-wotle ms-2 small'>*<sup> wajib diisi</sup></span>`);   
    $('.register input').keypress(function(e){
        if(e.which == 13){
            $('.btn-register').click();
        }
    })

    $(".btn-register").click(function() {
        $('input').removeClass('is-invalid');
        $('.invalid-feedback').html('')
        let nama = $("#nama").val();
        let email = $("#email").val();
        let password = $("#password").val();        
        let no_hp = $("#no_hp").val();
        let csrf = $('[name="csrf_test_name"]').val();
        // let maxSize = 1024 * 3; // untuk menentukan maximmal file yang boleh di upload       
        if (nama == '') {
            $('#nama').addClass('is-invalid').focus();
            $('.invalid-feedback.nama').html('Nama lengkap harus diisi');
        } else if (email == '') {
            $('#email').addClass('is-invalid').focus();
            $('.invalid-feedback.email').html('Email harus diisi');
        } else if (no_hp == '') {
            $('#no_hp').addClass('is-invalid').focus();
            $('.invalid-feedback.no_hp').html('No HP harus diisi');
        }  else if (password == '') {
            $('#password').addClass('is-invalid').focus();
            $('.invalid-feedback.password').html('Password harus diisi');
        } else {
            $(this).html(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> memeriksa`).css('color', '#fff');
            $.ajax({
                url : 'https://apiwotleweb.wotle.org/register',
                // url : 'http://localhost/apiwotle2/register',
                type : 'POST',
                dataType : 'json',
                data : {
                    nama : nama,
                    email : email,
                    no_hp : no_hp,
                    password : password,
                },
                success: function(result) {                    
                    if(result.code == '200'){   
                        console.log(result)                     
                        $('.btn-register').html('pendaftaran berhasil');
                        $('input').val('');                        
                        sendEmail(result.email, result.token);
                        $(".message-register").html(`<div class="alert alert-success">Pendaftaran berhasil, Silahkan cek pesan email untuk verifikasi data diri!</div>`)
                        setTimeout(function(){
                            $('.btn-register').html('Daftar').css('color', '#fff');
                        },3000);
                    }else{
                        $('.btn-register').html('daftar').css('color', '#fff');
                        if (result.message == 'email-has-been-used') 
                        {
                            $('#email').addClass('is-invalid').focus();
                            $(".invalid-feedback.email").html('gunakan email/username lain');
                        }                      
                    }                
                }
            })
        }
    })

    function sendEmail(email, token)
    {
        $.ajax({
            url : '/send-email',
            type : 'post',
            dataType : 'json',
            data : {
                email : email,
                token : token,
            },
            success : function(result){                
            }        
        })
    }

    function cekSizeFile(name) {
        $('#' + name).removeClass('is-invalid');
        $('.invalid-feedback.' + name).html('');
        let sizeFile = $('#' + name)[0].files[0].size;
        let ceil = Math.ceil(sizeFile / 1024);
        if (ceil > (1024 * 3)) {
            $('#' + name).addClass('is-invalid');
            $('.invalid-feedback.' + name).html('ukuran file harus dibawah 3 mb');
        }

        let sampul = document.querySelector('#' + name);
        let imgPreview = document.querySelector('.image-preview-' + name);
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            $('.card-preview-' + name).removeClass('hide')
            imgPreview.src = e.target.result;
        }
    }





    // Driver
    $('.pilih-file-dokumen-driver').click(function(){
        let kategori = $(this).data('kategori');
        $('#file_'+kategori).click();
        $('#file_'+kategori).change(function(){
            let imgPreview = '.preview-image-'+kategori;            
            let imageLabel = '.label-image-'+kategori;            
            let fileImg = '#file_'+kategori;                                    
            imagePreview(fileImg,imgPreview,imageLabel);
        })
    })

     // Get User Driver
    function getDriver(email){
        $.ajax({
            url : 'https://apiwotleweb.wotle.org/profile',
            type : 'post',
            dataType : 'json',
            data : {
                email : email,
            },
            success: function(result){
                if(result.code == '200'){
                    $.each(result.profile, function(i, profile){                
                        $('.nama-user').html(profile.nama);
                        $('#id-user, .input-id-user').val(profile.id);
                        if(profile.ktp == '' || profile.sim == '' || profile.stnk == '' || profile.skck == '' || profile.ttl == '' || profile.alamat == '' || profile.no_darurat == '' || profile.tipe_kendaraan == '' || profile.plat_nomor == ''){
                            $('.lengkapi-data').removeClass('hide');

                            if(profile.tipe_kendaraan != ''){
                                $('#tipe_kendaraan').val(profile.tipe_kendaraan).addClass('is-valid');
                            }
                            if(profile.plat_nomor != ''){                                
                                $('#plat_nomor').val(profile.plat_nomor).addClass('is-valid');
                            }
                            if(profile.no_darurat != ''){                                
                                $('#no_darurat').val(profile.no_darurat).addClass('is-valid');                            
                            }                            
                            if(profile.alamat != ''){                                
                                $('#alamat').val(profile.alamat).addClass('is-valid');                            
                            }                            
                            if(profile.ttl != ''){                                
                                $('#ttl').val(profile.ttl).addClass('is-valid');                            
                            }                            
                        }else{
                            $('.profile-dashboard').removeClass('hide');                            
                        }                        
                        if(profile.status == 'aktif'){                  
                            $('.status-user').html('Status : Aktif <i class="fa-solid fa-check ms-2"></i>').addClass("text-wotle");
                        }else{
                            $('.status-user').html('Status : NonAktif').addClass("text-danger");                    
                        }
                    })
                                    
                }           
            }
        })
    }

    function imagePreview(fileImg,imgPreview,imageLabel) {        
        let fileImage = document.querySelector(fileImg);
        let imagePreview = document.querySelector(imgPreview);
        let label = document.querySelector(imageLabel);

        label.textContent = fileImage.files[0].name;
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(fileImage.files[0]);
        fileSampul.onload = function(e) {
            imagePreview.src = e.target.result;
        }
    }


    // update Kendaraan
    function updateKendaraan(idDriver, merkMobil, platNomor){ 
        $('.btn-simpan-kendaraan').html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);       
        $.ajax({
            url : 'https://apiwotleweb.wotle.org/updateKendaraan',
            type : 'post',
            dataType : 'json',
            data : {
                id : idDriver,
                merk : merkMobil,
                plat : platNomor,
            },
            success : function(result){             
                if(result.code == '200'){
                    let halaman = $('#kategori-halaman').val();

                    if(halaman == 'profile'){                        
                        $('.btn-simpan-kendaraan').html('Simpan').addClass('hide');
                        $('.merk-mobil, .plat-nomor, .btn-edit-kendaraan').removeClass('hide')  
                        $(".btn-edit-kendaraan").html("Data berhasil diubah").removeClass('btn-wotle').addClass("btn-warning");
                        $("#input-merk-mobil,#input-plat-nomor").parent().addClass('hide');
                        $.each(result.kendaraan, function(i, kendaraan){                                        
                            $('.merk-mobil').html(": "+kendaraan.tipe_kendaraan);
                            $('#input-merk-mobil').val(kendaraan.tipe_kendaraan);
                            $('.plat-nomor').html(": "+kendaraan.plat_nomor);
                            $('#input-plat-nomor').val(kendaraan.plat_nomor);                                           
                        })
                        setTimeout(function(){
                            $(".btn-edit-kendaraan").html("Edit data kendaraan").removeClass('btn-warning').addClass('btn-wotle');
                        },4000);
                    }
                    if (halaman == 'dashboard-driver'){
                        $('.btn-simpan-kendaraan').html('Data berhasil disimpan').addClass('btn-warning').removeClass('btn-wotle');
                        $.each(result.kendaraan, function(i, kendaraan){
                            $('#plat_nomor').val(kendaraan.plat_nomor);
                            $('#tipe_kendaraan').val(kendaraan.tipe_kendaraan);
                        })                        
                        setTimeout(function(){
                            $('.btn-simpan-kendaraan').html('Simpan data kendaraan').removeClass('btn-warning').addClass('btn-wotle');
                        },3000)
                    }

                }
            }
        })
    }

    function updateProfile(email, nama, ttl, alamat, no_darurat){
        $('.btn-simpan-profile').html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);       
        let halaman = $('#kategori-halaman').val();
        $.ajax({
            url : 'https://apiwotleweb.wotle.org/updateProfile',
            type : 'post',
            dataType : 'json',
            data : {
                nama : nama,                
                email : email,
                ttl : ttl,              
                alamat : alamat,
                no_darurat : no_darurat,
                halaman : halaman,
            },
            success: function(result){
                let halaman = $('#kategori-halaman').val();
                if (halaman == 'dashboard-driver'){
                    $('.btn-simpan-profile').html('Data berhasil disimpan').addClass('btn-warning').removeClass('btn-wotle');
                    let email = $('#email').val();                    
                    getDriver(email);               
                    setTimeout(function(){
                        $('.btn-simpan-profile').html('Simpan data diri').removeClass('btn-warning').addClass('btn-wotle');
                    },3000)
                }
            }
        })
    }


   