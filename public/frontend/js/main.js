//back to button function start 
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
//back to button function end
    
//search button
    $(".search-box-toggle-show").hide();

    $(document).ready(function(){
        $('.search-box').click(function(){
            $('.top-bar-area').hide();
            $('.search-box-toggle-show').show();
        });
    });

    function closesearch(){
        $('#closesearch').hide();
        $('.top-bar-area').show();
    };

    //toggle nav search button expand full width
    $(".search-toggle-show").hide();

    $(document).ready(function(){
        $('.search-boxs').click(function(){
            $('#hide-for-search').hide();

            $('.search-toggle-show').show();
        });
    });

    function close_search(){
        $('#close_search').hide();
        $('#hide-for-search').show();
    };

// Now call the Owl initializer function and your carousel is ready.
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:false
        },
        550:{
            items:6,
            nav:false
        },
        1000:{
            items:8,
            nav:false,
            loop:false
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
});
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});

// scroll navbar
(function($){
    $(document).ready(function(){
        //hide navbar
        $(".navscroll").hide();
        //fade in
        $(function(){
            $(window).scroll(function(){
                //set distance user needs to scroll
                if($(this).scrollTop() > 100){
                    $('.navscroll').show();
                    $('.navscroll').addClass('fixed-top');
                }else{
                     $(".navscroll").hide();
                } 
            });
        });
    });
}(jQuery));