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
		<div class="paddingtop">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
		<h1 class="entry-title"><?php the_title(); ?></h1> 
		</header>
		<section class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
		</section>
		</article>
		<?php endwhile; endif; ?>
		<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
		</div>
	</div>
	<?php get_footer(); ?>
</div>