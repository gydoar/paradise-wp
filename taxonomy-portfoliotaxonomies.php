<?php get_header(); ?>

		<!-- Acompañanates inicio -->
		<div class="bg--acompanantes">
			<div class="container">
				<div class="ornament-top"><img width="548" src="<?php bloginfo('template_url' ); ?>/library/img/ornament_top.png" alt="">
					<h2>Acompañantes</h2>
				</div>
	
				<div class="chichas--acompanantes">

					<!-- Bloque 1 -->
					<?php rewind_posts(); ?>
					<?php global $wp_query;
					$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=4");
					
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<div class="three columns">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) {the_post_thumbnail('img_1');} ?>
								<div class="caja__nombre">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</a>	

						</div>

					<?php endwhile; ?>

					<!-- Bloque 2 -->
					<?php rewind_posts(); ?>
					<?php global $wp_query;
					$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=8&showposts=4&offset=4");
					
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<div class="three columns">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) {the_post_thumbnail('img_1');} ?>
								<div class="caja__nombre">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</a>	

						</div>

					<?php endwhile; ?>


					<!-- Bloque 3 -->
					<?php rewind_posts(); ?>
					<?php global $wp_query;
					$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=-1&showposts=4&offset=8");
					
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<div class="three columns">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) {the_post_thumbnail('img_1');} ?>
								<div class="caja__nombre">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</a>	

						</div>

					<?php endwhile; ?>

				</div>


				<!-- Bloque 2 -->




				<div class="ornament-top"><img width="270" src="<?php bloginfo('template_url' ); ?>/library/img/ornament-bottom.png" alt="">
				</div>
		<div>
			<?php get_footer("widget"); ?>
		</div>
		</div>	
	</div>

<?php get_footer(); ?>