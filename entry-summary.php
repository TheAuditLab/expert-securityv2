<div class="entry-summary">
<?php if ( ( has_post_thumbnail() ) && ( !is_search() ) ) : ?>
    <div class="hero-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/security-bollard-5.jpg')">
        <h1> <?php echo get_the_title(); ?> </h1>
    </div>
    <div class="container">
        <?php the_content(); ?>
    </div>
<?php endif; ?>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>