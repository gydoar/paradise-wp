
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
					<li><a href="#"><?php echo of_get_option('ciudad'); ?></a></li>
					<li><a href="mailto:<?php echo of_get_option('email'); ?>"><?php echo of_get_option('email'); ?></a></li>
					<li><a href="skype:skype:@<?php echo of_get_option('skype'); ?>?call">Paradise_Bogota</a></li>
					<li><a href="#"><?php echo of_get_option('telefonos'); ?></a></li>
				</ul>
			</div>

			<div class="four columns">
				<h3>SOCIAL</h3>
				<div class="under--line--footer"></div>
				<ul class="social__footer">
					<li><a target="_blank" href="<?php echo of_get_option('facebook'); ?>">Paradise Escorts Bogotá</a></li>
					<li><a target="_blank" href="<?php echo of_get_option('twitter'); ?>">@Paradise_Bogota</a></li>
					<li><a target="_blank" href="<?php echo of_get_option('instagram'); ?>">Paradise_Bogota</a></li>
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
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.meanmenu.2.0.min.js"></script>

<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true,
	      pagination:false,
	      autoPlay: true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
</script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
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
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

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

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#hidden_link").fancybox().trigger('click');
    });
</script>

<script>
jQuery(document).ready(function () {
    $('header nav').meanmenu();
});
</script>
<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->

	<!--/ Menu responsive -->

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>