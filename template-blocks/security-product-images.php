<?php
    // security_product Slider

    $security_product_title    = get_field('security_product_title');
    $security_product_bg_image = get_field('security_product_bg_image');

    $security_product_image_1 = get_field('security_product_image_1');
    $security_product_image_2 = get_field('security_product_image_2');
    $security_product_image_3 = get_field('security_product_image_3');
    $security_product_image_4 = get_field('security_product_image_4');
?>

<div class="slider security-product-slider">
    <?php
        if(($security_product_image_1)){
    ?>
    <div class="security-product">
        <div>
            <img src="<?php echo $security_product_image_1['url'] ?>">
        </div>
    </div>
    <?php
        }
        else{

        }
    ?> 
    <?php
        if(($security_product_image_2)){
    ?>
    <div class="security-product">
        <div>
            <img src="<?php echo $security_product_image_2['url'] ?>">
        </div>
    </div>
    <?php
        }
        else{

        }
    ?> 
    <?php
        if(($security_product_image_3)){
    ?>
    <div class="security-product">
        <div>
            <img src="<?php echo $security_product_image_3['url'] ?>">
        </div>
    </div>
    <?php
        }
        else{

        }
    ?> 
    <?php
        if(($security_product_image_4)){
    ?>
        <div class="security-product">
            <div>
                <img src="<?php echo $security_product_image_4['url'] ?>">
            </div>
        </div>
    <?php
        }
        else{

        }
    ?> 
</div>