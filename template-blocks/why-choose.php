<?php 
    $why_choose_text = get_field("why_choose_text");
    $why_choose_bg = get_field("why_choose_bg");

    $why_choose_1_image = get_field("why_choose_1_image");
    $why_choose_1_text = get_field("why_choose_1_text");

    $why_choose_2_image = get_field("why_choose_2_image");
    $why_choose_2_text = get_field("why_choose_2_text");

    $why_choose_3_image = get_field("why_choose_3_image");
    $why_choose_3_text = get_field("why_choose_3_text");
?>

<section id="why-choose">
    <div class="why-choose" style="background-image: url('<?php echo $why_choose_bg['url']; ?>');">
        <div class="container">
            <div class="why-choose-text"><?php echo $why_choose_text; ?></div>
            <div class="why-choose-div">
                <div>
                    <img src="<?php echo $why_choose_1_image['url']; ?>">
                    <p><?php echo $why_choose_1_text; ?></p>
                </div>
                <div>
                    <img src="<?php echo $why_choose_2_image['url']; ?>">
                    <p><?php echo $why_choose_2_text; ?></p>
                </div>
                <div>
                    <img src="<?php echo $why_choose_3_image['url']; ?>">
                    <p><?php echo $why_choose_3_text; ?></p>
                </div>
            </div>
            <div class="stats-div">
                <div>
                    <p class="percentage">100%</p>
                    <div id="circle-loader-wrap">
                        <div class="l-wrap">
                            <div class="loader"></div>	
                        </div>
                        <div class="r-wrap">
                            <div class="loader"></div>
                        </div>
                    </div>
                    <p>Projects Completed</p>
                </div>
                <div>
                    <p class="percentage">100%</p>
                    <div id="circle-loader-wrap">
                        <div class="l-wrap">
                            <div class="loader"></div>	
                        </div>
                        <div class="r-wrap">
                            <div class="loader"></div>
                        </div>
                    </div>
                    <p>Security</p>
                </div>
                <div>
                    <p class="percentage">100%</p>
                    <div id="circle-loader-wrap">
                        <div class="l-wrap ">
                            <div class="loader"></div>	
                        </div>
                        <div class="r-wrap">
                            <div class="loader"></div>
                        </div>
                    </div>
                        <p>Support Network</p>
                    </div>
                <div>
                    <p class="percentage">100%</p>
                    <div id="circle-loader-wrap">
                        <div class="l-wrap">
                            <div class="loader"></div>	
                        </div>
                        <div class="r-wrap">
                            <div class="loader"></div>
                        </div>
                    </div><p>Job Satisfaction</p></div>
            </div>
        </div>
      
    </div>
</section>