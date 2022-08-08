<section id="ourNewsFeed">
        <div class="container">
            <h3>Latest Stories</h3>
                    <a class="blog-permalink" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"> See all posts </a>
        </div>
        <div class="container">
          <div class="row">
              <?php
                // Define our WP Query Parameters
                $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                  
                <?php
                // Start our WP Query
                while ($the_query -> have_posts()) : $the_query -> the_post();
                // Display the Post Title with Hyperlink
                ?>

                    <div class="col-12 col-md-4">
                    <a href="<?php the_permalink(); ?>" >
                        <div class="img-tiles" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                        </div>
                    </a>

                    <a class="blog-title" href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a>
                    </div>
                  
                <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
              ?>
          </div>
        </div>
</section>