</main>
<?php get_sidebar(); ?>

<?php
    // Footer
    $contact_info = get_field("contact_info", 5);
    $contact_box_sub_title = get_field("contact_box_sub_title", 5);
    $contact_box_title = get_field("contact_box_title", 5);
    $contact_box_text = get_field("contact_box_text", 5);
    $contact_form = get_field("contact_form", 5);
?>

<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="contact-box">
            <div class="contact-info">
                <h4><?php echo $contact_box_sub_title ?></h4>
                <h2><?php echo $contact_box_title ?></h2>
                <?php echo $contact_box_text ?>
            </div>
            <div class="newsletter">
                <?php
                    echo do_shortcode($contact_form);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="logo-div">
                    <a href="/">
                        <img class="footer-logo" src="<?php bloginfo('template_url'); ?>/images/crest-logo.png" alt="Expert Security Logo">
                        <p>Expert Security UK</p>
                    </a>
                </div>
                <?php echo $contact_info ?>

            
            </div>
            <div class="col-12 col-lg-3">
                <h4>Products</h4>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'main-footer-menu', 
                        'container_class' => 'main-footer-menu' ) ); 
                ?>
            </div>
            <div class="col-12 col-lg-3">
                <h4>Useful Links</h4>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'useful-links-menu', 
                        'container_class' => 'useful-links-menu' ) ); 
                ?>
            </div>
            <div class="col-12 d-flex justify-content-center footer-bottom">
                <div class="social-icons">
                    <a href="https://www.facebook.com/pages/Expert-Security-Systems-UK-LTD/514239565336592" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" alt="Facebook Icon">
                    </a>
                    <a href="https://www.instagram.com/expertsecurityuk/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/images/instagram.svg" alt="Instagram Icon">
                    </a>
                    <a href="https://www.linkedin.com/company/expert-security-systems-uk-ltd" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/images/linkedin.svg" alt="LinkedIn Icon">
                    </a>
                </div>

                <div id="copyright">
                    Copyright &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> LTD
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); 
include "template-blocks/enquire-popup.php";
?>


</body>
</html>