<?php
get_header();
if ( have_posts() )  {
    echo    '<div class="news-header">
                <div class="container"> 
                    <h2>Latest News</h2>
                </div>
            </div>';
}
echo '<div class="container">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
echo '</div>';

get_template_part( 'nav', 'below' );
get_footer();