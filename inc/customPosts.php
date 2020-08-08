<?php
// Built by www.lattedev.com
function lt_new_custom_post($name, $icon = '', $taxonomies = array() ){
	$last_letter = substr($name, -1);
	if( in_array( $last_letter, array('a','e','i','o','u') ) ){
		$name_pl    = $name.'s';
	} else {
		$name_pl    = $name.'es';
	}
	$name_M     = ucfirst($name);
	$name_M_pl  = ucfirst($name_pl);
	
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( $name_M_pl, 'post type general name', 'lt-domain' ),
		'singular_name'      => _x( $name_M, 'post type singular name', 'lt-domain' ),
		'menu_name'          => _x( $name_M_pl, 'admin menu', 'lt-domain' ),
		'add_new'            => _x( 'Añadir nuevo', $name, 'lt-domain' ),
		'add_new_item'       => __( 'Añadir nuevo ' . $name, 'lt-domain' ),
		'new_item'           => __( 'Nuevo ' . $name, 'lt-domain' ),
		'edit_item'          => __( 'Editar ' . $name, 'lt-domain' ),
		'view_item'          => __( 'Ver ' . $name, 'lt-domain' ),
		'all_items'          => __( 'Todos les ' . $name_pl, 'lt-domain' ),
		'search_items'       => __( 'Buscar ' . $name_pl, 'lt-domain' ),
		'not_found'          => __( 'No hay ' . $name_pl, 'lt-domain' ),
		'not_found_in_trash' => __( 'Ningun ' . $name . ' en la papelera.', 'lt-domain' )
	);
	
    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctripción.', 'lt-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $name ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'         => $taxonomies,
		'menu_icon'          => $icon,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
	);
	register_post_type( $name, $args );


	foreach ($taxonomies as $key => $tax_name) {

		$last_letter = substr($tax_name, -1);
		if( in_array( $last_letter, array('a','e','i','o','u') ) ){
			$tax_name_pl    = $tax_name.'s';
		} else {
			$tax_name_pl    = $tax_name.'es';
		}
		$tax_name_M     = ucfirst($tax_name);
		$tax_name_M_pl  = ucfirst($tax_name_pl);
		# code...
		/* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
		$labels = array(
			'name'             => _x( $tax_name_M_pl, 'taxonomy general name', 'lt-domain' ),
			'singular_name'    => _x( $tax_name_M, 'taxonomy singular name', 'lt-domain' ),
			'search_items'     => __( 'Buscar por ' . $tax_name, 'lt-domain' ),
			'all_items'        => __( 'Todos les ' . $tax_name_pl, 'lt-domain' ),
			'parent_item'      => __( $tax_name_M . ' padre', 'lt-domain' ),
			'parent_item_colon'=> __( $tax_name_M . ' padre:', 'lt-domain' ),
			'edit_item'        => __( 'Editar ' . $tax_name, 'lt-domain' ),
			'update_item'      => __( 'Actualizar ' . $tax_name_pl, 'lt-domain' ),
			'add_new_item'     => __( 'Añadir nuevo ' . $tax_name, 'lt-domain' ),
			'new_item_name'    => __( 'Nombre del nuevo ' . $tax_name, 'lt-domain' ),
		);

		/* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
		register_taxonomy( $tax_name, array( $name ), array(
			'labels'             => $labels,
			'public'             => true,
			'hierarchical'       => true,
			'show_ui'            => true,
			'query_var'          => true,
			'show_in_nav_menus'  => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true, // Needed for tax to appear in Gutenberg editor.
			'rewrite'            => array( 'slug' => $tax_name ),
		));

	}

}

add_action( 'init', 'lt_custom_posts' );
function lt_custom_posts() {
	lt_new_custom_post( 'proyecto', 'dashicons-admin-site-alt3', array( 'departamento' ) );
	lt_new_custom_post( 'equipo', 'dashicons-groups', array( 'area' ) );
	lt_new_custom_post( 'colaborador', 'dashicons-heart', array( 'entidad' ) );
}