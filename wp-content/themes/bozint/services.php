<?php

/**
 * Services Page Template
 *
   Template Name:  Services Page
 *
 * @file           services.php
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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1>Bozeman Web Design Services</h1>
					<strong class="subheading smallh1"> Bozeman Website Design and Bozeman Graphic Design</strong>
					<?php the_content(); ?>
					<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
				<?php endwhile; endif; ?>
			</div>
	</div>
	<div id="services" class="center">
		<div class="container">
			<?php get_services(100);?>
			<div class="clear"></div>
		</div>
	</div>
	<div id="testimonials" class="center">
		<div class="container">
			<h2>What our clients are saying</h2>
			<strong class="subheading smallh1">Website Design Testimonials</strong>
			<?php get_testimonials(3);?>
			<div class="clear"></div>
		</div>
	</div>
	<?php get_footer(); ?>
</div>
