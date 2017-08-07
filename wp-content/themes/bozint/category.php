<?php get_header(); ?>
<div id="featured">
	<?php
		if ( has_post_thumbnail() ) {the_post_thumbnail();} 
	?>
</div>
<div id="content" class="cSide">
	<div class="container">
			<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
			<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
	</div>
	<?php get_footer(); ?>
</div>
