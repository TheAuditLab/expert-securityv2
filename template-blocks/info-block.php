<?php 
    $info_text = get_field("info_text");
    $enquiry_form = get_field("enquiry_form");
?>

<section id="info-block">
    <div class="container">
        <div class="info-text">
            <?php echo $info_text; ?>
        </div>
        <div class="enquiry-form">
            <span class="enquiry-title">Enquire here</span>
            <?php
                echo do_shortcode($enquiry_form);
            ?>
        <div>
    </div>
</section>