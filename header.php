<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
<meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
<meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
<meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
<meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
<meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:widgets:link-color" content="#007acc" />
<meta name="twitter:widgets:border-color" content="#fff" />
<link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
<script type="application/ld+json">
    
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/"
}
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/",
"logo": "<?php if ( has_custom_logo() ) { $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo esc_url( $logo[0] ); } ?>",
"image": "<?php if ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>",
"description": "<?php bloginfo( 'description' ); ?>"
}
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
    // Header Phone number
    $header_phone_number = get_field("header_phone_number", 5);
    $header_email = get_field("header_email", 5);
?>

<div id="header" class="hfeed">
    <div class="header-top-banner">
        <div class="container">
            <div class="logo-div">
                <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Expert Security Logo">
            </div>
            <div class="contact-div">
                <a class="tel" href="tel:<?php echo $header_phone_number; ?>">
                    <?php echo $header_phone_number ?>
                </a>
                <a class="email" href="mailto:<?php echo $header_email; ?>">
                    <?php echo $header_email?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Initial -->
<?php if (is_blog()) { get_template_part( 'blog-header' ); }?>
<main id="content" role="main">