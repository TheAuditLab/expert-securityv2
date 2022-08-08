<?php /* Template Name: Contact Page*/ ?>
<?php get_header(); ?>

<?php 
	$contact_hero_image 	= get_field('contact_hero_image');
	$contact_hero_title 	= get_field('contact_hero_title');
	$contact_section_content 	= get_field('contact_section_content');
	$contact_text 	= get_field('contact_text');
	$shortcode 	= get_field('shortcode');

	$embed_code = get_field('embed_code');
	$text_field = get_field('text_field');
	$matterport_url = get_field('matterport_url')

?>

	<section id="contact">
		<div class="hero-image" style="background-image: url('<?php echo $contact_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h2 class="title"><?php echo $contact_hero_title; ?><h2>
					</div>
				</div>
			</div>	
			<a href="#content-div">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.png" class="arrow"/></a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 content-div" id="content-div">
					<div class="contact-content"><?php echo $contact_section_content; ?></div>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<div class="info-div">
				<div class="contact-text"><?php echo $contact_text; ?></div>
			</div>
			<div class="contact-div">
				<?php echo do_shortcode($shortcode); ?>
			</div>
		</div>
		<div class="col-12 map">
			<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" zoom="10" src="<?php echo $embed_code; ?>" title="Diamond Business Interiors Limited, Wigan, WN6 7TF." aria-label="Diamond Business Interiors Limited, 4 Horton Street, Wigan, WN6 7TF."></iframe>
		</div>
		<div id="id">
			<div class="matterport">
				<iframe height="480" src="https://my.matterport.com/show/?m=bYcGzN7kNEV" frameborder="0" allowfullscreen allow="xr-spatial-tracking"></iframe>
			</div>
		</div>
		<div class="w-100 container">
			<div class="text-content p2"><?php echo $text_field; ?></div>
		</div>
	</section>
	<?php   
        //load newsletter
		include_once( get_stylesheet_directory() .'/template-blocks/newsletter-block.php');
    ?>
	

<?php get_footer(); ?>