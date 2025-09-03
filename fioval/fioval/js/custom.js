jQuery(document).ready(function( $ ) {
   // Carrossel
   $('.owl-slider').owlCarousel({
        loop:true,
        margin:0,
        nav: false,
        dots: true,
        animateOut: 'fadeOut', // Desaparece o item atual
        animateIn: 'fadeIn',   // Aparece o próximo item
        autoplayHoverPause: true,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed: 2000,
        responsive:{
            0:{
                items:1
            },
            991:{
                items:1
            }
        }
    });
    $('.owl-galeria').owlCarousel({
        loop:true,
        margin:0,
        nav: true,
        navText: ['<svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5607 1.32044C17.0932 1.85298 17.1416 2.6863 16.7059 3.27353L16.5607 3.44176L3.622 16.3811L16.5607 29.3204C17.0932 29.853 17.1416 30.6863 16.7059 31.2735L16.5607 31.4418C16.0281 31.9743 15.1948 32.0227 14.6076 31.587L14.4393 31.4418L0.439341 17.4418C-0.0931923 16.9092 -0.141605 16.0759 0.294104 15.4887L0.439341 15.3204L14.4393 1.32044C15.0251 0.734657 15.9749 0.734657 16.5607 1.32044Z" fill="#313130"/></svg>', '<svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5607 1.32044C17.0932 1.85298 17.1416 2.6863 16.7059 3.27353L16.5607 3.44176L3.622 16.3811L16.5607 29.3204C17.0932 29.853 17.1416 30.6863 16.7059 31.2735L16.5607 31.4418C16.0281 31.9743 15.1948 32.0227 14.6076 31.587L14.4393 31.4418L0.439341 17.4418C-0.0931923 16.9092 -0.141605 16.0759 0.294104 15.4887L0.439341 15.3204L14.4393 1.32044C15.0251 0.734657 15.9749 0.734657 16.5607 1.32044Z" fill="#313130"/></svg>        '],
        dots: false,
        autoplayHoverPause: true,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed: 1000,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
            991:{
                items:3
            }

        }
    });

    // Campo de busca
    $(document).on('click', '.search-home-bt', function(){
        if($('.search-menu').is(":visible")){
            $('.search-menu').hide();
            $('ul#menu-menu-principal-1').show();
        }else{
            $('.search-menu').show();
        }
    });
    $(document).on('click', '.search-close', function(){
        $('.search-menu').hide();
        $('.search-menu-interno').hide();
        $('.search-home-bt').show();
        $('.search-interno').show();
    });

});

// GO TOP
$('.gotop').on('click touch', function() {
    $('body,html').animate({scrollTop:0},300);
});

$(window).scroll( function() {
    if($(window).scrollTop() > (window.innerHeight * 0.9) ){
        $('.div-gotop').addClass('active');
    }
    else{
        $('.div-gotop').removeClass('active');
    }
})

if($(window).scrollTop() > (window.innerHeight * 0.9) ){
    $('.div-gotop').addClass('active');
}
else{
    $('.div-gotop').removeClass('active');
}

$('.menu-item').on('click touch', function(){
    if (this.classList.contains('ativo')) {
        this.classList.remove('ativo');
    } else {  
        this.classList.add('ativo');
    }
});

wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       50,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
  wow.init();