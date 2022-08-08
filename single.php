<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="description" itemprop="description"><?php echo get_the_content(); ?></div>
</div>
<?php endwhile; endif; ?>
<footer class="footer">
</footer>
<?php get_footer(); ?>