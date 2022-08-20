<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
<header>
<div class="title-div">
    <div > 
        <a class="img-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <img src="<?php the_post_thumbnail_url(); ?>">
        <p><?php the_title(); ?></p></a>
    </div>
    <?php if ( !is_singular() ) {
        echo '<div class="blog-post">';
        echo '<a href="' . get_the_permalink() . '">' . get_the_title() .'</a>';
        echo '<a class="read-btn" href="' . get_the_permalink() . '"> READ MORE </a>';
        echo '</div>';
    }?>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?>
    <?php if ( is_singular() )
        echo '<a href="#content">
            <img src="' . get_template_directory_uri() .'/icons/arrow.png" class="arrow"/>
        </a>';
    ?>
</div>
<?php edit_post_link(); ?>
</header>
<?php if ( !is_search() && is_singular()) { get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() || is_singular() ? 'summary' : 'content' ) ); } ?>
</article>