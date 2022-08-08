<?php
    // Hero Slider
    $full_sized_hero_background_image = get_field("full_sized_hero_background_image");
    $full_sized_hero_title = get_field("full_sized_hero_title");
    $full_sized_hero_text_area = get_field("full_sized_hero_text_area");
?>

<section id="fullSizedHeroBlock" style="background-image: url('<?php echo $full_sized_hero_background_image; ?>');">
    <div class="container">
        <div class="row">
            <div class=col-12">
                <h1> <?php echo $full_sized_hero_title ?> </h1>
            </div>
            <div class=col-12">
                <p> <?php echo $full_sized_hero_text_area ?> </p>
            </div>
        </div>
    </div>
</section>