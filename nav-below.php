<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s Older Post', 'generic' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'Newer Post %s', 'generic' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args );