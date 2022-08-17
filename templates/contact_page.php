<?php /* Template Name: Contact Page*/ ?>
<?php get_header(); ?>

<?php 
	$contact_hero_image 	= get_field('contact_hero_image');
	$contact_hero_title 	= get_field('contact_hero_title');

	$contact_text			= get_field('contact_text');

	$contact_icon_1			= get_field('contact_icon_1');
	$contact_icon_1_text	= get_field('contact_icon_1_text');
	$contact_icon_2			= get_field('contact_icon_2');
	$contact_icon_2_text	= get_field('contact_icon_2_text');
	$contact_icon_3			= get_field('contact_icon_3');
	$contact_icon_3_text	= get_field('contact_icon_3_text');
	$contact_icon_bg 		= get_field('contact_icon_bg');

?>

	<section id="contact-page">
		<div class="hero-image" style="background-image: url('<?php echo $contact_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h2 class="title"><?php echo $contact_hero_title; ?><h2>
					</div>
				</div>
			</div>	
		</div>
		<div class="container contact-div">
			<div class="contact-text"><?php echo $contact_text; ?></div>
			<div class="contact-icon-div">
				<div class="contact-icon">
					<span><img src="<?php echo $contact_icon_1['url']; ?>"></span>
					<p><?php echo $contact_icon_1_text; ?></p>
				</div>
				<div class="contact-icon">
					<span><img src="<?php echo $contact_icon_2['url']; ?>"></span>
					<p><?php echo $contact_icon_2_text; ?></p>
				</div>
				<div class="contact-icon">
					<span><img src="<?php echo $contact_icon_3['url']; ?>"></span>
					<p><?php echo $contact_icon_3_text; ?></p>
				</div>
			</div>
		</div>
		<div class="contact-icon-bg" style="background-image: url('<?php echo $contact_icon_bg['url']; ?>')">

	</section>
<?php get_footer(); ?>