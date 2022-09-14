<?php
    $defaultImage = 'new';
?>

<section id="latest-news-block">
    <div class="container">
        <div class="title-div">
            <h2>Latest News</h2>
            <div class="button">
                <a href="/news"><p class="news-btn">View all news</p></a>
            </div>
        </div>
        
        <div class="row">
              <?php
                // Define our WP Query Parameters
                $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                  
                <?php
                // Start our WP Query
                while ($the_query -> have_posts()) : $the_query -> the_post();
                // Display the Post Title with Hyperlink
                ?>

                    <div class="blog-div">
                        <a href="<?php the_permalink(); ?>" >
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="img-tiles hover-effect" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" alt="' <?php the_title() ?>'">
                            <?php 
                            }else{ 
                            ?>
                                <div class="img-tiles hover-effect" style="background-image: url('<?php bloginfo('template_url'); ?>/images/security-bollard-5.jpg')" alt="' <?php the_title() ?>'">
                            <?php
                            } 
                            ?>  
                            </div>
                        </a>
                        <span class="text-div">
                            <a class="blog-title" href="<?php the_permalink(); ?>" >
                                <h4><?php the_title(); ?></h4>
                                <span class="excerpt"><?php the_excerpt(); ?>
                                    <p class="read-more">Read more</p>
                                </span>
                            </a>
                        </span>
                    </div>
                  
                <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
              ?>
          </div>
    </div>
</section>