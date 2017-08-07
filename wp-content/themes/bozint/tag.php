<?php get_header(); ?>
<div id="featured">
	<?php
		if ( has_post_thumbnail() ) {the_post_thumbnail();} 
	?>
</div>
<div id="content" class="cSide">
	<div class="container center">
		
		<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
		

	</div>
	<?php get_footer(); ?>
</div>