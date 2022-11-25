<?php get_header(); ?>
<div class="container">
    <article id="post-0" class="post not-found">
    <header class="header">
    <h1 class="entry-title" itemprop="name">404</h1>
    </header>
    <div class="entry-content" itemprop="mainContentOfPage">
    <p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'generic' ); ?></p>
    <?php get_search_form(); ?>
    </div>
    </article>
</div>
<?php get_footer(); ?>