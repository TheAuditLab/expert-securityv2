<?php 
    $enquire_bg = get_field("enquire_bg");
    $enquire_text = get_field("enquire_text");
    $enquire_button_link = get_field("enquire_button_link");
    $enquire_button_text = get_field("enquire_button_text");
?>

<section id="enquire-block" style="background-image: url('<?php echo $enquire_bg['url']; ?>');" alt="<?php echo $enquire_bg['alt']?>">
    <div class="container">
        <div class="enquire-block">
            <div class="enquire_text"><?php echo $enquire_text; ?></div>
            <a class="enquire-btn" href="<?php echo $enquire_button_link ?>"><?php echo $enquire_button_text ?></a>
        </div>
    </div>
</section>