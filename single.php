<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if (is_singular('post'))
include "header-div.php"; 

?>
<?php if ( get_post_type() === 'post' ) { 
    echo '<div class="container">
        <div class="description" itemprop="description">' . get_the_content() .'</div>
    </div>';
}
?>
<?php endwhile; endif; ?>
<footer class="footer">
</footer>
<?php get_footer(); ?>