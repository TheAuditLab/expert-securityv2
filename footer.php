</main>
<?php get_sidebar(); ?>

<?php
    // Footer
    $footer_main_description = get_field("footer_main_description", 17);
    // Social icons
    $footer_social_title = get_field("footer_social_title", 17);

    $footer_social_icon_1 = get_field("footer_social_icon_1", 17);
    $footer_social_icon_2 = get_field("footer_social_icon_2", 17);
    $footer_social_icon_3 = get_field("footer_social_icon_3", 17);
?>

<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4>Contact</h4>
                <?php echo $footer_main_description ?>

            
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
                <h4>Useful Info</h4>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'main-footer-menu', 
                        'container_class' => 'main-footer-menu' ) ); 
                ?>
            </div>
            <div class="col-12 d-flex justify-content-center footer-bottom">
                <div class="social-icons">
                    <a href="https://www.facebook.com/pages/Expert-Security-Systems-UK-LTD/514239565336592">
                        <img src="<?php bloginfo('template_url'); ?>/images/facebook-black.svg" alt="Facebook Icon">
                    </a>
                        <img src="<?php bloginfo('template_url'); ?>/images/instagram-black.svg" alt="Instagram Icon">
                    </a>
                    <a href="https://www.linkedin.com/company/expert-security-systems-uk-ltd">
                        <img src="<?php bloginfo('template_url'); ?>/images/linkedin-black.svg" alt="LinkedIn Icon">
                    </a>
                </div>

                <div id="copyright">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>