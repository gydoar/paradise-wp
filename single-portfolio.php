<?php get_header(); ?>

	<div class="content__portfolio">
		<div class="bg--portfolio">
			<div class="container portfolio">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Inicio del Loop -->
					<div class="four columns">
						<div class="ornament-top"><img width="548" src="<?php bloginfo('template_url' ); ?>/library/img/ornament_top.png" alt="">
							<h3><?php the_title(); ?></h3>
						</div>
							<div class="under--line--portfolio"></div>
								<?php if (has_post_thumbnail()) {the_post_thumbnail('scorts-thumbnails');} ?>
							<div class="under--line--portfolio"></div>

							<div class="tarifas">
								<h4>Tarifa</h4>
								<div class="under--line--footer"></div>
								<div class="row">
									<div class="six columns">
										<ul class="six columns tarifas__list">
											<li>1 HORA</li>
											<li>2 HORAS</li>
										</ul>
										<ul class="six columns tarifas__list">
											<li>1 HORA</li>
											<li>2 HORAS</li>
										</ul>
									</div>
									<div class="six columns">
										<ul class="tarifas__list">
											<li>1 HORA</li>
											<li>2 HORAS</li>
										</ul>
									</div>
								</div>
							</div>
						

						
					</div>
				<!-- Fin del loop -->
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>