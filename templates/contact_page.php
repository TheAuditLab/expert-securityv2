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

	$contact_page_form		= get_field('contact_page_form');

	$phone_icon				= get_field('phone_icon');
	$phone_icon_text		= get_field('phone_icon_text');
	$mail_icon				= get_field('mail_icon');
	$mail_icon_text			= get_field('mail_icon_text');
	$home_icon				= get_field('home_icon');
	$home_icon_text				= get_field('home_icon_text');

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
		<div class="container contact-page-form">
			<div class="contact-form-div">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2367.9121568465234!2d-2.339097!3d53.595029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ba703a761c8b5%3A0xa522df1429b1e6aa!2sExpert+Security+Systems+UK+Ltd!5e0!3m2!1sen!2suk!4v1429464705565" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='contact-map'></iframe>
				</div>
				<div class="contact-form">
					<h3>Send us a message</h3>
					<?php
						echo do_shortcode($contact_page_form);
					?>
				</div>
			</div>
		</div>
		<div class="container contact-info-div">
			<div class="contact-info">
				<span><img src="<?php echo $phone_icon['url']; ?>"></span>
				<p><?php echo $phone_icon_text; ?></p>
			</div>
			<div class="contact-info">
				<span><img src="<?php echo $mail_icon['url']; ?>"></span>
				<p><?php echo $mail_icon_text; ?></p>
			</div>
			<div class="contact-info">
				<span><img src="<?php echo $home_icon['url']; ?>"></span>
				<p><?php echo $home_icon_text; ?></p>
			</div>
		</div>
	</section>
<?php get_footer(); ?>