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

    $('#extra-header-product').click(function(){
        $('.extra-header-product').toggle(200);
    });

    $('.he-menu-item.product-arrow').click(function(){
        $('.he-menu-item-arrow').toggle();
        $('.he-menu-product-list').toggle(200);
    });

});
