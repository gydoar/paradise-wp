<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>
 	<meta name="description" content="<?php bloginfo('description' ); ?>">

 	<link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
 	<link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/library/img/favicon.png">

 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<?php wp_head(); ?>

</head>
<body>

	<header>
		<div class="container">
			<div class="four columns">
				<a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
			</div>
			<div class="seven columns offset-by-one">
				<ul class="contact__header">
					<li><a target="_blank" href="#"><img width="280" src="<?php bloginfo('template_url' ); ?>/library/img/icon-contact.png" alt=""></a></li>

					<li><a target="_blank" href="#"><img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-twitter.png" alt=""></a></li>

					<li><a target="_blank" href="#"><img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-instagram.png" alt=""></a></li>

					<li><a target="_blank" href="#"><img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-facebook.png" alt=""></a></li>
				</ul>
		
				<div class="twelve columns">
					<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'nav', 'menu_class' => 'nav_header') ); ?>
				</div>
			</div>
			
		</div>
	</header>
