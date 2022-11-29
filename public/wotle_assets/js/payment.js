$(".link-animate").html(`<link rel="stylesheet" href="/wotle_assets/css/animate.min.css"/>`);
let kategori = $("#payment-message").data('category');

$('#payment-message .card').css({
    'position':  'absolute',
    'z-index': '2',
})

if(kategori == 'finishpayment'){    
    $('body').css({'background':'#fefeff','overflow':'hidden'});
    setTimeout(function(){
        $('.LottieConfettie').attr('src','/wotle_assets/img/payment/LottieConfettie.gif');        
    },1500)   
}
if(kategori == 'unfinishpayment'){
    $('body').css('background','#f1f1f1');
    setTimeout(function () {
        $('.animate-check').html(`<img src="/wotle_assets/img/payment/Loadingfail.gif" alt="" class="max-width-200">`);
    }, 1000)
}
    setInterval(function(){
        $('.animate-check').removeClass('animate__tada');
        $('.animate-text').removeClass('animate__rubberBand');
        setInterval(function(){
            $('.animate-check').addClass('animate__tada');
            $('.animate-text').addClass('animate__rubberBand');
        },1000)
    },1000)

