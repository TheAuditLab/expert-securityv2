

// OnLoad
jQuery(document).ready(function($) {
    
    jQuery(".woocommerce-product-details__short-description").insertBefore(".woo-related-products-container ");

    // Search bar toggle
    jQuery(".search-icon").click(function(){
        $(".search-field").toggle();
    });

    // mobile menu toggle
    $(".mobile-menu").click(function(){
        $(this).toggleClass("active");
        $("#menu-main-menu").toggleClass("active");
        $("body").toggleClass("overflow");
      });

    $(window).resize(function(){
        if(screen.width >= 700){
            $(".mobile-menu").removeClass("active");
            $("#menu-main-menu").removeClass("active");
            $("body").removeClass("overflow");
            console.log('ee');
        }
    });

    // Homepage hero slider
    $('.homepage-hero-main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: true,
        autoplay: true,
        swipeToSlide: true
    });

      // Search Bar Header placeholder text
      headerSearchBar();

      function headerSearchBar(){
        var headerSearchBarField = document.getElementsByClassName("search-field")[0];

        if(headerSearchBarField){
            if(document.querySelector("[placeholder='Search …']")){
                document.querySelector("[placeholder='Search …']").placeholder = "Search for products";
            }
        }
    }

    //Loader animation in view
        // Check if it's time to start the animation.
    function checkAnimation() {
        $.fn.isInViewport = function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
        
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
        
            return elementBottom > viewportTop && elementTop < viewportBottom;
        };

        var $elem = $('.stats-div');
        var $lWrap = $('.l-wrap');
        var $rWrap = $('.r-wrap');
        console.log($lWrap);

      $(window).scroll(function () {
        if ($('.stats-div').isInViewport()) {
                // Start the animation
                console.log('hh');
                $lWrap.addClass('left-wrap');
                $rWrap.addClass('right-wrap');
            } else {
                $lWrap.removeClass('left-wrap');
                $rWrap.removeClass('right-wrap');
            }
        }
    )}
});

