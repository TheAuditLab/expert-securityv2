<?php /* Template Name: About Us Page*/ ?>
<?php get_header(); ?>
<?php 
	$about_us_hero_image 	= get_field('about_us_hero_image');
	$about_us_hero_title 	= get_field('about_us_hero_title');

    //about us 
	$about_us_text			= get_field('about_us_text');
	$about_us_image_1	    = get_field('about_us_image_1');
    $about_us_image_2		= get_field('about_us_image_2');
    $about_us_image_info	= get_field('about_us_image_info');

    //latest work section
    $latest_work_text       = get_field('latest_work_text');
    $latest_work_bg         = get_field('latest_work_bg');
    $latest_work_image_1    = get_field('latest_work_image_1');
    $latest_work_image_2    = get_field('latest_work_image_2');
    $latest_work_image_3    = get_field('latest_work_image_3');
?>

<section id="about-us">
    <div class="hero-image" style="background-image: url('<?php echo $about_us_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h2 class="title"><?php echo $about_us_hero_title; ?><h2>
					</div>
				</div>
			</div>	
		</div>
    <div class="container">
        <div class="about-us-info">
            <div class="about-us-info-text">
                <?php echo $about_us_text; ?>
            </div>
            <div class="about-us-info-image">
                <span class="about-us-image-1"><img src="<?php echo $about_us_image_1['url']; ?>" alt="<?php echo $about_us_image_1['alt']; ?>">
                    <div class="about-us-image-info"><?php echo $about_us_image_info; ?></div>
                </span>
                <span class="about-us-image-2" ><img src="<?php echo $about_us_image_2['url']; ?>" alt="<?php echo $about_us_image_2['alt']; ?>"></span>
            </div>
        </div>
    </div>
        <div class="latest-work" style="background-image: url('<?php echo $latest_work_bg['url']; ?>')">
            <div class="latest-work-text">
                <?php echo $latest_work_text; ?>
            </div>
        </div>
    <div class="container">
        <div class="team-block">
            <div class="team-text">
                <?php echo $team_text; ?>
                <a href="<?php $team_btn_link ?>"><p class="team-btn"><?php echo $team_btn_text ?></p></a>
            </div>
            <div class="team-images">
                <div class="team-div">
                    <img src="<?php echo $latest_work_image_1['url']; ?>" alt="<?php echo $latest_work_image_1['alt']; ?>">
                    <div><?php echo $team_1_text ?></div>
                </div>
                <div class="team-div">
                    <img src="<?php echo $latest_work_image_2['url']; ?>" alt="<?php echo $latest_work_image_2['alt']; ?>">
                    <div><?php echo $team_2_text ?></div>
                </div>
                <div class="team-div">
                    <img src="<?php echo $latest_work_image_3['url']; ?>" alt="<?php echo $latest_work_image_3['alt']; ?>">
                    <div><?php echo $team_3_text ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>