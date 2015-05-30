<?php get_header(); ?>

	<!-- Banner principal -->

	<div id="owl-demo" class="owl-carousel owl-theme">
	 
	  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/banners/01.jpg" alt="The Last of us"></div>

	  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/banners/02.jpg" alt="The Last of us"></div>

	  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/banners/01.jpg" alt="The Last of us"></div>
	 
	</div>


	<!-- Content -->

	<div class="content">
		<!-- Videos header --> 
		<div class="video__header">
			<div class="container">
				<div class="four columns">
					<h2>Nuestras Acompañantes</h2>
					<div class="under--line"></div>
					<p>Nuestras acompañantes dejarán volar sus fantasías con su encanto; ellas harán que una fiesta sea la mejor que hayas tenido o simplemente solicítalas para satisfacer tus necesidades carnales, estamos seguros que superarán tus expectativas.<br><br>Con nuestras PARADISE ESCORTS en Bogotá, harás realidad tus deseos más salvajes.</p>
				</div>
				<div class="four columns">
					<a class="fancybox-media" href="https://vimeo.com/126855036"><img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/img_video.jpg" alt=""></a>
				</div>
				<div class="four columns">
					<a class="fancybox-media" href="https://vimeo.com/126855036"><img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/img_video.jpg" alt=""></a>
				</div>
			</div>
		</div>

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

	<div class="popup_inicio" id="hidden_link">
		
		<p>!MUY IMPORTANTE! ESTE SITIO CONTIENE MATERIAL PARA ADULTOS E IMÁGENES DE SEXO. <br><br>

			Sólo puede entrar en este sitio web si es mayor de 18 años de edad, o al menos la mayoría de edad en la jurisdicción donde usted reside o del que se accede a esta página web. Si usted no cumple con estos requisitos, entonces usted NO ESTÁ AUTORIZADO, Y NO DEBE INGRESAR a este sitio web.</p>

		<div class="marco_18">
			<a href="close">SOY MAYOR DE 18 AÑOS</a>
		</div>
		<a href="">No entrar</a>
	</div>

<?php get_footer(); ?>