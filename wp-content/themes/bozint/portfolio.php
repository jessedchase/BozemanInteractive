<?php

/**
 * Portfolio Page Template
 *
   Template Name:  Portfolio Page
 *
 * @file           portfolio.php
 * @package        Bozeman Interactive
 * @author         Bozeman Interactive 
 * @copyright      2017 Bozeman Interactive
 */
get_header(); ?>
<div id="featured">
	<?php
		if ( has_post_thumbnail() ) {the_post_thumbnail();} 
	?>
</div>
<div id="content" class="cSide">
	<div class="container center">
			<div class="paddingtop">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1>Our Web and Graphic Design Clients!</h1>
					<strong class="subheading smallh1"> Bozeman Website Design and Bozeman Graphic Design</strong>
					<?php the_content(); ?>
					<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
				<?php endwhile; endif; ?>
			</div>
	</div>
	<div id="portfolio" class="center">
		<div class="container">
			<?php get_all_clients();?>
			<div class="clear"></div>
		</div>
	</div>
	<?php get_footer(); ?>
</div>