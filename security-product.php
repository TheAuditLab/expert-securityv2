<?php
    $product_image = get_field("product_image");
    $security_product_text = get_field("security_product_text");
    $product_spec = get_field("product_spec");
    $price = get_field("price");
    $product_information = get_field("product_information");
    $product_information_bg = get_field("product_information_bg");

    $usp_1 = get_field("usp_1");
    $usp_2 = get_field("usp_2");
    $usp_3 = get_field("usp_3");
    $usp_4 = get_field("usp_4");


?>


<section id="security-product">
    <div class="container">
        <div class="info-text">
            <?php echo $security_product_text; ?>
        </div>
        <div class="enquiry-form">
            <span class="enquiry-title">Enquire here</span>
            <?php
                echo do_shortcode('[contact-form-7 id="112" title="Enquiry Form"]');
            ?>
        </div>
        <div class="product-info">
            <div class="product-image">
                <img src="<?php echo $product_image['url'] ?>">
            </div>
            <div class="product-spec">
                <?php echo $product_spec ?>
                <div class="price">
                    <p>from</p>
                    <h3><?php echo $price ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product-information" style="background-image: url('<?php echo $product_information_bg['url']; ?>')">
        <div class="container">
            <?php echo $product_information ?>
            <div class="usp-div">
                <div class="usp"><?php echo $usp_1 ?></div>
                <div class="usp"><?php echo $usp_2 ?></div>
                <div class="usp"><?php echo $usp_3 ?></div>
                <div class="usp"><?php echo $usp_4 ?></div>
            </div>
        </div>
    </div>
</section>