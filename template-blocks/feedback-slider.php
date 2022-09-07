<?php
    // feedback Slider

    $feedback_title    = get_field('feedback_title', 383);
    $feedback_bg_image = get_field('feedback_bg_image', 383);

    $feedback_slider_1 = get_field('feedback_slider_1', 383); 
    $feedback_slider_2 = get_field('feedback_slider_2', 383); 
    $feedback_slider_3 = get_field('feedback_slider_3', 383); 
    $feedback_slider_4 = get_field('feedback_slider_4', 383); 
?>

<section id="feedbackSlider" style="background-image: url('<?php echo $feedback_bg_image['url']; ?>');">
    <h2> <?php echo $feedback_title ?> </h2>
    <div class="slider feedback-slider">
        <?php
            if(($feedback_slider_1)){
        ?>
        <div class="feeback">
            <?php echo $feedback_slider_1 ?>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($feedback_slider_2)){
        ?>
        <div class="feedback">
            <?php echo $feedback_slider_2 ?>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($feedback_slider_3)){
        ?>
          <div class="feedback">
            <?php echo $feedback_slider_3 ?>
        </div>
        <?php
            }
            else{

            }
        ?> 
        <?php
            if(($feedback_slider_4)){
        ?>
            <div class="feedback">
                <?php echo $feedback_slider_4 ?>
            </div>
        <?php
            }
            else{

            }
        ?> 
    </div>
</section>