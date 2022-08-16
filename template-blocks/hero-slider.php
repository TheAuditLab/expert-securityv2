<?php
    $hero_slider_1 = get_field('hero_slider_1'); 
    $hero_slider_2 = get_field('hero_slider_2'); 
    $hero_slider_3 = get_field('hero_slider_3'); 


    // Hero Slider
    $hero_slider_image_1 = get_field("hero_slider_image_1");
    $hero_slider_title_1 = get_field("hero_slider_title_1");
    $hero_slider_link_1 = get_field("hero_slider_link_1");
    $hero_slider_shop_text_1 = $hero_slider_1["hero_slider_shop_text_1"];
    $hero_slider_shop_link_1 =  $hero_slider_1["hero_slider_shop_link_1"];
    $hero_slider_read_text_1 = $hero_slider_1["hero_slider_read_text_1"];
    $hero_slider_read_link_1 =  $hero_slider_1["hero_slider_read_link_1"];


    $hero_slider_image_2 = get_field("hero_slider_image_2");
    $hero_slider_title_2 = get_field("hero_slider_title_2");
    $hero_slider_link_2 = get_field("hero_slider_link_2");
    $hero_slider_shop_text_2 = $hero_slider_2["hero_slider_shop_text_2"];
    $hero_slider_shop_link_2 =  $hero_slider_2["hero_slider_shop_link_2"];
    $hero_slider_read_text_2 = $hero_slider_2["hero_slider_read_text_2"];
    $hero_slider_read_link_2 =  $hero_slider_2["hero_slider_read_link_2"];

    $hero_slider_image_3 = get_field("hero_slider_image_3");
    $hero_slider_title_3 = get_field("hero_slider_title_3");
    $hero_slider_link_3 = get_field("hero_slider_link_3");
    $hero_slider_shop_text_3 = $hero_slider_3["hero_slider_shop_text_3"];
    $hero_slider_shop_link_3 =  $hero_slider_3["hero_slider_shop_link_3"];
    $hero_slider_read_text_3 = $hero_slider_3["hero_slider_read_text_3"];
    $hero_slider_read_link_3 =  $hero_slider_3["hero_slider_read_link_3"];
?>

<section id="homepageHeroSlider">
    <div class="slider homepage-hero-main-slider">
        <?php
            if(($hero_slider_image_1)){
        ?>
        <div class="home-hero-img" style="background-image: url('<?php echo $hero_slider_image_1; ?>');">
            <div class="container">
                <h2 class="hero-title"><?php echo $hero_slider_title_1; ?></h2>
                <div class="button-div">
                    <a class="shop-button" href="<?php echo $hero_slider_shop_link_1; ?>"><?php echo $hero_slider_shop_text_1; ?></a> 
                    <a class="read-button" href="<?php echo $hero_slider_read_link_1; ?>"><?php echo $hero_slider_read_text_1; ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($hero_slider_image_2)){
        ?>
        <div class="home-hero-img" style="background-image: url('<?php echo $hero_slider_image_2; ?>');">
            <div class="container">
                <h2 class="hero-title"><?php echo $hero_slider_title_2; ?></h2>
                <div class="button-div">
                    <a class="shop-button" href="<?php echo $hero_slider_shop_link_2; ?>"><?php echo $hero_slider_shop_text_2; ?></a> 
                    <a class="read-button" href="<?php echo $hero_slider_read_link_2; ?>"><?php echo $hero_slider_read_text_2; ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($hero_slider_image_3)){
        ?>
        <div class="home-hero-img" style="background-image: url('<?php echo $hero_slider_image_3; ?>');">
            <div class="container">
                <h2 class="hero-title"><?php echo $hero_slider_title_3; ?></h2>
                <div class="button-div">
                    <a class="shop-button" href="<?php echo $hero_slider_shop_link_3; ?>"><?php echo $hero_slider_shop_text_3; ?></a> 
                    <a class="read-button" href="<?php echo $hero_slider_read_link_3; ?>"><?php echo $hero_slider_read_text_3; ?></a> 
                </div>
            </div>
        </div>
        <?php
            }
            else{

            }
        ?> 
    </div>
</section>