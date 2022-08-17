<?php

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
                            <div class="img-tiles" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" alt="<?php the_title() ?>">
                            </div>
                        </a>

                        <a class="blog-title" href="<?php the_permalink(); ?>" >
                            <h4><?php ç; ?></h4>
                            <span class="excerpt"><?php the_excerpt(); ?></span>
                            <p class="read-more">Read more</p>
                        </a>
                    </div>
                  
                <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
              ?>
          </div>
    </div>
</section>