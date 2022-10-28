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
                url: '/cek-login',
                type: 'POST',
                dataType: "json",
                data: {
                    username: username,
                    password: password,
                    csrf_test_name: csrf,
                },
                success: function(result) {
                    let btnLogin = $('.btn-login').html('login').css('color','#fff');
                    if (result.message == 'email tidak ditemukan') {
                        $('#username').addClass('is-invalid').val(result.username).focus();
                        $('.invalid-feedback.username').html(result.message);
                        $('#password').val('')
                        btnLogin;
                    }
                    if (result.message == 'password salah') {
                        $('#password').addClass('is-invalid').focus();
                        $('.invalid-feedback.password').html(result.message);
                        btnLogin;
                    }
                    if (result.message == 'akun nonaktif') {
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-warning">Akun anda belum divalidasi. mohon untuk menunggu 1x24 jam</div>`);
                    }
                    if (result.message == 'akun ditangguhkan') {
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-danger">Akun anda ditangguhkan. info detail silahkan hubungi CS melalui email <span class="color-wotle">cs.wotle.org</span></div>`);
                        btnLogin;
                    }
                    if (result.message == 'login-success') {                        
                        $('.btn-login').html('login berhasil');
                        $('.message-login').removeClass("hide").html(`<div class="alert alert-success">Login Berhasil</div>`);
                        window.location.href = 'dashboard';
                    }
                }
            })
        }

    })


    // ==================== REGISTER =========================
    $('.register label.wajib').append(`<span class='color-wotle ms-2 small'>*<sup> wajib diisi</sup></span>`)    

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

    $(".btn-register").click(function() {
        $('input').removeClass('is-invalid');
        $('.invalid-feedback').html('')
        let nama = $("#nama").val();
        let email = $("#email").val();
        let password = $("#password").val();
        let plat_nomor = $("#plat_nomor").val();
        let tipe_kendaraan = $("#tipe_kendaraan").val();
        let ktp = $("#ktp").val();
        let sim = $("#sim").val();
        let foto = $("#foto").val();
        let csrf = $('[name="csrf_test_name"]').val();
        let maxSize = 1024 * 3; // untuk menentukan maximmal file yang boleh di upload       
        if (nama == '') {
            $('#nama').addClass('is-invalid').focus();
            $('.invalid-feedback.nama').html('nama harus diisi');
        } else if (email == '') {
            $('#email').addClass('is-invalid').focus();
            $('.invalid-feedback.email').html('email harus diisi');
        } else if (password == '') {
            $('#password').addClass('is-invalid').focus();
            $('.invalid-feedback.password').html('password harus diisi');
        } else if (plat_nomor == '') {
            $('#plat_nomor').addClass('is-invalid').focus();
            $('.invalid-feedback.plat_nomor').html('plat_nomor harus diisi');
        } else if (tipe_kendaraan == '') {
            $('#tipe_kendaraan').addClass('is-invalid').focus();
            $('.invalid-feedback.tipe_kendaraan').html('tipe_kendaraan harus diisi');
        } else if (ktp == '') {
            $('#ktp').addClass('is-invalid').focus();
            $('.invalid-feedback.ktp').html('ktp harus diisi');
        } else if (sim == '') {
            $('#sim').addClass('is-invalid').focus();
            $('.invalid-feedback.sim').html('sim harus diisi');
        } else if (foto == '') {
            $('#foto').addClass('is-invalid').focus();
            $('.invalid-feedback.foto').html('foto harus diisi');
        } else {
            $(this).html(`<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> memeriksa`).css('color', '#fff');
            $.ajax({
                url: '/cek-register',
                type: 'POST',
                dataType: 'json',
                data: {
                    email: email,
                },
                success: function(result) {
                    $('.btn-register').html('daftar').css('color', '#fff');
                    if (result.message == 'username ada') {
                        $('#email').addClass('is-invalid').focus();
                        $(".invalid-feedback.email").html('gunakan email/username lain');
                    }
                    if (result.message == 'validasi_register_success') {
                        $("#form-register").submit();
                        $('.btn-register').html('register berhasil');
                    }
                }
            })
        }
    })