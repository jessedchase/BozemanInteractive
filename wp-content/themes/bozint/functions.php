<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
show_admin_bar( false );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Client Logo',
'id' => 'logo-image',
'post_type' => 'bozeman_designs'
 ) );

}
if (class_exists('MultiPostThumbnails')) {
new MultiPostThumbnails(array(
'label' => 'Service Icon',
'id' => 'icon-image',
'post_type' => 'design_services'
 ) );

 }


add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}


function get_recent_clients($total){
	$loop = new WP_Query( array( 'post_type' => 'bozeman_designs','posts_per_page' => $total,'orderby'=>'rand'  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$isFeatured = get_post_meta(get_the_id(), 'Is_Featured');
		
		echo '<div class="featuredwork"><div class="padding">';
		echo '<a class="worklink" href="'.get_permalink().'" title="'.get_the_title().' Bozeman Montana Web Design">';
		echo '<img 
		src="'.MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'logo-image').'" alt="'.get_the_title().' Bozeman Web Design ">';
		echo '</a>';
		echo '</div></div>';
	endwhile; 
}
function get_all_clients(){
	$loop = new WP_Query( array( 'post_type' => 'bozeman_designs','posts_per_page' => 100,'order'=>'ASC'  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$website = get_post_meta(get_the_id(), 'website');
		
		echo '<div class="featuredwork"><div class="padding">';
		echo '<a class="worklink" href="'.get_permalink().'" title="'.get_the_title().' Bozeman Website Design">';
		echo '<img 
		src="'.MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'logo-image').'" alt="'.get_the_title().' Bozeman Website Design ">';
		the_title();
		echo '</a>';
		echo '</div></div>';
	endwhile; 
}

function post_type_tags_fix($request) {
    if ( isset($request['tag']) && !isset($request['post_type']) )
    $request['post_type'] = 'any';
    return $request;
} 
add_filter('request', 'post_type_tags_fix');


function get_all_clients_by_tag($tag){
	$tag2 = (string)$tag;
	echo $tag2;

	$loop = new WP_Query( array( 'post_type' => 'bozeman_designs','posts_per_page' => 100,'order'=>'ASC','tag' => $tag2  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$website = get_post_meta(get_the_id(), 'website');
		
		echo '<div class="featuredwork"><div class="padding">';
		echo '<a class="worklink" href="'.get_permalink().'" title="'.get_the_title().' Bozeman Website Design">';
		echo '<img 
		src="'.MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'logo-image').'" alt="'.get_the_title().' Bozeman Website Design ">';
		the_title();
		echo '</a>';
		echo '</div></div>';
	endwhile; 
}

function get_services($total){
	$loop = new WP_Query( array( 'post_type' => 'design_services','posts_per_page' => $total,'order'=>'ASC'  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$isFeatured = get_post_meta(get_the_id(), 'Is_Featured');
		echo '<div class="service" itemscope itemtype="http://schema.org/Service">';
		echo '<div class="padding">';
		echo '<meta itemprop="serviceType" content="'.get_the_title().'" />';
	
		echo '
			<div itemscope itemtype="http://schema.org/LocalBusiness" class="microdata">
			<div itemprop="name">Bozeman Interactive</div>
			<div>Email: <span itemprop="email">sales@bozemaninteractive.com</span></div>
			<meta itemprop="image" content="https://www.bozemaninteractive.com/images/bozeman_website_design_small_logo.png" />
			<span itemprop="priceRange">$$</span>
			<div>Phone: <span itemprop="telephone">406-781-2306</span></div>
			<div>Url: <span itemprop="url">https://www.bozemaninteractive.com</span></div>
			
			<div itemprop="paymentAccepted"  style="display: none" >check, credit card</div>
			<meta itemprop="openingHours"  style="display: none"  datetime="Mo,Tu,We,Th,Fr 08:00-18:00" />
			<div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo">
				<meta itemprop="latitude" content="45.666590" />
				<meta itemprop="longitude" content="-110.988275" />

			</div>
			<div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
				<div itemprop="streetAddress">118 Canary Lane</div>
				<div><span itemprop="addressLocality">Bozeman</span>, <span itemprop="addressRegion">MT</span> <span itemprop="postalCode">59715</span></div>
			</div>
			
		</div>
		  
		';
	
		
		echo '<img 
		src="'.MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'icon-image').'"
		itemprop="image"
		alt="'.get_the_title().'">';
		echo '<h3 itemprop="name" content="'.get_the_title().'">'.the_title().'</h3>';
		echo '<div itemprop="description" content="'.get_the_excerpt().'">'.the_excerpt().'</div>';
		echo '<a class="learnmore" href="'.get_permalink().'" title="'.get_the_title().' Bozeman Website Design" >Learn More</a>
		<meta itemprop="category" content="'.get_the_title().'">
		<met itemprop="areaServed" content="Montana">';
		echo '</div></div>';
	endwhile; 
}
function get_testimonials($total){
	$loop = new WP_Query( array( 'post_type' => 'testimonials','posts_per_page' => $total,'orderby'=>'rand'  ) );
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$isFeatured = get_post_meta(get_the_id(), 'Is_Featured');		
		echo '<div class="testimonial"><div class="padding">';
		echo '<div class="testimonialimg"><img src="'.get_the_post_thumbnail_url().'" alt="Bozeman Web Design '.get_the_title().'" ></div>';
		echo '<h4>'.get_the_title().'</h4>';
		echo '<p>'.the_content().'</p>'; 
		echo '</div></div>';
	endwhile; 
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}