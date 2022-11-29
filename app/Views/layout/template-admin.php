<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <title><?= $title; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/wotle_assets/img/logo/logo_wotle.png" />

    <script src="/wotle_assets/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/wotle_assets/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wotle_assets/css/style.css">
</head>

<body>       

    <?= $this->include('layout/sidebar-admin'); ?>

    <div id="konten-admin">       
         <nav class="navbar navbar-expand-lg bg-white shadow py-3 hide">
          <div class="container d-flex align-items-center">
            <button class="btn cursor-pointer btn-show-sidebar"><i class="fa-solid fa-bars cursor-pointer"></i></button>            
            <button class="btn cursor-pointer btn-hide-sidebar mt-5 hide"><i class="fa-solid fa-xmark"></i></button>            
          </div>
        </nav>

        <?= $this->renderSection('content'); ?>
    </div>

    <script>        
        $(document).ready(function(){
            $('.btn-show-sidebar').click(function(){
                $('section#sidebar').addClass('active');
                $(".btn-hide-sidebar").removeClass('hide')
                $(this).addClass('hide');
                $('.navbar').css('height','70px')
            })
            $(".btn-hide-sidebar").click(function(){    
                $('section#sidebar').removeClass('active');
                $(".btn-show-sidebar").removeClass('hide')
                $(this).addClass('hide');            
            })
        })
        function imgPreview() {
            $('.card-image-preview').removeClass('hide');
            let sampul = document.querySelector('#input-file');
            let imgPreview = document.querySelector('.img-preview');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);
            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function imgError() {
            $("img").bind("error", function() {
                $(this).attr("src", "/img/skeleton.gif");
            });
        }

      
    </script>
    <script src="/wotle_assets/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/wotle_assets/custom_vendor/fontawesome612/js/all.min.js"></script>

</body>

</html>