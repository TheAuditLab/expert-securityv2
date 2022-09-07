<?php get_header(); ?>
<?php
   $hero_image = get_field("hero_image");
   $hero_title = get_field("hero_title");
   $hero_title = get_field("hero_title");
   $split_row  = get_field("split_row");

   $info_text = get_field("info_text");

   //categories

   $left_category_title = get_field('left_category_title');
   $right_category_title = get_field('right_category_title');
   $category_title = get_field('category_title');
   
   
   $left_category_1 	= get_field('left_category_1');
   $left_category_2 	= get_field('left_category_2');

   $right_category_1 	= get_field('right_category_1');
   $right_category_2 	= get_field('right_category_2');

   $category_1 	= get_field('category_1');
   $category_2 	= get_field('category_2');
   $category_3 	= get_field('category_3');
   $category_4 	= get_field('category_4');
   $category_5 	= get_field('category_5');
   $category_6 	= get_field('category_6');
   $category_7 	= get_field('category_7');
   $category_8 	= get_field('category_8');

?>

<header class="header">
<div id="category" class="hero-image" style="background-image: url('<?php echo $hero_image['url']; ?>')">
    <div class="container hero">
        <div class="row">
            <div class="col-12">			
                <h2><?php single_cat_title(); 
                ?></h2>
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
                                <h4>' . $left_category_1->post_title . '</h4>
                                <img src="' . get_field('security_product_image_1',  $left_category_1->ID )['url'] . '">
                                <span class="price">
                                    <p>Prices available from</p>
                                    <h5>' . get_field('price',  $left_category_1->ID ) . '</h5>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="' . $left_category_2->guid  .'">
                                <h4>' . $left_category_2->post_title . '</h4>
                                <img src="' . get_field('security_product_image_1',  $left_category_2->ID )['url'] . '">
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
                                <h4>' . $right_category_2->post_title . '</h4>
                                <img src="' . get_field('security_product_image_1',  $right_category_2->ID )['url'] . '">
                                <span class="price">
                                    <p>Prices available from</p>
                                    <h5>' . get_field('price',  $right_category_2->ID ) . '</h5>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="' . $right_category_2->guid  .'">
                                <h4>' . $right_category_2->post_title . '</h4>
                                <img src="' . get_field('security_product_image_1',  $right_category_2->ID )['url'] . '">
                                <span class="price">
                                    <p>Prices available from</p>
                                    <h5>' . get_field('price',  $right_category_2->ID ) . '</h5>
                                </span>
                            </a>
                        </div>
                </div>
            </div>
        </div>';
    }
    echo '<div class="container">
            <div class="security-solution-div">
                <h3>' . $category_title . '</h3>
                ';
                if ($category_1->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_1->post_name  .'">
                            <h4>' . $category_1->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_1->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_1->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                    }
                if ($category_2->post_name ) {
                    echo '<div>
                        <a href="' . $category_2->guid  .'">
                            <h4>' . $category_2->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_2->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_2->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_3->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_3->post_name  .'">
                            <h4>' . $category_3->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_3->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_3->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_4->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_4->post_name  .'">
                            <h4>' . $category_4->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_4->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_4->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_5->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_5->post_name  .'">
                            <h4>' . $category_5->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_5->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_5->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_6->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_6->post_name  .'">
                            <h4>' . $category_6->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_6->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_6->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_7->post_name ) {
                    echo'<div>
                        <a href="/security-solutions/bollards/' . $category_7->post_name  .'">
                            <h4>' . $category_7->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_7->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_7->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
                if ($category_8->post_name ) {
                    echo '<div>
                        <a href="/security-solutions/bollards/' . $category_8->post_name  .'">
                            <h4>' . $category_8->post_title . '</h4>
                            <img src="' . get_field('security_product_image_1',  $category_8->ID )['url'] . '">
                            <span class="price">
                                <p>Prices available from</p>
                                <h5>' . get_field('price',  $category_8->ID ) . '</h5>
                            </span>
                        </a>
                    </div>';
                }
            echo '</div>
        </div>
    </div>';
?>
<?php include "template-blocks/feedback-slider.php";?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>