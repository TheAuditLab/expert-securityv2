<?php /* Template Name: Text Page*/ ?>
<?php get_header(); ?>

<?php 
	$text_content 	= get_field('text_content');

	$text_content_hero_section 	= get_field('text_content_hero_section');
	$text_content_hero_image 	= get_field('text_content_hero_image');
	$text_content_hero_title 	= get_field('text_content_hero_title');
?>

	<section id="text_page">
		<?php if ( $text_content_hero_section === 'yes') { ?>
			<div class="hero-image" style="background-image: url('<?php echo $text_content_hero_image['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-12">			
							<h2 class="title"><?php echo $text_content_hero_title; ?><h2>
						</div>
					</div>
				</div>	
			</div>
		<?php
            } 
        ?> 
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-content"><?php echo get_the_content() ?></div>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>