<?php

/**
 * Template Name: Brands
 */
get_header(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="background white">
					<h2><?php the_title(); ?></h2>
					<p>&nbsp;</p>
					<?php
						$html = '';

						$args = array(
							'cat' => 3,
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
									$html .= '<a href="'.get_field('website').'" target="_blank">';
										$html .= '<img src="'.$imageUrl[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" class="img-thumbnail" />';
									$html .= '</a>';
									$html .= '<h4 class="text-center">'.get_the_title().'</h4>';
								$html .= '</div>';
							endwhile;
							$html .= '</div>';
						else:
							$html .= '<h2>No results found</h2>';
						endif;

						echo $html;
					?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>