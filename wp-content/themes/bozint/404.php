<?php get_header(); ?>
<div id="featured">
	<?php
		if ( has_post_thumbnail() ) {the_post_thumbnail();} 
	?>
</div>
<div id="content" class="cSide">
	<div class="container center">
		<article id="post-0" class="post not-found">
		<header class="header">
		<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
		</header>
		<section class="entry-content">
		<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
		<?php get_search_form(); ?>
		</section>
		</article>
	</div>
	<?php get_footer(); ?>
</div>