<?php /* Template Name: Services Page*/ ?>
<?php get_header(); ?>

<?php 
    //hero section
	$title 	= get_field('title');
    $services_hero_image = get_field('services_hero_image');
    $text_content = get_field('text_content');
    $row_number = get_field('row_number');

    //content row
    $image_row_1 = get_field('image_row_1');
    $text_row_1 = get_field('text_row_1');
    $image_row_2 = get_field('image_row_2');
    $text_row_2 = get_field('text_row_2');
    $image_row_3 = get_field('image_row_3');
    $text_row_3 = get_field('text_row_3');
    $image_row_4 = get_field('image_row_4');
    $text_row_4 = get_field('text_row_4');
    $image_row_5 = get_field('image_row_5');
    $text_row_5 = get_field('text_row_5');
    $image_row_6 = get_field('image_row_6');
    $text_row_6 = get_field('text_row_6');
    $image_row_7 = get_field('image_row_7');
    $text_row_7 = get_field('text_row_7');

    //contact form
    $contact_title = get_field('contact_title');
    $contact_form = get_field('contact_form');

?>

	<section id="services_page">
        <div class="row">
            <div class="col-12">
                <div class="hero-image" style="background-image: url('<?php echo $services_hero_image['url']; ?>')">
                    <div class="container">
                        <h1 class="title"><?php echo $title; ?></h1>
                        <a href="#content">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.png" class="arrow"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-content"><?php echo $text_content; ?></div>
				</div>
			</div>
		</div>
        <?php if ($row_number >= 3) {

            echo '<div class="row">
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_1['url'] . ')"></div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text_row">' . $text_row_1 . '</div>
                </div>
            </div>
            <div class="row flex-md-row flex-column-reverse">
                <div class="col-md-6 col-12">
                    <div class="text_row">' . $text_row_2 . '</div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_2['url'] . ')"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_3['url'] . ')"></div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text_row">' .  $text_row_3 . '</div>
                </div>
            </div>';
        }
        if ($row_number > 3) {
            echo '<div class="row flex-md-row flex-column-reverse">
                <div class="col-md-6 col-12">
                    <div class="text_row">' .  $text_row_4 . '</div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_4['url'] . ')"></div>
                </div>
            </div>';
        }
        if ($row_number > 4) {
            echo '<div class="row">
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_5['url'] . ')"></div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text_row">' . $text_row_5 . '</div>
                </div>
            </div>';
        }
        if ($row_number > 5) {
            echo '<div class="row flex-md-row flex-column-reverse">
                <div class="col-md-6 col-12">
                    <div class="text_row">' .  $text_row_6 . '</div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_6['url'] . ')"></div>
                </div>
            </div>';
        }
        if ($row_number > 6) {
            echo '<div class="row">
                <div class="col-md-6 col-12">
                    <div class="image_row"  style="background-image: url(' .  $image_row_7['url'] . ')"></div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text_row">' . $text_row_7 . '</div>
                </div>
            </div>';
        }
        ?>
        
        
        

        <div class="container">
			<div class="row">
				<div class="col-12">
                    <h3 class="contact-title"> <?php echo $contact_title ?></h3>
					<div class="contact-form"><?php echo do_shortcode($contact_form);  ?></div>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>