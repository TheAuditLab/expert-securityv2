<?php /* Template Name: Sectors Page*/ ?>
<?php get_header(); ?>

<?php 
	$sector_hero_image 	= get_field('sector_hero_image');
	$sector_hero_title 	= get_field('sector_hero_title');

	$sector_text			= get_field('sector_text');

	$sector_icon_1			= get_field('sector_icon_1');
	$sector_icon_1_text	= get_field('sector_icon_1_text');
	$sector_icon_2			= get_field('sector_icon_2');
	$sector_icon_2_text	= get_field('sector_icon_2_text');
	$sector_icon_3			= get_field('sector_icon_3');
	$sector_icon_3_text	= get_field('sector_icon_3_text');
	$sector_icon_bg 		= get_field('sector_icon_bg');

	$sector_page_form		= get_field('sector_page_form');

	$phone_icon				= get_field('phone_icon');
	$phone_icon_text		= get_field('phone_icon_text');
	$mail_icon				= get_field('mail_icon');
	$mail_icon_text			= get_field('mail_icon_text');
	$home_icon				= get_field('home_icon');
	$home_icon_text				= get_field('home_icon_text');

?>

	<section id="contact-page">
		<div class="hero-image" style="background-image: url('<?php echo $sector_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h1 class="title"><?php echo $sector_hero_title; ?><h1>
					</div>
				</div>
			</div>	
		</div>
		<div class="container contact-div">
			<div class="contact-text"><?php echo $sector_text; ?></div>
			<div class="contact-icon-div">
				<div class="contact-icon">
					<span><img src="<?php echo $sector_icon_1['url']; ?>"></span>
					<p><?php echo $sector_icon_1_text; ?></p>
				</div>
				<div class="contact-icon">
					<span><img src="<?php echo $sector_icon_2['url']; ?>"></span>
					<p><?php echo $sector_icon_2_text; ?></p>
				</div>
				<div class="contact-icon">
					<span><img src="<?php echo $sector_icon_3['url']; ?>"></span>
					<p><?php echo $sector_icon_3_text; ?></p>
				</div>
			</div>
		</div>
		<div class="contact-icon-bg" style="background-image: url('<?php echo $sector_icon_bg['url']; ?>')">
		<div class="container contact-page-form">
			<div class="contact-form-div">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2367.8994776370982!2d-2.342940584152164!3d53.595255230031945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ba45aa718ed29%3A0x1551faa76e25ce0a!2sBury%20BL8%203PA!5e0!3m2!1sen!2suk!4v1660813512592!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='contact-map'></iframe>
				</div>
				<div id="contact" class="contact-form">
					<h3>Send us a message</h3>
					<?php
						echo do_shortcode($sector_page_form);
					?>
				</div>
			</div>
		</div>
		<div class="container contact-info-div">
			<a href="<?php $phone_url ?>">
				<div class="contact-info">
					<span><img src="<?php echo $phone_icon['url']; ?>"></span>
					<p><?php echo $phone_icon_text; ?></p>
				</div>
			</a>
			<a href="<?php $mail_url ?>">
				<div class="contact-info">
					<span><img src="<?php echo $mail_icon['url']; ?>"></span>
					<p><?php echo $mail_icon_text; ?></p>
				</div>
			</a>
			<div class="contact-info">
				<span><img src="<?php echo $home_icon['url']; ?>"></span>
				<p><?php echo $home_icon_text; ?></p>
			</div>
		</div>
	</section>
<?php get_footer(); ?>