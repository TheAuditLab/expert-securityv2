<?php /* Template Name: Text Page*/ ?>
<?php get_header(); ?>

<?php 
	$text_content 	= get_field('text_content');
?>

	<section id="text_page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-content"><?php echo $text_content; ?></div>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>