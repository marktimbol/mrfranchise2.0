<?php

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'main-menu', 'Main Menu' );
}

function showPostsCategory( $atts ) {
		
	$atts = shortcode_atts(
		array(
			'category' => 0
		), $atts );

	$html = '';

	$args = array(
		'cat' => $atts['category'],
		'posts_per_page' => -1,
		'order'	=> 'DESC',
		'orderby'	=> 'DATE'
		);

	query_posts($args);

	if( have_posts() ) : 
		$html .= '<div class="row">';
		while( have_posts() ) : the_post();
			$html .= '<div class="col-md-3">';
				$imageUrl = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
				$html .= '<img src="'.$imageUrl[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" class="img-thumbnail" />';
				$html .= '<h4 class="text-center">'.get_the_title().'</h4>';
			$html .= '</div>';
		endwhile;
		$html .= '</div>';
	else:
		$html .= '<h2>No results found</h2>';
	endif;

	return $html;
}

add_shortcode( 'showPosts', 'showPostsCategory' );

function mrfranchise_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home Blocks',
		'id'            => 'home_blocks',
		'before_widget' => '<div class="col-md-4"><div class="background white">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'mrfranchise_widgets_init' );
?>