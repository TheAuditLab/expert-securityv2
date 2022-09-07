<?php /* Template Name: Security Solutions Page*/ ?>
<?php get_header(); ?>

<?php 
	$security_solutions_hero_image 	= get_field('security_solutions_hero_image');
	$security_solutions_hero_title 	= get_field('security_solutions_hero_title');

	$security_solutions_text		= get_field('security_solutions_text');
	$security_solutions_bg_image    = get_field('security_solutions_bg_image');   

	$security_solution_1 	= get_field('security_solution_1');
	$solution_1 = get_field( 'hero_image', $security_solution_1 );

	$security_solution_2 	= get_field('security_solution_2');
	$solution_2 = get_field( 'hero_image', $security_solution_2 );

	$security_solution_3 	= get_field('security_solution_3');
	$solution_3 = get_field( 'hero_image', $security_solution_3 );

	$security_solution_4 	= get_field('security_solution_4');
	$solution_4 = get_field( 'hero_image', $security_solution_4 );

	$security_solution_5 	= get_field('security_solution_5');
	$solution_5 = get_field( 'hero_image', $security_solution_5 );

	$security_solution_6	= get_field('security_solution_6');
	$solution_6 = get_field( 'hero_image', $security_solution_6 );

	$security_solution_7 	= get_field('security_solution_7');
	$solution_7 = get_field( 'hero_image', $security_solution_7 );

	$security_solution_8 	= get_field('security_solution_8');
	$solution_8 = get_field( 'hero_image', $security_solution_8 );

	$security_solution_9 	= get_field('security_solution_9');
	$solution_9 = get_field( 'hero_image', $security_solution_9 );

	$security_solution_10 	= get_field('security_solution_10');
	$solution_10 = get_field( 'hero_image', $security_solution_10 );

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
					<a href="/security-solutions/<?php echo $security_solution_1->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_1['url'] ?>')">
								<h4> <?php echo $security_solution_1->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_2->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_2['url'] ?>')">
								<h4> <?php echo $security_solution_2->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_3->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_3['url'] ?>')">
								<h4> <?php echo $security_solution_3->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_4->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_4['url'] ?>')">
								<h4> <?php echo $security_solution_4->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_5->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_5['url'] ?>')">
								<h4> <?php echo $security_solution_5->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_6->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_6['url'] ?>')">
								<h4> <?php echo $security_solution_6->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_7->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_7['url'] ?>')">
								<h4> <?php echo $security_solution_7->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_8->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_8['url'] ?>')">
								<h4> <?php echo $security_solution_8->name ?> </h4>
						</div>
					</a>
					<a href="/security-solutions/<?php echo $security_solution_9->slug ?>">
						<div class="security-solution" style="background-image: url('<?php echo $solution_9['url'] ?>')">
								<h4> <?php echo $security_solution_9->name ?> </h4>
						</div>
					</a>
				</div>
			</div>
	</section>
<?php get_footer(); ?>