$(document).ready(function () {

    $(document).ready(function () {
        $('.list-image-banner').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            dots: true,
            centerMode: true,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,


        });
    });

    $('.header-three-line').click(function () {
        $('.header-extra').toggle(200);
    });

    // $('#extra-header-product').click(function(){
    //     $('.extra-header-product').toggle(200);
    // });

    $('.he-menu-item.product-arrow').click(function () {
        $('.he-menu-item-arrow').toggle();
        $('.he-menu-product-list').toggle(200);
    });

    $('.he-menu-item.account-arrow').click(function () {
        $('.he-menu-item-account-arrow').toggle();
        $('.he-menu-account-list').toggle(200);
    });

    // $('.header-right-item.hdr-acc').click(function () {
    //     $('.extra-header-right-account').toggle(200);
    // });

    $(document).ready(function () {
        let listStar = $(".list-star .fa-star")
        listRatingText = {
            1: 'Không thích',
            2: 'Tạm được',
            3: 'Bình thường',
            4: 'Rất tốt',
            5: 'Rất tuyệt vời'
        }

        listStar.mouseover(function () {
            let $this = $(this);
            let number = $this.attr('data-key');
            $(".number-rating").val(number);

            // $.each(listStar, function (key, value) {
            //     if (key+1 <= number) {
            //         $(this).removeClass('rating-active');
            //     }
            // });
            $(".list-text").text('').text(listRatingText[number]).show();

        });

        $('.send-rate').click(function (e) {
            e.preventDefault();

            if($('.choose-rating').hasClass('hide')){
                $('.choose-rating').removeClass('hide');
                $('.send-rate span').text('').text('Đóng lại').show();

            }else{
                $('.choose-rating').addClass('hide');
                $('.send-rate span').text('').text('Gửi đánh giá của bạn').show();

            }
        });

        $('.btn-send-text-rating .bstr-link').click(function (e) {
            e.preventDefault();
            let content = $('#ra-content').val();
            let number = $(".number-rating").val();
            let url = $(this).attr('href')

            if( content && number) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: { number, r_content: content},
                    dataType: 'json',
                    success: function (result) {
                        console.log(result);
                        if(result.code == 1){
                            alert('Gởi đánh giá thành công');
                            location.reload();
                        }
                    }
                });
            }

        });
    });

});
