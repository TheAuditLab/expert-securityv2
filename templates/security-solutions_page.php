<?php /* Template Name: Security Solutions Page*/ ?>
<?php get_header(); ?>

<?php 
	$security_solutions_hero_image 	= get_field('security_solutions_hero_image');
	$security_solutions_hero_title 	= get_field('security_solutions_hero_title');

	$security_solutions_text		= get_field('security_solutions_text');
	$security_solutions_bg_image    = get_field('security_solutions_bg_image');   

	$security_solution_1 	= get_field('security_solution_1');
	$security_solution_1_name =  $security_solution_1->post_title;
	$security_solution_1_url =  $security_solution_1->guid;


	$security_solution_2 	= get_field('security_solution_2');
	$security_solution_2_name =  $security_solution_2->post_title;
	$security_solution_2_url =  $security_solution_2->guid;

	$security_solution_3 	= get_field('security_solution_3');
	$security_solution_3_name =  $security_solution_3->post_title;
	$security_solution_3_url =  $security_solution_3->guid;

	$security_solution_4 	= get_field('security_solution_4');
	$security_solution_4_name =  $security_solution_4->post_title;
	$security_solution_4_url =  $security_solution_4->guid;

	$security_solution_5 	= get_field('security_solution_5');
	$security_solution_5_name =  $security_solution_5->post_title;
	$security_solution_5_url =  $security_solution_5->guid;




	$security_solutions_page_form		= get_field('security_solutions_page_form');

	$phone_icon				= get_field('phone_icon');
	$phone_icon_text		= get_field('phone_icon_text');
	$mail_icon				= get_field('mail_icon');
	$mail_icon_text			= get_field('mail_icon_text');
	$home_icon				= get_field('home_icon');
	$home_icon_text				= get_field('home_icon_text');

	$enquiry_form				= get_field('enquiry_form', 5);

?>

	<section id="security-solutions">
		<div class="hero-image" style="background-image: url('<?php echo $security_solutions_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h2 class="title"><?php echo $security_solutions_hero_title; ?><h2>
					</div>
				</div>
			</div>	
		</div>
		<div class="container info-block">
			<div class="security-solutions-text"><?php echo $security_solutions_text; ?></div>
			<div class="enquiry-form">
				<span class="enquiry-title">Enquire here</span>
				<?php
					echo do_shortcode($enquiry_form);
				?>
			</div>
		</div>
		<div class="security-solutions" style="background-image: url('<?php echo $security_solutions_bg_image['url']; ?>')">
			<div class="container">
				<h2><?php echo $security_solutions_hero_title ?></h2>
				<div class="security-solutions-div">
				
					<div class="security-solution" style="background-image: url('<?php echo (get_the_post_thumbnail_url( $security_solution_1 )) ?>')">
						<a href="<?php echo $security_solution_1_url ?>">
							<h3><?php echo $security_solution_1_name; ?></h3>
						</a>
					</div>
					<div class="security-solution" style="background-image: url('<?php echo (get_the_post_thumbnail_url( $security_solution_2 )) ?>')">
						<a href="<?php echo $security_solution_2_url ?>">
							<h3><?php echo $security_solution_2_name; ?></h3>
						</a>
					</div>
					<div class="security-solution" style="background-image: url('<?php echo (get_the_post_thumbnail_url( $security_solution_3 )) ?>')">
						<a href="<?php echo $security_solution_3_url ?>">
							<h3><?php echo $security_solution_3_name; ?></h3>
						</a>
					</div>
					<div class="security-solution" style="background-image: url('<?php echo (get_the_post_thumbnail_url( $security_solution_4 )) ?>')">
						<a href="<?php echo $security_solution_4_url ?>">
							<h3><?php echo $security_solution_4_name; ?></h3>
						</a>
					</div>
				</div>
			</div>
	</section>
<?php get_footer(); ?>