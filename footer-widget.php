

<div class="footer--widget">
	<div class="six columns">
		<a width="100%" height="245" class="twitter-timeline" href="https://twitter.com/Paradise_Bogota" data-widget-id="595634590804480001">Tweets por el @Paradise_Bogota.</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<div class="six columns noticias_widget">
		<div class="noticias_img"></div>

			<?php rewind_posts(); ?>
			<?php query_posts('post_type=post&posts_per_page=2'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="three columns">
					<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('noticias_widget');} ?></a>
				</div>
					
				<div class="nine columns">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<p><?php echo substr(get_the_excerpt(), 0,100); ?></p>

					<hr>
				</div>
			</div>
				

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	
	</div>
</div>
