<?php 
    $info_text = get_field("info_text");
    $enquiry_form = get_field("enquiry_form");

    $security_product_1_image = get_field("security_product_1_image");
    $security_product_1_text = get_field("security_product_1_text");
    $security_product_1_link = get_field("security_product_1_link");

    $security_product_2_image = get_field("security_product_2_image");
    $security_product_2_text = get_field("security_product_2_text");
    $security_product_2_link = get_field("security_product_2_link");

    $security_product_3_image = get_field("security_product_3_image");
    $security_product_3_text = get_field("security_product_3_text");
    $security_product_3_link = get_field("security_product_3_link");

    $security_product_4_image = get_field("security_product_4_image");
    $security_product_4_text = get_field("security_product_4_text");
    $security_product_4_link = get_field("security_product_4_link");

    $security_product_5_image = get_field("security_product_5_image");
    $security_product_5_text = get_field("security_product_5_text");
    $security_product_5_link = get_field("security_product_5_link");
?>

<section id="info-block">
    <div class="container">
        <div class="info-text">
            <?php echo $info_text; ?>
        </div>
        <div id="enquiry-form" class="enquiry-form">
            <span class="enquiry-title">Enquire here</span>
            <?php
                echo do_shortcode($enquiry_form);
            ?>
        </div>
        <div class="security-products">
            <a href="<?php echo $security_product_1_link ?>">
                <div class="product" style="background-image: url('<?php echo $security_product_1_image['url']; ?>');">
                    <p><?php echo $security_product_1_text; ?></p>
                </div>
            </a>
            <a href="<?php echo $security_product_2_link ?>">
                <div class="product" style="background-image: url('<?php echo $security_product_2_image['url']; ?>');">
                    <p><?php echo $security_product_2_text; ?></p>
                </div>
            </a>
            <a href="<?php echo $security_product_3_link ?>">
                <div class="product" style="background-image: url('<?php echo $security_product_3_image['url']; ?>');">
                    <p><?php echo $security_product_3_text; ?></p>
                </div>
            </a>
            <a href="<?php echo $security_product_4_link ?>">
                <div class="product" style="background-image: url('<?php echo $security_product_4_image['url']; ?>');">
                    <p><?php echo $security_product_4_text; ?></p>
                </div>
            </a>
            <a href="<?php echo $security_product_5_link ?>">
                <div class="product" style="background-image: url('<?php echo $security_product_5_image['url']; ?>');">
                    <p><?php echo $security_product_5_text; ?></p>
                </div>
            </a>
        </div>
    </div>
</section>