<?php
    $product_hero_bg = get_field("product_hero_bg");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
<header>
<div class="title-div">
    <div> 
        <a class="img-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <img class="hero-image"src="<?php the_post_thumbnail_url(); ?>" style="background-image: url('<?php echo $product_hero_bg['url']; ?>')">
    </div>
    <h2><?php the_title(); ?></h2></a>

    <?php if ( !is_singular() ) {
        echo '<div class="blog-post">';
        echo '<a class="read-btn" href="' . get_the_permalink() . '"> READ MORE </a>';
        echo '</div>';
    }?>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?>
</div>
<?php 
$price = get_field("price");
if ( is_singular() && $price )
    include "security-product.php";
?>
<?php edit_post_link(); ?>
</header>
<?php if ( !is_search() && is_singular()) { get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() || is_singular() ? 'summary' : 'content' ) ); } ?>
</article>