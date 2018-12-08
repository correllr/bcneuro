<?php get_header(); ?>

<!--- Blogs page ---->

<!----------------- THE CONTENT --------------->
<div id="blog-page-container">
	<div id="column-left" class="three-column">
		<h1>Read the Blogs</h1>
			<?php 
			$args = array('post_type' => 'post');
			$query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="excerpt-container">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('excerpt-thumbnail'); ?></a>
					<a href="<?php the_permalink(); ?>" class="excerpt-title"><?php the_title(); ?></a>
					<div class="excerpt-text"><?php the_excerpt(); ?></div>
					<a href="<?php the_permalink(); ?>" class="excerpt-link">Read more</a>
				</div>
			
			<?php endwhile; 
				 wp_reset_postdata();
				 else : ?>
				 <p><?php esc_html_e( 'Blogs coming soon' ); ?></p>
			<?php endif; ?>
	</div>

	<!-- RIGHT COLUMN - VIDEOS -->
	<div id="column-right" class="three-column">
	<h1>Watch Jake's Videos</h1>
		<?php 
		$args = array('post_type' => 'video');
		$query = new WP_Query( $args ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="excerpt-container">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('excerpt-thumbnail'); ?></a>
				<a href="<?php the_permalink(); ?>" class="excerpt-title"><?php the_title(); ?></a>
				<div class="excerpt-text"><?php the_excerpt(); ?></div>
				<a href="<?php the_permalink(); ?>" class="excerpt-link">Watch the video</a>
			</div>
		
		<?php endwhile; 
			 wp_reset_postdata();
			 else : ?>
			 <p><?php esc_html_e( 'Videos coming soon' ); ?></p>
		<?php endif; ?>

	</div>
	
	<div id="column-fb" class="three-column">
		<h1>Follow me on Facebook</h1>
		<div class="fb-page" data-href="https://www.facebook.com/trainmybrain.uk/" data-tabs="timeline" data-width="400" data-height="1500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trainmybrain.uk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trainmybrain.uk/">Neuro-Muscular Rehab</a></blockquote></div>
	</div>
	
</div>


<?php get_footer(); ?>