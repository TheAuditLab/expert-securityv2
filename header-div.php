<?php if ( is_singular() ) {?>
    
        <div class="header-div">
        <div class="hero-image" style="background-image: url('<?php echo $product_hero_bg['url']; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-12">			
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <?php
}?> 
