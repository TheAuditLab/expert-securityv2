<?php get_header(); ?>
<?php
   $hero_image = get_field("hero_image");
   $hero_title = get_field("hero_title");
   $hero_title = get_field("hero_title");
   $split_row  = get_field("split_row");

   $info_text = get_field("info_text");


   $post =  $category->post_title;

   $left_category_title = get_field('left_category_title');
   $right_category_title = get_field('right_category_title');
   

   $left_category_1 	= get_field('left_category_1');
   $left_category_1_name =  $left_category_1->post_title;
   $left_category_1_url =  $left_category_1->guid;

   $left_category_2 	= get_field('left_category_2');
   $left_category_2_name =  $left_category_2->post_title;
   $left_category_2_url =  $left_category_2->guid;

   $right_category_1 	= get_field('right_category_1');
   $right_category_1_name =  $right_category_1->post_title;
   $right_category_1_url =  $right_category_1->guid;

   $right_category_2 	= get_field('right_category_2');
   $right_category_2_name =  $right_category_2->post_title;
   $right_category_2_url =  $right_category_2->guid;

?>

<header class="header">
<div id="category" class="hero-image" style="background-image: url('<?php echo $hero_image['url']; ?>')">
    <div class="container hero">
        <div class="row">
            <div class="col-12">			
                <?php echo $hero_title; ?>
            </div>
        </div>	
    </div>
<div class="archive-meta" itemprop="description"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
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
                    <h3>' . $left_category_title . '</h3>
                        <div>
                            <a href="' . $left_category_1->guid  .'">
                                <h4>' . $left_category_1_name . '</h4>
                                <img src="' . get_field('product_image',  $left_category_1->ID )['url'] . '">
                                <span class="price">
                                    <p>Prices available from</p>
                                    <h5>' . get_field('price',  $left_category_1->ID ) . '</h5>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="' . $left_category_2->guid  .'">
                                <h4>' . $left_category_2_name . '</h4>
                                <img src="' . get_field('product_image',  $left_category_2->ID )['url'] . '">
                                <span class="price">
                                    <p>Prices available from</p>
                                    <h5>' . get_field('price',  $left_category_2->ID ) . '</h5>
                                </span>
                            </a>
                        </div>
                </div>
                <div class="right-category">
                    <h3>' . $right_category_title . '</h3>
                        <div>
                            <a href="' . $right_category_1->guid  .'">
                                <h4>' . $right_category_1_name . '</h4>
                                <img src="' . get_field('product_image',  $right_category_1->ID )['url'] . '">
                            </a>
                        </div>
                        <div>
                            <a href="' . $right_category_2->guid  .'">
                                <h4>' . $right_category_2_name . '</h4>
                                <img src="' . get_field('product_image',  $right_category_2->ID )['url'] . '">
                            </a>
                        </div>
                </div>
            </div>
        </div>';
    }
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>