<?php

/**
 * Front Page Template
 *
   Template Name:  Front Page
 *
 * @file           frontpage.php
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
	
	<div id="services" class="center">
		<div class="container">
			<h3 class="headingborder">Our Design Services</h3>
			<strong class="subheading smallh1">We Do it all!</strong>
			<?php get_services(6);?>
			<div class="clear"></div>
			<a href="<?php echo site_url();?>/website-design-graphic-design-services" title="Bozeman Web Design Services" class="learnmore">View All Design Services</a>
		</div>
	</div>
	<div id="recentwork" class="center">
		<div class="container">
			<h3>Recent Design Work</h3>
			<strong class="subheading smallh1">Some of our Design Clients!</strong>
			<?php get_recent_clients(6);?>
			<div class="clear"></div>
			<a href="<?php echo site_url();?>/design-work" class="learnmore" title="Bozeamn Web Design Work">View All Design Work</a>
		</div>
	</div>
	<div class="container center">
			<div class="paddingtop">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1>Bozeman Web Design + Bozeman Graphic Design</h1>
					<strong class="subheading smallh1"> We Create Beautiful Work for Clients</strong>
					<?php the_content(); ?>
					<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
				<?php endwhile; endif; ?>
			</div>
	</div>
	<div id="testimonials" class="center">
		<div class="container">
			<h3>What our clients are saying</h3>
			<strong class="subheading smallh1">Montana Web Design Testimonials</strong>
			<?php get_testimonials(3);?>
			<div class="clear"></div>
			<a href="<?php echo site_url();?>/testimonials/" class="learnmore" title="Montana Web Design Testimonials">View All Testimonials</a>
		</div>
	</div>
	<?php get_footer(); ?>
</div>
