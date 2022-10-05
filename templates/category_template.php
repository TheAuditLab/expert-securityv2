<?php /* Template Name: Category Template*/ ?>
<?php get_header(); ?>

<?php 
	$category_hero_image 	= get_field('category_hero_image');
	$category_hero_title 	= get_field('category_hero_title');
	$category_title 	= get_field('category_title');

	$category_text		= get_field('category_text');
	$category_bg_image    = get_field('category_bg_image');   

	$category_1 	= get_field('category_1');
	$category_2 	= get_field('category_2');
	$category_3 	= get_field('category_3');
	$category_4 	= get_field('category_4');
	$category_5 	= get_field('category_5');
	$category_6		= get_field('category_6');
	$category_7 	= get_field('category_7');
	$category_8 	= get_field('category_8');
	$category_9 	= get_field('category_9');
	$category_10 	= get_field('category_10');

	$category_11 	= get_field('category_11');
	$category_12 	= get_field('category_12');
	$category_13 	= get_field('category_13');
	$category_14 	= get_field('category_14');
	$category_15 	= get_field('category_15');
	$category_16	= get_field('category_16');
	$category_17 	= get_field('category_17');
	$category_18 	= get_field('category_18');
	$category_19 	= get_field('category_19');
	$category_20 	= get_field('category_20');

	$category_21 	= get_field('category_21');
	$category_22 	= get_field('category_22');
	$category_23 	= get_field('category_23');
	$category_24 	= get_field('category_24');
	$category_25 	= get_field('category_25');
	$category_26	= get_field('category_26');
	$category_27 	= get_field('category_27');
	$category_28 	= get_field('category_28');
	$category_29 	= get_field('category_29');
	$category_30 	= get_field('category_30');

	$category_31 	= get_field('category_31');
	$category_32 	= get_field('category_32');
	$category_33 	= get_field('category_33');
	$category_34 	= get_field('category_34');
	$category_35 	= get_field('category_35');
	$category_36	= get_field('category_36');
	$category_37 	= get_field('category_37');
	$category_38 	= get_field('category_38');
	$category_39 	= get_field('category_39');
	$category_40 	= get_field('category_40');

	$enquiry_form				= get_field('enquiry_form', 5);


?>

	<section id="category-template">
		<div class="hero-image" style="background-image: url('<?php echo $category_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">	
						<h1 class="title"><?php echo $category_hero_title; ?><h1>
					</div>
				</div>
			</div>	
		</div>
		<div class="container info-block">
			<div class="category-text"><?php echo $category_text; ?></div>
			<div class="enquiry-form">
				<span class="enquiry-title">Enquire here</span>
				<?php
					echo do_shortcode($enquiry_form);
				?>
			</div>
		</div>
		<div class="category-template" style="background-image: url('<?php echo $category_bg_image['url']; ?>')">
			<div class="container">
				<h2><?php echo $category_title ?></h2>
				<div class="category-div">
					<?php if ( $category_1 ) { ?>
						<a href="<?php echo the_permalink($category_1->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_1->ID) ?>')">
									<h4> <?php echo get_the_title($category_1->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_2 ) { ?>
						<a href="<?php echo the_permalink($category_2->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_2->ID) ?>')">
									<h4> <?php echo get_the_title($category_2->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_3 ) { ?>
						<a href="<?php echo the_permalink($category_3->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_3->ID) ?>')">
									<h4> <?php echo get_the_title($category_3->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_4 ) { ?>
						<a href="<?php echo the_permalink($category_4->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_4->ID) ?>')">
									<h4> <?php echo get_the_title($category_4->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_5 ) { ?>
						<a href="<?php echo the_permalink($category_5->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_5->ID) ?>')">
									<h4> <?php echo get_the_title($category_5->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_6 ) { ?>
						<a href="<?php echo the_permalink($category_6->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_6->ID) ?>')">
									<h4> <?php echo get_the_title($category_6->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_7 ) { ?>
						<a href="<?php echo the_permalink($category_7->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_7->ID) ?>')">
									<h4> <?php echo get_the_title($category_7->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_8 ) { ?>
						<a href="<?php echo the_permalink($category_8->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_8->ID) ?>')">
									<h4> <?php echo get_the_title($category_8->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_9 ) { ?>
						<a href="<?php echo the_permalink($category_9->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_9->ID) ?>')">
									<h4> <?php echo get_the_title($category_9->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_10 ) { ?>
						<a href="<?php echo the_permalink($category_10->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_10->ID) ?>')">
									<h4> <?php echo get_the_title($category_10->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_11 ) { ?>
					<a href="<?php echo the_permalink($category_11->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_11->ID) ?>')">
									<h4> <?php echo get_the_title($category_11->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_12 ) { ?>
						<a href="<?php echo the_permalink($category_12->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_12->ID) ?>')">
									<h4> <?php echo get_the_title($category_12->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_13 ) { ?>
						<a href="<?php echo the_permalink($category_13->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_13->ID) ?>')">
									<h4> <?php echo get_the_title($category_13->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_14 ) { ?>
						<a href="<?php echo the_permalink($category_14->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_14->ID) ?>')">
									<h4> <?php echo get_the_title($category_14->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_15 ) { ?>
						<a href="<?php echo the_permalink($category_15->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_15->ID) ?>')">
									<h4> <?php echo get_the_title($category_15->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_16 ) { ?>
						<a href="<?php echo the_permalink($category_16->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_16->ID) ?>')">
									<h4> <?php echo get_the_title($category_16->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_17 ) { ?>
						<a href="<?php echo the_permalink($category_17->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_17->ID) ?>')">
									<h4> <?php echo get_the_title($category_17->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_18 ) { ?>
						<a href="<?php echo the_permalink($category_18->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_18->ID) ?>')">
									<h4> <?php echo get_the_title($category_18->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_19 ) { ?>
						<a href="<?php echo the_permalink($category_19->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_19->ID) ?>')">
									<h4> <?php echo get_the_title($category_19->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					
					<?php if ( $category_20 ) { ?>
						<a href="<?php echo the_permalink($category_20->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_20->ID) ?>')">
									<h4> <?php echo get_the_title($category_20->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_21 ) { ?>
					<a href="<?php echo the_permalink($category_21->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_21->ID) ?>')">
									<h4> <?php echo get_the_title($category_21->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_22 ) { ?>
						<a href="<?php echo the_permalink($category_22->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_22->ID) ?>')">
									<h4> <?php echo get_the_title($category_22->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_23 ) { ?>
						<a href="<?php echo the_permalink($category_23->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_23->ID) ?>')">
									<h4> <?php echo get_the_title($category_23->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_24 ) { ?>
						<a href="<?php echo the_permalink($category_24->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_24->ID) ?>')">
									<h4> <?php echo get_the_title($category_24->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_25 ) { ?>
						<a href="<?php echo the_permalink($category_25->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_25->ID) ?>')">
									<h4> <?php echo get_the_title($category_25->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_26 ) { ?>
						<a href="<?php echo the_permalink($category_26->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_26->ID) ?>')">
									<h4> <?php echo get_the_title($category_26->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_27 ) { ?>
						<a href="<?php echo the_permalink($category_27->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_27->ID) ?>')">
									<h4> <?php echo get_the_title($category_27->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_28 ) { ?>
						<a href="<?php echo the_permalink($category_28->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_28->ID) ?>')">
									<h4> <?php echo get_the_title($category_28->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_29 ) { ?>
						<a href="<?php echo the_permalink($category_29->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_29->ID) ?>')">
									<h4> <?php echo get_the_title($category_29->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_30 ) { ?>
						<a href="<?php echo the_permalink($category_30->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_30->ID) ?>')">
									<h4> <?php echo get_the_title($category_30->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>


					<?php if ( $category_31 ) { ?>
					<a href="<?php echo the_permalink($category_31->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_31->ID) ?>')">
									<h4> <?php echo get_the_title($category_31->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_32 ) { ?>
						<a href="<?php echo the_permalink($category_32->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_32->ID) ?>')">
									<h4> <?php echo get_the_title($category_32->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_33 ) { ?>
						<a href="<?php echo the_permalink($category_33->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_33->ID) ?>')">
									<h4> <?php echo get_the_title($category_33->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_34 ) { ?>
						<a href="<?php echo the_permalink($category_34->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_34->ID) ?>')">
									<h4> <?php echo get_the_title($category_34->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_35 ) { ?>
						<a href="<?php echo the_permalink($category_35->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_35->ID) ?>')">
									<h4> <?php echo get_the_title($category_35->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_36 ) { ?>
						<a href="<?php echo the_permalink($category_36->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_36->ID) ?>')">
									<h4> <?php echo get_the_title($category_36->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_37 ) { ?>
						<a href="<?php echo the_permalink($category_37->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_37->ID) ?>')">
									<h4> <?php echo get_the_title($category_37->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_38 ) { ?>
						<a href="<?php echo the_permalink($category_38->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_38->ID) ?>')">
									<h4> <?php echo get_the_title($category_38->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_39 ) { ?>
						<a href="<?php echo the_permalink($category_39->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_39->ID) ?>')">
									<h4> <?php echo get_the_title($category_39->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
					<?php if ( $category_40 ) { ?>
						<a href="<?php echo the_permalink($category_40->ID); ?>">
							<div class="category-item" style="background-image: url('<?php echo get_the_post_thumbnail_url($category_40->ID) ?>')">
									<h4> <?php echo get_the_title($category_40->ID) ?> </h4>
							</div>
						</a>
					<?php } ?>
				</div>
			</div>
	</section>
<?php get_footer(); ?>