<?php
    $product_image = get_field("product_image");
    $security_product_text = get_field("security_product_text");
    $product_spec = get_field("product_spec");
    $price = get_field("price")
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
</section>