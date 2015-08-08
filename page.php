<?php

/**
 * Template Name: Default Page
 */
get_header(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="background white">
					<?php
					if( have_posts() ) : the_post(); ?>
						<h2><?php the_title() ?></h2>
						<?php the_content() ?>
					<?php else : ?>
						<h2>Page not found</h2>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>