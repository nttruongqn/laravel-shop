$(document).ready(function () {
    $(document).ready(function () {
        $('.list-image-banner').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            dots: true,
            centerMode: true,
            autoplay:true,
            infinite: true,
            autoplaySpeed: 2000,

            
        });
    });

    $('.header-three-line').click(function(){
        $('.header-extra').toggle(200);
    });
       
});