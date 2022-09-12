<?php
    $product_hero_bg = get_field("product_hero_bg");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
<header>
    
<?php 
$price = get_field("price");

if ( !is_singular() || $price)
    include "title-div.php";
?>
<?php 
if ( is_singular() && $price )
    include "security-product.php";
?>
<?php edit_post_link(); ?>
</header>
<?php if ( !is_search() && is_singular()) { get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() || is_singular() ? 'summary' : 'content' ) ); } ?>
</article>