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

    //team members
    $team_1_image = get_field("team_1_image", 5);
    $team_1_text = get_field("team_1_text", 5);

    $team_2_image = get_field("team_2_image",5);
    $team_2_text = get_field("team_2_text",5);

    $team_3_image = get_field("team_3_image",5);
    $team_3_text = get_field("team_3_text",5);
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
                <div class="about-us-image-1">
                    <img src="<?php echo $about_us_image_1['url']; ?>" alt="<?php echo $about_us_image_1['alt']; ?>">
                    <div class="about-us-image-info"><?php echo $about_us_image_info; ?></div>
                </div>
                <div class="about-us-image-2" ><img src="<?php echo $about_us_image_2['url']; ?>" alt="<?php echo $about_us_image_2['alt']; ?>"></div>
            </div>
        </div>
    </div>
        <div id="latest-work" class="latest-work" style="background-image: url('<?php echo $latest_work_bg['url']; ?>')">
            <div class="latest-work-text">
                <?php echo $latest_work_text; ?>
            </div>
        </div>
    <div class="container">
        <div class="latest-work-div">
            <div class="work-image">
                <img src="<?php echo $latest_work_image_1['url']; ?>" alt="<?php echo $latest_work_image_1['alt']; ?>">
            </div>
            <div class="work-image">
                <img src="<?php echo $latest_work_image_2['url']; ?>" alt="<?php echo $latest_work_image_2['alt']; ?>">
            </div>
            <div class="work-image">
                <img src="<?php echo $latest_work_image_3['url']; ?>" alt="<?php echo $latest_work_image_3['alt']; ?>">
            </div>
        </div>
        <div class="team-members">
            <div class="team-title">
                <h2>Our Professional Team</h2>
            </div>
            <div class="team-div">
                <img src="<?php echo $team_1_image['url']; ?>" alt="<?php echo $team_1_image['alt']; ?>">
                <div><?php echo $team_1_text ?></div>
            </div>
            <div class="team-div">
                <img src="<?php echo $team_2_image['url']; ?>" alt="<?php echo $team_2_image['alt']; ?>">
                <div><?php echo $team_2_text ?></div>
            </div>
            <div class="team-div">
                <img src="<?php echo $team_3_image['url']; ?>" alt="<?php echo $team_3_image['alt']; ?>">
                <div><?php echo $team_3_text ?></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>