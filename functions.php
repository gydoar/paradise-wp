<?php 
/*------------------------------------*\
    $CARGAR ARCHIVOS EXTERNOS
\*------------------------------------*/
require_once( 'library/admin.php' );

/*------------------------------------*\
    $HABILITAR SOPORTE PARA MENU
\*------------------------------------*/
register_nav_menus(
		array(
			'header-menu' => 'Menu superior',   // main nav in header
			'footer-menu' => 'Menu pie' // secondary nav in footer
		)
	);

/*------------------------------------*\
    $HABILITAR SOPORTE THUBMNAILS
\*------------------------------------*/
add_theme_support('post-thumbnails' );
add_image_size('img_1', 352, 532, true );
add_image_size('img_2', 256, 387, true );
add_image_size('noticias', 254, 177, true);
add_image_size('noticias_widget', 80, 80, false );
add_image_size ('featured', 800, 800, true);


// Longitud de fragmento
function axemos_custom_excerpt_length( $length ) {
return 30; // Numero de palabras a mostrar.
}

// Link leer mas
function axemos_custom_excerpt_more($more) {
global $post;
return ' <a class="more-link" href="'. get_permalink($post->ID) . '">'. __(' Leer mas...', 'axemos') .'</a>';
}
add_filter('excerpt_more', 'axemos_custom_excerpt_more');
add_filter( 'excerpt_length', 'axemos_custom_excerpt_length', 999 );
/*------------------------------------*\
    $HABILITAR CUSTON POST EN EL LOOP
\*------------------------------------*/
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'portfolio' ) );

    return $query;
}


/*------------------------------------*\
    $HABILITAR PORTFOLIO DE CHICAS
\*------------------------------------*/
add_action( 'init', 'register_cpt_portfolio' );
function register_cpt_portfolio() {
    $labels = array(
        'name' => _x( 'Portfolio', 'portfolio' ),
        'singular_name' => _x( 'Portfolio', 'portfolio' ),
        'add_new' => _x( 'Agregar', 'portfolio' ),
        'add_new_item' => _x( 'Agregar trabajo', 'portfolio' ),
        'edit_item' => _x( 'Editar trabajo', 'portfolio' ),
        'new_item' => _x( 'Nuevo trabajo', 'portfolio' ),
        'view_item' => _x( 'Ver trabajo', 'portfolio' ),
        'search_items' => _x( 'Buscar en Porfolio', 'portfolio' ),
        'not_found' => _x( 'No se encontraron trabajos', 'portfolio' ),
        'not_found_in_trash' => _x( 'No se encontraron en la papelera', 'portfolio' ),
        'parent_item_colon' => _x( 'Parent Portfolio:', 'portfolio' ),
        'menu_name' => _x( 'Portfolio', 'portfolio' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Trabajos que realizamos recientemente',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'portfolio', $args );
}



/*------------------------------------*\
    $HABILITAR TAXONOMIES
\*------------------------------------*/
function register_portfoliotaxonomies() {
	$labels = array(
		'name' 					=> _x( 'tipos', 'taxonomy general name' ),
		'singular_name' 		=> _x( 'tipo', 'taxonomy singular name' ),
		'add_new' 				=> _x( 'Agregar tipo', 'tipo'),
		'add_new_item' 			=> __( 'Agregar tipo' ),
		'edit_item' 			=> __( 'Editar tipo' ),
		'new_item' 				=> __( 'Nuevo tipo' ),
		'view_item' 			=> __( 'Ver tipo' ),
		'search_items' 			=> __( 'Buscar tipos' ),
		'not_found' 			=> __( 'No encontrado' ),
		'not_found_in_trash' 	=> __( 'No encotrado' ),
	);
	$pages = array('portfolio');
	$args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('tipo'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'hierarchical' 		=> true,
		'show_tagcloud' 	=> false,
		'show_in_nav_menus' => true,
		'_builtin' 			=> false,
		'rewrite' 			=> array('slug' => 'porfoliotax','with_front' => FALSE ),
	 );
	register_taxonomy('portfoliotaxonomies', $pages, $args);
}
add_action('init', 'register_portfoliotaxonomies');




/*------------------------------------*\
    $HABILITAR METABOX
\*------------------------------------*/
$meta_box = array(
 'id' => 'metabox-portfolio',
 'title' => 'Datos modelo y servicios',
 'page' => 'portfolio',
 'context' => 'normal',
 'priority' => 'high',
 'fields' => array(
 array(
 'name' => 'Edad',
 'desc' => '',
 'id' => 'edad',
 'type' => 'text',
 'std' => '19 años'
 ),
  array(
 'name' => 'Estatura',
 'desc' => '',
 'id' => 'estatura',
 'type' => 'text',
 'std' => '1.63 cm'
 ),
 array(
 'name' => 'Busto',
 'desc' => '',
 'id' => 'busto',
 'type' => 'text',
 'std' => '34'
 ),
  array(
 'name' => 'Pantalon',
 'desc' => '',
 'id' => 'pantalon',
 'type' => 'text',
 'std' => '8'
 ),
  array(
 'name' => 'Color cabello',
 'desc' => '',
 'id' => 'color_cabello',
 'type' => 'text',
 'std' => 'Negro'
 ),
  array(
 'name' => 'Color ojos',
 'desc' => '',
 'id' => 'color_ojos',
 'type' => 'text',
 'std' => 'Cafe'
 ),
  array(
 'name' => 'Color piel',
 'desc' => '',
 'id' => 'color_piel',
 'type' => 'text',
 'std' => 'Canela'
 ),
  array(
 'name' => 'Idiomas',
 'desc' => '',
 'id' => 'idiomas',
 'type' => 'text',
 'std' => 'Español'
 ),
  array(
 'name' => 'Tatuajes',
 'desc' => '',
 'id' => 'tatuajes',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Disponibilidad',
 'desc' => '',
 'id' => 'disponibilidad',
 'type' => 'text',
 'std' => '24 horas'
 ),
 array(
 'name' => 'Orientacion sexual',
 'desc' => '',
 'id' => 'orientacion',
 'type' => 'text',
 'std' => 'Hetero'
 ),
  array(
 'name' => 'Nacionalidad',
 'desc' => '',
 'id' => 'nacionalidad',
 'type' => 'text',
 'std' => 'Colombiana'
 ),
  array(
 'name' => 'Ciudad de Nac',
 'desc' => '',
 'id' => 'ciudad_nac',
 'type' => 'text',
 'std' => 'Bogotá'
 ),
 array(
 'name' => 'Profesion',
 'desc' => '',
 'id' => 'profesion',
 'type' => 'text',
 'std' => 'Deportista'
 ),
  array(
 'name' => 'Cirugias',
 'desc' => '',
 'id' => 'cirugias',
 'type' => 'text',
 'std' => 'No'
 ),
 array(
 'name' => 'Descripcion',
 'desc' => '',
 'id' => 'descripcion',
 'type' => 'textarea',
 'std' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.'
 ),
 array(
 'name' => 'Sexo oral',
 'desc' => '',
 'id' => 'sexo_oral',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Sexo oral natural',
 'desc' => '',
 'id' => 'sexo_oral_natural',
 'type' => 'text',
 'std' => 'no'
 ),
  array(
 'name' => 'Sexo oral mutuo',
 'desc' => '',
 'id' => 'sexo_oral_mutuo',
 'type' => 'text',
 'std' => 'Ocasional'
 ),
 array(
 'name' => 'Atención a mujeres',
 'desc' => '',
 'id' => 'atencion_mujeres',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Atención a parejas',
 'desc' => '',
 'id' => 'atencion_parejas',
 'type' => 'text',
 'std' => 'si'
 ),
  array(
 'name' => 'Permite besos',
 'desc' => '',
 'id' => 'permite_besos',
 'type' => 'text',
 'std' => 'Ocasional'
 ),
 array(
 'name' => 'Trio MHM',
 'desc' => '',
 'id' => 'trio_mhm',
 'type' => 'text',
 'std' => 'si'
 ),
  array(
 'name' => 'Trio HMH',
 'desc' => '',
 'id' => 'trio_hmh',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Anal',
 'desc' => '',
 'id' => 'anal',
 'type' => 'text',
 'std' => 'no'
 ),
  array(
 'name' => 'Juguetes sexuales',
 'desc' => '',
 'id' => 'juguetes_sexuales',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Lluvia dorada',
 'desc' => '',
 'id' => 'lluvia_dorada',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Zona sujerida servicio',
 'desc' => '',
 'id' => 'zona_servicio',
 'type' => 'text',
 'std' => 'Chapinero'
 ),
 array(
 'name' => 'Despedida de soltero',
 'desc' => '',
 'id' => 'despedida_soltero',
 'type' => 'text',
 'std' => 'si'
 ),
  array(
 'name' => 'Salidas fuera de la ciudad',
 'desc' => '',
 'id' => 'salidas_ciudad',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => 'Servicio tipo novia',
 'desc' => '',
 'id' => 'servicio_novia',
 'type' => 'text',
 'std' => 'si'
 ),
 array(
 'name' => '1 HORA',
 'desc' => '',
 'id' => 'one_hora',
 'type' => 'text',
 'std' => '$ 150.000'
 ),
  array(
 'name' => '2 HORAS',
 'desc' => '',
 'id' => 'two_hora',
 'type' => 'text',
 'std' => '$ 280.000'
 ),
  array(
 'name' => '3 HORAS',
 'desc' => '',
 'id' => 'three_hora',
 'type' => 'text',
 'std' => '$ 400.000'
 ),
  array(
 'name' => '12 HORAS',
 'desc' => '',
 'id' => 'twelve_hora',
 'type' => 'text',
 'std' => '$ 850.000'
 ),
 array(
 'name' => '15 Minutos chat',
 'desc' => '',
 'id' => 'fifteen_minutes_chat',
 'type' => 'text',
 'std' => '$ 35.000'
 ),
  array(
 'name' => '1 hora chat',
 'desc' => '',
 'id' => 'one_hora_chat',
 'type' => 'text',
 'std' => '$ 120.000'
 ),
  array(
 'name' => '30 minutos chat',
 'desc' => '',
 'id' => 'thirty_minutes_chat',
 'type' => 'text',
 'std' => '$ 65.000'
 ),
 )
);
add_action('admin_menu', 'mytheme_add_box');
// Add meta box
function mytheme_add_box() {
 global $meta_box;
 add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}
// Callback function to show fields in meta box
function mytheme_show_box() {
 global $meta_box, $post;
 // Use nonce for verification
 echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 echo '<table class="form-table">';
foreach ($meta_box['fields'] as $field) {
 // get current post meta data
 $meta = get_post_meta($post->ID, $field['id'], true);
 echo '<tr>',
 '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
 '<td>';
 switch ($field['type']) {
 case 'text':
 echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
 '<br />', $field['desc'];
 break;
 case 'textarea':
 echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
 '<br />', $field['desc'];
 break;
 case 'select':
 echo '<select name="', $field['id'], '" id="', $field['id'], '">';
 foreach ($field['options'] as $option) {
 echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
 }
 echo '</select>';
 break;
 case 'radio':
 foreach ($field['options'] as $option) {
 echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
 }
 break;
 case 'checkbox':
 echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
 break;
 }
 echo '<td>',
 '</tr>';
 }
 echo '</table>';
}
add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
 global $meta_box;
 // verify nonce
 if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
 return $post_id;
 }
// check autosave
 if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
 return $post_id;
 }
// check permissions
 if ('page' == $_POST['post_type']) {
 if (!current_user_can('edit_page', $post_id)) {
 return $post_id;
 }
 } elseif (!current_user_can('edit_post', $post_id)) {
 return $post_id;
 }
 foreach ($meta_box['fields'] as $field) {
 $old = get_post_meta($post_id, $field['id'], true);
 $new = $_POST[$field['id']];
 if ($new && $new != $old) {
 update_post_meta($post_id, $field['id'], $new);
 } elseif ('' == $new && $old) {
 delete_post_meta($post_id, $field['id'], $old);
 }
 }
}

/*------------------------------------*\
    $HABILITAR METABOX
\*------------------------------------*/

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
 
 $prefix = 'pr_';
 // 1st meta box
 $meta_boxes[] = array(
  // Meta box id, UNIQUE per meta box. Optional since 4.1.5
  'id'         => 'standard',
  // Meta box title - Will appear at the drag and drop handle bar. Required.
  'title'      => __( 'Standard Fields', 'your-prefix' ),
  // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
  'post_types' => array( 'portfolio' ),
  // Where the meta box appear: normal (default), advanced, side. Optional.
  'context'    => 'normal',
  // Order of meta box: high (default), low. Optional.
  'priority'   => 'high',
  // Auto save: true, false (default). Optional.
  // List of meta fields
  'width'       => 100,
  'height'      => 100,
  'fields'     => array(
   
   array(
    'name'             => __( 'Image Advanced Upload', 'your-prefix' ),
    'id'               => "{$prefix}img",
    'type'             => 'image_advanced',
    'max_file_uploads' => 10,
    'width'       => 100,
    'height'      => 100,
   )
  )
 );

 return $meta_boxes;
}