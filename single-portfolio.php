<?php get_header(); ?>

	<div class="content__portfolio">
		<div class="bg--portfolio">
			<div class="container portfolio">
				<?php rewind_posts(); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
							$id = get_the_ID();

							$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
						 ?>
				<?php include('variables.php'); ?>
				<!-- Inicio del Loop -->
					<div class="four columns">
						<div class="ornament-top"><img width="548" src="<?php bloginfo('template_url' ); ?>/library/img/ornament_top.png" alt="">
							<h3><?php the_title(); ?></h3>
						</div>
							<div class="under--line--portfolio"></div>

							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($portfolio->ID) );?>
							
							<a class="fancybox-effects-d" href="<?php echo $url; ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('img_1');} ?></a>
							
								
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
						
					<!-- Portfolio Galeria -->
					<div class="eight columns portfolio__galeria">

						

						<?php $images = rwmb_meta( 'pr_img', 'type=image_advanced&size=featured'); ?>

						<?php foreach ( $images as $image ): ?>

							<div class="gallery">
							
				  				<a class="fancybox-effects-d" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>"></a>


				  			</div>

						<?php endforeach; ?>

					</div>

					<!-- Datos complementarios -->

					<div class="eight columns datos__modelo__comple">
						<div class="under--line--footer"><br><br></div><br><br>
						<div class="row">
							
							<div class="six columns">
								<div class="row">
									<div class="six columns">
										<ul class="twelve columns datos__modelo__list">
											<li>SEXO ORAL:</li>
											<li>SEXO ORAL NAT:</li>
											<li>SEXO ORAL MUT</li>
											<li>ATENCIÓN A MUJ:</li>
											<li>ATENCIÓN A PAREJ:</li>
											<li>PERMITE BESOS:</li>
											<li>TRIO MHM:</li>
											<li>TRIO HMH:</li>
										</ul>
									</div>
									<div class="six columns">
										<ul style="color:#ffffff; text-align:center;"class="twelve columns datos__modelo__list">
											<li><?php echo $sexo_oral; ?></li>
											<li><?php echo $sexo_oral_natural; ?></li>
											<li><?php echo $sexo_oral_mutuo; ?></li>
											<li><?php echo $atencion_mujeres; ?></li>
											<li><?php echo $atencion_parejas; ?></li>
											<li><?php echo $permite_besos; ?></li>
											<li><?php echo $trio_mhm; ?></li>
											<li><?php echo $trio_hmh; ?></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="six columns">
								<div class="row">
									<div class="six columns">
										<ul class="twelve columns datos__modelo__list">
											<li>ANAL:</li>
											<li>JUGUETES SEX:</li>
											<li>LLUVIA DORADA:</li>
											<li>ZONA SUGERIDA:</li>
											<li>DEPEDIDA DE SOL:</li>
											<li>SALIDAS FUERA:</li>
											<li>SERVICIO NOVIA:</li>
										</ul>
									</div>
									<div class="six columns">
										<ul style="color:#ffffff; text-align:center;"class="twelve columns datos__modelo__list">
											<li><?php echo $anal; ?></li>
											<li><?php echo $juguetes_sexuales; ?></li>
											<li><?php echo $lluvia_dorada; ?></li>
											<li><?php echo $zona_servicio; ?></li>
											<li><?php echo $despedida_soltero; ?></li>
											<li><?php echo $salidas_ciudad; ?></li>
											<li><?php echo $servicio_novia; ?></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				<!-- Fin del loop -->
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
			<div class="container">
				<?php get_footer('widget'); ?>
			</div>
			
		</div>
	</div>

<?php get_footer(); ?>