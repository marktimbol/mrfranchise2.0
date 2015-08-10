jQuery(document).ready(function () {

    $('figure.brand').hover(function() {
        $(this).toggleClass('active');
    });

     $(".owl-carousel").owlCarousel({
        items: 6
     });   

    winW = $(document).width();
    winH = $(window).height();
    
    if ($('.menu-icon').is(':visible')) 
        _isresponsive = true;
    else 
        _isresponsive = false;
    
    if (winH > 700) 
        minH = winH;
    else 
        minH = 700;

    sliderH = minH*0.60;


    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        centeredSlides: true,
        autoplay: 10000,
        autoplayDisableOnInteraction: false,

        onSlideChangeStart: function(){
            $('.swiper-pagination-switch').removeClass('active')
            $('.swiper-pagination-switch').eq(swiper.activeIndex).addClass('active')
        }        
    });

    //navigation
    $('.swiper-pagination-switch').click(function(){
        swiper.slideTo($(this).index());
        $('.swiper-pagination-switch').removeClass('active');
        $(this).addClass('active')
    })    



    rightside_circle_bg = 0;
    var menu_k = 265/550;

    $(document).on('mouseenter', 'a.menu-cell', function() {
        //if(rightside_circle_bg) return false;
        //rightside_circle_bg = 1;
        $('.rightside-popups a.active, .intro-circle.active, .rightside-popups .title.active').removeClass('active');
        $('.line-wrapper').stop(true, true).css({'width':'0'}); 
        
        $('a.menu-cell.active').removeClass('active');
        $(this).addClass('active');
        
        var val = $(this).attr('data-rel');
        $('.rightside-popups').show();

        $('.line-wrapper[data-rel="'+val+'"]').animate({'width':minH*menu_k*0.5+'px'}, 500, function(){});
        $('.intro-circle, .rightside-popups a[data-rel="'+val+'"], .rightside-popups .title[data-rel="'+val+'"]').addClass('active');   
    });
    
    $(document).on('mouseleave', '.rightside-menu', function() {
        //if(rightside_circle_bg) return false;                                                  
        $('a.menu-cell.active').removeClass('active');                                                   
        $('.rightside-popups').hide();  
        $('.rightside-popups a.active, .intro-circle.active, .rightside-popups .title.active').removeClass('active');
        $('.line-wrapper').stop(true, true).css({'width':'0'}); 
    });

    $('.menu-cell').css({'height':minH/$('.rightside-menu .menu-cell').length-2, 'line-height':minH/$('.rightside-menu .menu-cell').length-2+'px'});
    $('.rightside-popups').css({'width':minH*menu_k});

});

