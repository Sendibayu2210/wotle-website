// Login
  $("#show_password").change(function() {
        if (this.checked) {
            $('#password').attr('type', 'text').focus();
        } else {
            $('#password').attr('type', 'password').focus();
        }
    });

    $('.btn-login').click(function() {
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
                    if (result.message == 'login-success') {                        
                        $('.btn-login').html('login berhasil');
                        window.location.href = 'dashboard';
                    }
                }
            })
        }

    })