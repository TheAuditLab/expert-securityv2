<?php
    // Info CTA box
    $info_cta_box_main_text = get_field("info_cta_box_main_text", 17);
?>

<?php
	if(($info_cta_box_main_text)){
?>  
    </div>
    <section id="ctaInfoBox">
        <div class="row ">
            <?php echo $info_cta_box_main_text ?>
        </div>
    </section>
<?php
	}
	    else{

	}
?>   