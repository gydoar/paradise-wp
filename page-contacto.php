<?php get_header(); ?>

	<article class="page">

		<div class="bg__page">
			
			<div class="container">
				
				<div class="ten columns offset-by-one">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					
				
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam error deserunt dolorem soluta enim dolor atque ex consectetur earum aperiam magni omnis laudantium vel necessitatibus accusantium, mollitia voluptatum autem dolores.
				</div>
					
			</div>
			<!-- widget -->	
			<div class="container">
				<?php get_footer('widget'); ?>
			</div>
		</div>

	</article>

<?php get_footer(); ?>