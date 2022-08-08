

// OnLoad
jQuery(document).ready(function($) {
    
    jQuery(".woocommerce-product-details__short-description").insertBefore(".woo-related-products-container ");


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

    // Clients slider
    $('.our-clients-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,

        responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
              }
          },
          {
              breakpoint: 767,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
        ]
    });

    // Reviews slider
    $('.reviews-slider-box').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: false,
        autoplay: true
      });


      // Review slider arrows remove   
      cleanSliderArrows();

      function cleanSliderArrows(){
        var reviewSlickPrev = document.getElementsByClassName("slick-prev")[0];
        var reviewSlickNext = document.getElementsByClassName("slick-next")[0];

        if(reviewSlickPrev){
            reviewSlickPrev.innerHTML = "";
        }
        if(reviewSlickNext){
            reviewSlickNext.innerHTML = "";
        }
      }


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


    // trigger custom woof filters window
    var customWoofFiltersTrigger = document.getElementById("customWoofFilters");
    var woofPanel = document.getElementsByClassName("woof")[0];

    if (customWoofFiltersTrigger){
        customWoofFiltersTrigger.addEventListener('click', function (event) {
            if(woofPanel.style.display == "block"){
                woofPanel.style.display = "none";
            }
            else{
                woofPanel.style.display = "block";
            }
        }, false);
    }    
    else{
        
    }    

    // moving price under SKU 
    jQuery(".product_totals").insertAfter(".price .exclude-prod-vat");
    jQuery( ".formattedTotalPrice" ).after( "<small>(Incl VAT)</small>" );

//    //hiding dropdown on select
//    jQuery(".gfield_radio .gchoice").click(function() {
//         jQuery(".ginput_container .gfield_radio").hide();
//    });

//    jQuery(".ginput_container_select").click(function() {
//     jQuery(".ginput_container .gfield_radio").toggle();
//    })
// ---- Document ready END
});

