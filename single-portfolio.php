<?php get_header(); ?>

	<div class="content__portfolio">
		<div class="bg--portfolio">
			<div class="container portfolio">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php include('variables.php'); ?>
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
											<li><?php echo $one_hora;?></li>
											<li><?php echo $two_hora;?></li>
										</ul>
									</div>
									<div class="six columns">
										<ul class="six columns tarifas__list">
											<li>3 HORAS</li>
											<li>12 HORAS</li>
										</ul>
										<ul class="six columns tarifas__list">
											<li><?php echo $three_hora;?></li>
											<li><?php echo $twelve_hora;?></li>
										</ul>
									</div>
								</div>
								<!-- Video chat -->
								<h4><img width="25" src="<?php bloginfo('template_url' ); ?>/library/img/icon-skype-big.png" alt=""> Video chat</h4>
								<div class="under--line--footer"></div>
								<div class="row">
									<div class="six columns">
										<ul class="six columns tarifas__list">
											<li>15 MIN</li>
											<li>30 MIN</li>
										</ul>
										<ul class="six columns tarifas__list">
											<li><?php echo $fifteen_minutes_chat;?></li>
											<li><?php echo $thirty_minutes_chat; ?></li>
										</ul>
									</div>
									<div class="six columns">
										<ul class="six columns tarifas__list">
											<li>1 HORA</li>
										</ul>
										<ul class="six columns tarifas__list">
											<li><?php echo $one_hora_chat;?></li>
										</ul>
									</div>
								</div>
							</div>
						<div class="ornament-top"><img width="270" src="<?php bloginfo('template_url' ); ?>/library/img/ornament-bottom.png" alt="">
						</div>	
					</div>

					<!-- Bloque Derecho -->
					<div class="eight columns datos__modelo">
						<h4>Datos modelo y Servicios</h4>
						<div class="row">
							<div class="six columns">
								<div class="row">
									<div class="six columns">
										<ul class="twelve columns datos__modelo__list">
											<li>EDAD:</li>
											<li>ESTATURA:</li>
											<li>BUSTO:</li>
											<li>PANTALON:</li>
											<li>COLOR CABELLO:</li>
											<li>COLOR OJOS:</li>
											<li>COLOR PIEL:</li>
											<li>IDIOMAS:</li>
										</ul>
									</div>
									<div class="six columns">
										<ul style="color:#ffffff; text-align:center;"class="twelve columns datos__modelo__list">
											<li><?php echo $edad; ?></li>
											<li><?php echo $estatura; ?></li>
											<li><?php echo $busto; ?></li>
											<li><?php echo $pantalon; ?></li>
											<li><?php echo $color_cabello; ?></li>
											<li><?php echo $color_ojos; ?></li>
											<li><?php echo $color_piel ?></li>
											<li><?php echo $idiomas; ?></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="six columns">
								<div class="row">
									<div class="six columns">
										<ul class="twelve columns datos__modelo__list">
											<li>TATUAJES:</li>
											<li>DISPONIBILIDAD:</li>
											<li>ORIENTACIÓN:</li>
											<li>NACIONALIDAD:</li>
											<li>CIUDAD DE NAC:</li>
											<li>PROFESIÓN:</li>
											<li>CIRUGIAS:</li>
										</ul>
									</div>
									<div class="six columns">
										<ul style="color:#ffffff; text-align:center;"class="twelve columns datos__modelo__list">
											<li><?php echo $tatuajes; ?></li>
											<li><?php echo $disponibilidad; ?></li>
											<li><?php echo $orientacion; ?></li>
											<li><?php echo $nacionalidad; ?></li>
											<li><?php echo $ciudad_nac; ?></li>
											<li><?php echo $profesion; ?></li>
											<li><?php echo $cirugias; ?></li>
										</ul>
									</div>
								</div>

							</div>
							<div class="desc__portfolio twelve columns">
								<p><?php echo $descripcion; ?></p>
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