<?php
    // Hero Slider
    $right_aligned_image_text_img = get_field("right_aligned_image_text_img");
    $right_aligned_image_text_title = get_field("right_aligned_image_text_title");
    $right_aligned_image_text_main_paragraphs = get_field("right_aligned_image_text_main_paragraphs");
?>

<section id="rightAlignedImageTextBlock">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-block">
                <h3><?php echo $right_aligned_image_text_title ?></h3>

                <?php echo $right_aligned_image_text_main_paragraphs ?>
            </div> 

            <div class="col-12 col-lg-6">
                <img src="<?php echo $right_aligned_image_text_img ?>" alt="img-block-1"/>
            </div>
        </div>
    </div>
</section>