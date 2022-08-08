<?php
    // Hero Slider
    $left_aligned_image_text_img = get_field("left_aligned_image_text_img");
    $left_aligned_image_text_title = get_field("left_aligned_image_text_title");
    $left_aligned_image_text_main_paragraphs = get_field("left_aligned_image_text_main_paragraphs");
?>

<section id="leftAlignedImageTextBlock">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="<?php echo $left_aligned_image_text_img ?>" alt="img-block-1"/>
            </div>

            <div class="col-12 col-lg-6 text-block">
                <h3><?php echo $left_aligned_image_text_title ?></h3>

                <?php echo $left_aligned_image_text_main_paragraphs ?>
            </div>  
        </div>
    </div>
</section>