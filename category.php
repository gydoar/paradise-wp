<?php get_header(); ?>

	<article class="page">

		<div class="bg__page">
			
			<div class="container">
				
				<div class="ten columns offset-by-one">
					
					<div class="container">
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
							<div class="page__thumb four columns">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('noticias'); ?></a>
							</div>

							<div class="eight columns">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								<p><?php the_excerpt(); ?></p>
							</div>

							<?php endwhile; else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>

					</div>

				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>