<?php get_header(); ?>
<?php
   $hero_image = get_field("hero_image");
   $hero_title = get_field("hero_title");
   $hero_title = get_field("hero_title");
   $split_row  = get_field("split_row");

   $info_text = get_field("info_text");
   $category = get_field("category");
   $post =  $category->post_title;

?>

<header class="header">
<div id="category" class="hero-image" style="background-image: url('<?php echo $hero_image['url']; ?>')">
    <div class="container hero">
        <div class="row">
            <div class="col-12">			
                <?php echo $hero_title; ?>
                <?php var_dump($category); ?>

                <?php var_dump($split_row); ?>
            </div>
        </div>	
    </div>
    <div class="container">
        <div class="info-text">
            <?php echo $info_text; ?>
        </div>
        <div class="enquiry-form">
            <span class="enquiry-title">Enquire here</span>
            <?php
                echo do_shortcode('[contact-form-7 id="112" title="Enquiry Form"]');
            ?>
        </div>
    </div>
    <?php 
        if ($split_row === 'yes') {
            echo '<div class="container"> 
                <div class="left-category">
                    <h3>' . $post.'</h3>
                </div>
            </div>';
        }
    ?>
<div class="archive-meta" itemprop="description"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>