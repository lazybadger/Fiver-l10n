<?php get_header(); ?>

  <article class="noposts">
  	<h2><?php _e('404 - Content Not Found','fiver' ); ?></h2>
  	<p><?php _e('We don&rsquo;t seem to be able to find the content you have requested - why not try a search below?','fiver' ); ?></p>
  	<?php get_search_form(); ?>
  </article>

<?php get_footer(); ?>