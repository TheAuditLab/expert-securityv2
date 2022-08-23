<?php if ( !is_singular() ) {
    $blog_page_image = wp_get_attachment_url( get_post_thumbnail_id(get_option( 'page_for_posts' )) );
    echo '<div class="blog-header">
        <div class="position-absolute w-100">\
            <div class="container">
                <h1 class="title">latest news</h1>
            </div>
        </div>
        <img class="blog-img" src="'. $blog_page_image .'">
    </div>';
}?>