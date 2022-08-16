<?php 
    $why_choose_text = get_field("why_choose_text");
    $why_choose_bg = get_field("why_choose_bg");

    $why_choose_1_image = get_field("why_choose_1_image");
    $why_choose_1_text = get_field("why_choose_1_text");
    $why_choose_1_link = get_field("why_choose_1_link");
    $why_choose_1_link = get_field("why_choose_1_link_text");

    $why_choose_2_image = get_field("why_choose_2_image");
    $why_choose_2_text = get_field("why_choose_2_text");
    $why_choose_2_link = get_field("why_choose_2_link");
    $why_choose_1_link = get_field("why_choose_2_link_text");

    $why_choose_3_image = get_field("why_choose_3_image");
    $why_choose_3_text = get_field("why_choose_3_text");
    $why_choose_3_link = get_field("why_choose_3_link");
    $why_choose_1_link = get_field("why_choose_3_link_text");
?>

<section id="why-choose">
    <div class="why-choose" style="background-image: url('<?php echo $why_choose_bg['url']; ?>');">
        <div class="container">
            <div class="why-choose-text"><?php echo $why_choose_text; ?></div>
            <div class="why-choose-div">
                <div>
                    <img src="<?php echo $why_choose_1_image['url']; ?>">
                    <p><?php echo $why_choose_1_text; ?></p>
                </div>
                <div>
                    <img src="<?php echo $why_choose_2_image['url']; ?>">
                    <p><?php echo $why_choose_2_text; ?></p>
                </div>
                <div>
                    <img src="<?php echo $why_choose_3_image['url']; ?>">
                    <p><?php echo $why_choose_3_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>