<?php
add_action( 'after_setup_theme', 'generic_setup' );
function generic_setup() {
load_theme_textdomain( 'generic', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
add_theme_support( 'woocommerce' );
global $content_width;
if ( !isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'generic' ) ) );
}

add_action( 'wp_footer', 'generic_footer' );
function generic_footer() {
?>
<script>
jQuery(document).ready(function($) {
$(".before").on("focus", function() {
$(".last").focus();
});
$(".after").on("focus", function() {
$(".first").focus();
});
$(".menu-toggle").on("keypress click", function(e) {
if (e.which == 13 || e.type === "click") {
e.preventDefault();
$("#menu").toggleClass("toggled");
$(".looper").toggle();
}
});
$(document).keyup(function(e) {
if (e.keyCode == 27) {
if ($("#menu").hasClass("toggled")) {
$("#menu").toggleClass("toggled");
}
}
});
$("img.no-logo").each(function() {
var alt = $(this).attr("alt");
$(this).replaceWith(alt);
});
});
</script>
<?php
}
add_filter( 'document_title_separator', 'generic_document_title_separator' );
function generic_document_title_separator( $sep ) {
$sep = esc_html( '|' );
return $sep;
}
add_filter( 'the_title', 'generic_title' );
function generic_title( $title ) {
if ( $title == '' ) {
return esc_html( '...' );
} else {
return wp_kses_post( $title );
}
}
function generic_schema_type() {
$schema = 'https://schema.org/';
if ( is_single() ) {
$type = "Article";
} elseif ( is_author() ) {
$type = 'ProfilePage';
} elseif ( is_search() ) {
$type = 'SearchResultsPage';
} else {
$type = 'WebPage';
}
echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
}
add_filter( 'nav_menu_link_attributes', 'generic_schema_url', 10 );
function generic_schema_url( $atts ) {
$atts['itemprop'] = 'url';
return $atts;
}
if ( !function_exists( 'generic_wp_body_open' ) ) {
function generic_wp_body_open() {
do_action( 'wp_body_open' );
}
}
add_action( 'wp_body_open', 'generic_skip_link', 5 );
function generic_skip_link() {
echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'generic' ) . '</a>';
}
add_filter( 'the_content_more_link', 'generic_read_more_link' );
function generic_read_more_link() {
if ( !is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'generic' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'excerpt_more', 'generic_excerpt_read_more_link' );
function generic_excerpt_read_more_link( $more ) {
if ( !is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'generic' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'generic_image_insert_override' );
function generic_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
add_action( 'widgets_init', 'generic_widgets_init' );
function generic_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'generic' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'generic_pingback_header' );
function generic_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'generic_enqueue_comment_reply_script' );
function generic_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function generic_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
<?php
}
add_filter( 'get_comments_number', 'generic_comment_count', 0 );
function generic_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// ---------------------------------------- Custom Functions -------------------------------------------

// -------- Bootstrap CDN
wp_register_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
wp_enqueue_style('Bootstrap');

// -------- Fontawesome CDN
wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
wp_enqueue_style('Font_Awesome');

// --------- Load Custom CSS
function generic_enqueue() {
    wp_enqueue_style( 'generic-style', get_stylesheet_uri() );
    wp_enqueue_style( 'generic-icons', get_template_directory_uri() . '/icons/icons.css' );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'generic_enqueue' );

// -------- Slick slider css
wp_register_style( 'Slick_slider_css', get_stylesheet_directory_uri() . '/vendors/slick.css');
wp_enqueue_style('Slick_slider_css');

// -------- Slick slider JS
function slick_slider_load() {
    wp_enqueue_script( 'slick_slider_script', get_stylesheet_directory_uri() . '/js/vendors/slick.min.js');
}

add_action('wp_enqueue_scripts','slick_slider_load');

// -------- Custom JS
function custom_js_load() {
    wp_enqueue_script( 'custom-js-script', get_stylesheet_directory_uri() . '/js/custom.js');
}

add_action('wp_enqueue_scripts','custom_js_load');

// -------- Register custom menus
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'main-products-cat-placement' => __( 'Main Products Categories Placement' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );


function wpb_custom_footer_menu() {
  register_nav_menus(
    array(
      'main-footer-menu' => __( 'Main Footer Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_footer_menu' );

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
// -------------------------- Product Sub categories menus

function sub_cat_office_seating() {
  register_nav_menus(
    array(
      'sub-cat-office-seating' => __( 'Sub Category Office Seating' )
    )
  );
}
add_action( 'init', 'sub_cat_office_seating' );


function sub_cat_office_chairs_seating() {
  register_nav_menus(
    array(
      'sub-cat-office-chairs-seating' => __( 'Sub Category Office Chairs Seating' )
    )
  );
}
add_action( 'init', 'sub_cat_office_chairs_seating' );

//

function sub_cat_soft_seating() {
  register_nav_menus(
    array(
      'sub-cat-soft-seating' => __( 'Sub Category Soft Seating' )
    )
  );
}
add_action( 'init', 'sub_cat_soft_seating' );

// 

function sub_cat_tables() {
  register_nav_menus(
    array(
      'sub-cat-tables' => __( 'Sub Category Tables' )
    )
  );
}
add_action( 'init', 'sub_cat_tables' );

//

function sub_cat_desking() {
  register_nav_menus(
    array(
      'sub-cat-desking' => __( 'Sub Category Desking' )
    )
  );
}
add_action( 'init', 'sub_cat_desking' );

//

function sub_cat_storage() {
  register_nav_menus(
    array(
      'sub-cat-storage' => __( 'Sub Category Storage' )
    )
  );
}
add_action( 'init', 'sub_cat_storage' );

//

function sub_cat_screens() {
  register_nav_menus(
    array(
      'sub-cat-screens' => __( 'Sub Category Screens' )
    )
  );
}
add_action( 'init', 'sub_cat_screens' );

//

function sub_cat_pods() {
  register_nav_menus(
    array(
      'sub-cat-pods' => __( 'Sub Category Pods' )
    )
  );
}
add_action( 'init', 'sub_cat_pods' );

//

function sub_cat_office_accessories() {
  register_nav_menus(
    array(
      'sub-cat-office-accessories' => __( 'Sub Category Office Accessories' )
    )
  );
}
add_action( 'init', 'sub_cat_office_accessories' );

//

function sub_cat_reception() {
  register_nav_menus(
    array(
      'sub-cat-reception' => __( 'Sub Category Reception' )
    )
  );
}
add_action( 'init', 'sub_cat_reception' );

//

function sub_cat_brands() {
  register_nav_menus(
    array(
      'sub-cat-brands' => __( 'Sub Category Brands' )
    )
  );
}
add_action( 'init', 'sub_cat_brands' );

//

function sub_cat_clearance() {
  register_nav_menus(
    array(
      'sub-cat-clearance' => __( 'Sub Category Clearance' )
    )
  );
}
add_action( 'init', 'sub_cat_clearance' );

//



// ---------------- Woocommerce Reload cart on action with ajax

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
    <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
      <i class="fas fa-shopping-cart"></i>
      <p><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> </p>
      <!-- –  -->
      <?php // echo $woocommerce->cart->get_cart_total(); ?>
    </a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

// ----------------- Woocom Breadcrumbs
/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '';
	return $defaults;
}

// --------------------------------  Woocom Product Page single --------------------------------

// ---------- Show Ex Vat Price
function edit_price_display($price, $instance) {
  // if in product category
  if (is_shop() || is_product_category()){
    global $product;
    setlocale(LC_MONETARY,"en_GB");
    $price = $product->price;
    $price_excl_tax = round($price/(1.2), 2);
    $price_excl_tax = number_format($price_excl_tax, 2, ".", ".");
    $price = number_format($price, 2, ".", ".");
    $display_price = '<span class="price">';
    $display_price .= '<span class="amount exclude-prod-vat">from &#163; ' . $price_excl_tax .'<small class="woocommerce-price-suffix"> (Excl VAT)</small></span>';
    $display_price .= '<br>';
    $display_price .= '<span class="amount including-prod-vat">from &#163; ' . $price .'<small class="woocommerce-price-suffix"> </small></span>';
    $display_price .= '</span>';

    echo $display_price;
    echo  '<div>
            <div class="colour-swatch">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>';
  }
  // else
  else{
    global $product;
    setlocale(LC_MONETARY,"en_GB");
    // echo $product;

    $price = $product->price;
    $price_excl_tax = round($price/(1.2), 2);
    $price_excl_tax = number_format($price_excl_tax, 2, ".", ".");
    $price = number_format($price, 2, ".", ".");
    $display_price = '<span class="price">';
    $display_price .= '<span class="amount exclude-prod-vat">&#163; ' . $price_excl_tax .'<small class="woocommerce-price-suffix"> (Excl VAT)</small></span>';
    $display_price .= '<br>';
    $display_price .= '<span class="amount including-prod-vat">&#163; ' . $price .'<small class="woocommerce-price-suffix"> (Incl VAT)</small></span>';
    $display_price .= '</span>';

    echo $display_price;
  }
}
add_filter('woocommerce_get_price_html', 'edit_price_display', 10, 2);

// remove product description from single product pages
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
// add_filter( 'woocommerce_product_tabs', 'wc_remove_description_tab', 11, 1 );
// function wc_remove_description_tab( $tabs ) {
//     if ( isset( $tabs['description'] ) ) {
//         unset( $tabs['description'] );
//     }
// }


// --------- Order SKU meta
function meta_prod_reorder() {
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 6 );
}
add_action( 'init', 'meta_prod_reorder' );

// ------ Product desc order
function desc_reorder() {
  add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_excerpt', 30 );
}


// --------- Estimated dynamic delivery dates
function woocommerce_products_loop(){
    global $product;

    // Set Your shop time zone (http://php.net/manual/en/timezones.php)
    date_default_timezone_set('	Europe/London');

    $is_week_days  = in_array( date('w'), array( 1, 2, 3, 4 ) ) ? true : false; // From Monday to Thursday
    $is_friday     = date('w') == 5 ? true : false; // Friday
    $is_week_end   = in_array( date('w'), array( 0, 6 ) ) ? true : false; // Weekend days

    $end_time      = mktime('12', '00', '00', date('m'), date('d'), date('Y')); // 12h00
    $now_time      = time();

    $after_tomorow = date('l', strtotime('+2 days'));

    // Displayed day conditions
    if( $is_week_days && $now_time < $end_time ) {
        $displayed_day = date( 'l jS F', strtotime('+2 days') );
    } elseif( $is_week_days && $now_time >= $end_time ) {
        $displayed_day = date( 'l jS F', strtotime('+3 days') );
    } elseif( $is_friday && $now_time < $end_time ) {
        $displayed_day = date( 'l jS F', strtotime('+3 days') );
    } elseif( ( $is_friday && $now_time >= $end_time ) || $is_week_end ) {
        $$displayed_day = date( 'l jS F', strtotime('+4 days') );
    }

    // Dynamic text Output based on date and time
    echo '<div class="deliveryline"><p>' . __("<strong>Express Delivery</strong> <br> From ", "woocommerce") . $displayed_day .
        ' ' . __(" ", "woocommerce") . '</p> <p class="arrow"></p> </div>';
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_products_loop', 41 );


// ---------- Global Single Product social icons
function woocom_single_prod_social($post_id){
  // Call post ID to load acf through the hook loop
  $my_post = array();
  $my_post['ID'] = $post_id;

  // ACF
  $product_social_icon_1 = get_field("product_social_icon_1", 31510);
  $product_social_icon_2 = get_field("product_social_icon_2", 31510);
  $product_social_icon_3 = get_field("product_social_icon_3", 31510);

  if ( get_post_type( ) == 'product') {

    echo "<div class='prod-social-icons'><span>Let's Talk</span>
    " . $product_social_icon_1 . "" . $product_social_icon_2 . "" . $product_social_icon_3 . "
    </div>";

  }

}
add_action( 'woocommerce_single_product_summary', 'woocom_single_prod_social', 42 );


// ---------- Single Product Custom Description Columns
function woocom_single_prod_custom_desc($post_id){
  // Call post ID to load acf through the hook loop
  $my_post = array();
  $my_post['ID'] = $post_id;

  $single_product_custom_description_column_1 = get_field("single_product_custom_description_column_1");
  $single_product_custom_description_column_2 = get_field("single_product_custom_description_column_2");

  if ( get_post_type( ) == 'product') {

    echo "<section id='prodCustomDescColumns'>
            <div class='container'>
              <div class='row'>
                <div class='col-12'>
                  " . $single_product_custom_description_column_1 . " 
                </div>
              </div>
            </div>
          </section>";

  }

}
add_action( 'woocommerce_after_single_product_summary', 'woocom_single_prod_custom_desc', 43 );


// ----------- load blocks in product single
function woocom_singlie_prod_template_blocks_load() {
  //load news feed
  include_once( get_stylesheet_directory() .'/template-blocks/our-news-feed-block.php');
  //load info cta 
  include_once( get_stylesheet_directory() .'/template-blocks/info-cta-box-block.php');
  //load newsletter 
  include_once( get_stylesheet_directory() .'/template-blocks/newsletter-block.php');
}
add_action( 'woocommerce_after_single_product', 'woocom_singlie_prod_template_blocks_load', 50 );

// ----------- load blocks in product category
function woocom_singlie_prod_category_template_blocks_load() {
  //load news feed
  include_once( get_stylesheet_directory() .'/template-blocks/our-news-feed-block.php');
  //load info cta 
  include_once( get_stylesheet_directory() .'/template-blocks/info-cta-box-block.php');
  //load newsletter 
  include_once( get_stylesheet_directory() .'/template-blocks/newsletter-block.php');
}
add_action( 'woocommerce_sidebar', 'woocom_singlie_prod_category_template_blocks_load', 50 );

// ------------ Product Category products per page
// Change the Number of WooCommerce Products Displayed Per Page
function product_pagination_by_category() {
  if( is_product_category() )
      $limit = 100;

  return $limit;
}
add_filter( 'loop_shop_per_page', 'product_pagination_by_category');

// Changing add to cart text on button
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to basket', 'woocommerce' ); 
}

// Changing the placeholder on the Search bar
add_filter( 'wpex_get_header_menu_search_form_placeholder', function() {
	return __( 'Your custom text', 'Total' );
} );

// Adding Lightbox to products
if(class_exists('WooCommerce')){
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}


function my_custom_mime_types( $mimes ) {
  $mimes['csv'] = 'text/csv';
  unset( $mimes['exe'] );
   return $mimes;
  }
  add_filter( 'upload_mimes', 'my_custom_mime_types' );