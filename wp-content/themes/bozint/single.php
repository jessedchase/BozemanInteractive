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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
		
		<div class="navigation">
		<p><?php previous_post_link(); ?> <?php next_post_link(); ?></p>
		</div>
		<hr/>
		<?php the_tags(); ?>
	</div>
	<?php get_footer(); ?>
</div>