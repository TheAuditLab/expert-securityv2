<?php 
    $worked_with_text = get_field("worked_with_text");

    $worked_with_1_image = get_field("worked_with_1_image");
    $worked_with_2_image = get_field("worked_with_2_image");
    $worked_with_3_image = get_field("worked_with_3_image");
    $worked_with_4_image = get_field("worked_with_4_image");
    $worked_with_5_image = get_field("worked_with_5_image");
    $worked_with_6_image = get_field("worked_with_6_image");
?>

<section id="worked-with">
    <div class="container">
        <div class="text-area">
            <div class="worked-with-text"><?php echo $worked_with_text; ?></div>
        </div>
        <div class="logos">
            <div>
                <img src="<?php echo $worked_with_1_image['url']; ?>" alt="<?php echo $worked_with_1_image['alt']; ?>">
            </div>
            <div>
                <img src="<?php echo $worked_with_2_image['url']; ?>" alt="<?php echo $worked_with_2_image['alt']; ?>">
            </div>
            <div>
                <img src="<?php echo $worked_with_3_image['url']; ?>" alt="<?php echo $worked_with_3_image['alt']; ?>">
            </div>
            <div>
                <img src="<?php echo $worked_with_4_image['url']; ?>" alt="<?php echo $worked_with_4_image['alt']; ?>">
            </div>
            <div>
                <img src="<?php echo $worked_with_5_image['url']; ?>" alt="<?php echo $worked_with_5_image['alt']; ?>">
            </div>
            <div>
                <img src="<?php echo $worked_with_6_image['url']; ?>" alt="<?php echo $worked_with_6_image['alt']; ?>">
            </div>
        </div>
    </div>
</section>