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
            <div class="col-12 col-lg-4">
                <h4>Contact</h4>
                <?php echo $footer_main_description ?>

                <div id="copyright">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 offset-lg-1">
                <h4>More Info</h4>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'main-footer-menu', 
                        'container_class' => 'main-footer-menu' ) ); 
                ?>
            </div>
            <div class="col-12 col-lg-3 social-icon">
                <h4><?php echo $footer_social_title ?></h4>
                <?php echo $footer_social_icon_1 ?>
                <?php echo $footer_social_icon_2 ?>
                <?php echo $footer_social_icon_3 ?>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

<script type="text/javascript">
    // Mobile Main Product Categories Nav
    let mobileMainProductCatMenu = document.getElementById("mobileMainProductCatMenu")

    function openNav() {
        mobileMainProductCatMenu.style.visibility = "visible";
        mobileMainProductCatMenu.style.transition = "0.3s ease-in-out";
        mobileMainProductCatMenu.style.transform = "translateX(0)";
    }

    function closeNav() {
        mobileMainProductCatMenu.style.visibility = "hidden";
        mobileMainProductCatMenu.style.transform = "translateX(100%)";
    }
</script>

</body>
</html>