<?php 
    $team_text = get_field("team_text", 5);
    $team_btn_link = get_field("team_btn_link", 5);
    $team_btn_text = get_field("team_btn_text",5);

    $team_1_image = get_field("team_1_image", 5);
    $team_1_text = get_field("team_1_text", 5);

    $team_2_image = get_field("team_2_image",5);
    $team_2_text = get_field("team_2_text",5);

    $team_3_image = get_field("team_3_image",5);
    $team_3_text = get_field("team_3_text",5);
?>

<section id="team-block">
    <div class="container">
        <div class="team-block">
            <div class="team-text">
                <?php echo $team_text; ?>
                <a href="<?php echo $team_btn_link ?>"><p class="team-btn"><?php echo $team_btn_text ?></p></a>
            </div>
            <div class="team-images">
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
    </div>
</section>