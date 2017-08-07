<?php get_header(); ?>
<div id="featured">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			echo '<div class="caption">'.get_post(get_post_thumbnail_id())->post_excerpt.'</div>';
		} 
		?>
</div>
<div id="content" class="cSide">
	<div class="container">
		<h1>Bozeman Website Design Blog</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</div>
	<?php get_footer(); ?>
</div>
