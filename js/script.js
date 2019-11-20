
$(document).ready(function(){
    $('.nav-button').click(function(){
        $('.nav-button').toggleClass('change');
    })

    $(window).scroll(function(){
        let position= $(this).scrollTop();
        // console.log(position);
        if(position >=10){
            $('.nav-menu').addClass('custom-navbar');
        }
        else{
            $('.nav-menu').removeClass('custom-navbar');
        }
    });

    $(window).scroll(function(){
        let position = $(this).scrollTop();
        // console.log(position);
        if (position >=500) {
            $('.dixuyenviet-img').addClass('chuyendongmissiontrai');
            $('.mission-text').addClass('chuyendongmissionphai');
        }
        else{
            $('.dixuyenviet-img').removeClass('chuyendongmissiontrai');
            $('.mission-text').removeClass('chuyendongmissionphai');
        }
    });

    $('.gallery-list-item').click(function(){
        let value = $(this).attr('data-filter');
        if(value === 'all'){
            $('.filter').show(300);
        }else{
            $('.filter').not('.' + value).hide(300);
            $('.filter').filter('.' + value).show(300);
        }
    });

    $('.gallery-list-item').click(function(){
        $(this).addClass('active-item').siblings().removeClass('active-item');
    });

    $(window).scroll(function(){
        let position = $(this).scrollTop();
        // console.log(position);
        if(position>=4802){
            $('.card-1').addClass('movefromLeft');
            $('.card-2').addClass('movefromBottom');
            $('.card-3').addClass('movefromRight');

        }else{
            $('.card-1').removeClass('movefromLeft');
            $('.card-2').removeClass('movefromBottom');
            $('.card-3').removeClass('movefromRight');
        }
    });

    $(window).scroll(function(){
        let position = $(this).scrollTop();
        // console.log(position);
        if(position >=100){
            $('#topBtn').fadeIn();
        }else{
            $('#topBtn').fadeOut();
        }
    }); 

    $('#topBtn').click(function(){
        $('html ,body').animate({scrollTop: 0}, 5);
    });
});