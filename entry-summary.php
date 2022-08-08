<div class="entry-summary">
<?php if ( ( has_post_thumbnail() ) && ( !is_search() ) ) : ?>
<?php endif; ?>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>