$(function (){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 60) {
        $('.navbar').addClass("background-color1-nc");
        $('.logo').addClass("nav-logo");
        $('.logo').removeClass("float-logo");
        $('.navbar').removeClass("mt-4");
        } else {
        $(".navbar").removeClass("background-color1-nc");
        $('.logo').removeClass("nav-logo");
        $('.logo').addClass("float-logo");
        $(".navbar").addClass("mt-4");
        }
    });
})

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout: 2500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})