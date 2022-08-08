<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
echo '<div class="container">';
do_action( 'woocommerce_before_main_content' );
echo '</div>';
?>

<section id="productCategoryTopSection">

	<header class="woocommerce-products-header">
		<div class="container">
			<div class="row">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<div id="subCategoryMenu">
		<div class="container">
			<div class="row">
				<?php 
					// If product category ID then
					// var_dump(get_the_terms( $post->ID, 'product_cat' ));

					if(has_term(32, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-new-in', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(33, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-home-office', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(469, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-office-seating', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}

					else if(has_term(35, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-soft-seating', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(272, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-storage', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(39, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-screens', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(93, 'product_cat')) {
						has_term(93, 'product_cat');
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-pods', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(83, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-office-accessories', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(42, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-reception', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(43, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-brands', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(44, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-clearance', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(140, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-tables', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else if(has_term(109, 'product_cat')) {
						wp_nav_menu( array( 
							'theme_location' => 'sub-cat-desking', 'link_before' => '<span itemprop="name">', 
							'link_after' => '</span>' ) ); 
					}
					else{
						
					}
				?>
			</div>
		</div>
	</div>

</section>

<section id="productCategoryTemplateCs">
	<div class="container">
		<div class="row">

		<?php
			// load custom woof product filters
			echo do_shortcode('[woof]');
		?>

		<button id="customWoofFilters">Filters</button>

		<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}	

		
		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );


		
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */

		do_action( 'woocommerce_archive_description' );



		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );

		?>

		</div>
	</div>
</section>

<?php

get_footer( 'shop' );
