<?php

/**
 * Contact Page Template
 *
   Template Name:  Contact Page
 *
 * @file           contact.php
 * @package        Bozeman Interactive
 * @author         Bozeman Interactive 
 * @copyright      2017 Bozeman Interactive
 */
get_header(); ?>
<div id="content" class="cSide">
	<div id="featured">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				echo '<div class="caption homepagecaption">'.get_post(get_post_thumbnail_id())->post_excerpt.'</div>';
			} 
		?>
	</div>
	<div class="container center">
			<div class="paddingtop">
				<div id="contactright">
					<?php get_sidebar();?>
				</div>
				<div id="contactleft">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1>Contact a Bozeman Designer</h1>
					<strong class="subheading smallh1"> Lets Build something awesome together</strong>
					<?php the_content(); ?>
					<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
				<?php endwhile; endif; ?>
				</div>
				<div class="clear"></div>
			</div>
	</div>
	<?php get_footer(); ?>
</div>
