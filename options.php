<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'INICIO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Slide 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Link Slide 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_1_link',
		'std' => 'http://escortsbogota.co/servicios/',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Slide 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_2',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Link Slide 2', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_2_link',
		'std' => 'http://escortsbogota.co/trabaje-con-nosotros/',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Slide 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Link Slide 3', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'slide_3_link',
		'std' => 'http://escortsbogota.co/servicios/',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Nuestras acompañantes', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'text_acomp',
		'std' => '<p>Nuestras acompañantes dejarán volar sus fantasías con su encanto; ellas harán que una fiesta sea la mejor que hayas tenido o simplemente solicítalas para satisfacer tus necesidades carnales, estamos seguros que superarán tus expectativas.<br><br>Con nuestras PARADISE ESCORTS en Bogotá, harás realidad tus deseos más salvajes.</p>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Link video 1', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'link_1',
		'std' => 'Agregar link de VIMEO',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link video 2', 'theme-textdomain' ),
		'desc' => __( 'Agregar link de VIMEO', 'theme-textdomain' ),
		'id' => 'link_2',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'FOOTER', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Ciudad', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'ciudad',
		'std' => 'Bogotá - Colombia',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'email',
		'std' => 'info@escortsbogota.co',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Skype', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'skype',
		'std' => 'paradise_bogota',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Telefonos', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'telefonos',
		'std' => '(+57 1) 316 538 1492 - 319 560 8351',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Facebook', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'facebook',
		'std' => 'https://www.facebook.com/pages/Paradise-Escorts-Bogotá-18/1602073993344060',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Twitter', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'twitter',
		'std' => 'https://twitter.com/Paradise_Bogota',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Instagram', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'instagram',
		'std' => 'https://instagram.com/paradise_bogota/',
		'type' => 'text'
	);

	
	return $options;
}