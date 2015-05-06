
<footer>
	<div class="container">
		<div class="ten columns offset-by-one">

			<div class="three columns">
				<h3>NAVEGACIÓN</h3>
				<div class="under--line--footer"></div>
				<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'nav', 'container_class' => 'nav', 'menu_class' => 'nav_footer') ); ?>
			</div>

			<div class="five columns">
				<h3>CONTACTO</h3>
				<div class="under--line--footer"></div>
				<ul class="contact__footer">
					<li><a href="#">Bogotá - Colombia</a></li>
					<li><a href="mailto:info@escortsbogota.co">info@escortsbogota.co</a></li>
					<li><a href="skype:skype:@paradise_bogota?call">Paradise_Bogota</a></li>
					<li><a href="#">(+57 1) 316 538 1492 - 319 560 8351</a></li>
				</ul>
			</div>

			<div class="four columns">
				<h3>SOCIAL</h3>
				<div class="under--line--footer"></div>
				<ul class="social__footer">
					<li><a target="_blank" href="https://www.facebook.com/pages/Paradise-Escorts-Bogotá-18/1602073993344060">Paradise_Bogota</a></li>
					<li><a target="_blank" href="https://twitter.com/Paradise_Bogota">@Paradise_Bogota</a></li>
					<li><a target="_blank" href="https://instagram.com/paradise_bogota/">Paradise_Bogota</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<div class="copyright">
	<p><span>&copy; <?php bloginfo('name' ); ?></span> -  Hecho con&nbsp;<img width="8" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt="">&nbsp;por <a target="_blank" href="http://suwwweb.com">suWWWeb</a></p>
</div>


<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.fancybox.js?v=2.1.5"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.fancybox-media.js?v=1.0.6"></script>


<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true,
	      pagination:false,
	      autoPlay: false
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
</script>

<script>
	$(document).ready(function() {

		/*
		 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
		*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
	});

	// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			
</script>
<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->

	<!--/ Menu responsive -->

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>