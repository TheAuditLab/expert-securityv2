<?php
    $newsletter_block_text = get_field("newsletter_block_text", 17);
?>

<section id="newsletterBlockSection">
    <div class="container">
        <h3>Newsletter</h3>

        <p><?php echo $newsletter_block_text ?></p>

        <?php
            echo do_shortcode( '[contact-form-7 id="275" title="Newsletter form"]' );
        ?>
    </div>
</section>