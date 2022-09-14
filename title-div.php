<div class="title-div">
    <div> 
        <?php if ( !is_singular() ) {
            echo '<a class="img-title" href="' . get_the_permalink() . '" rel="bookmark">';
        } ?>
        <?php if ( is_singular() ) {
            echo '<div class="img-title" rel="bookmark">';
        }?>
        <?php if ( $product_hero_bg || has_post_thumbnail()  ) { ?>
        <img class="hero-image" src="<?php the_post_thumbnail_url(); ?>" style="background-image: url('<?php echo $product_hero_bg['url']; ?>')">
        <?php 
            }else{ 
        ?>
        <img class="hero-image" src="<?php bloginfo('template_url'); ?>/images/security-bollard-5.jpg')" style="background-image: url('<?php echo $product_hero_bg['url']; ?>')">
        <?php
            } 
        ?> 
    </div>
    <h2><?php the_title(); ?></h2>
    <?php if ( !is_singular() ) {
        echo '</a>';
    }?>
     <?php if ( is_singular() ) {
        echo '</div>';
    }?>

    <?php if ( !is_singular() ) {
        echo '<div class="blog-post">';
        echo '<a class="read-btn" href="' . get_the_permalink() . '"> READ MORE </a>';
        echo '</div>';
    }?>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?>
</div>