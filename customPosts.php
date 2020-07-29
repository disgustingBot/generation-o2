<?php

// Built by www.lattedev.com
add_action( 'init', 'lt_custom_posts' );
function lt_custom_posts() {


	// PROYECTOS



    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Proyectos', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Proyecto', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Proyectos', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'proyecto', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nuevo proyecto', 'text-domain' ),
		'new_item'           => __( 'Nuevo proyecto', 'text-domain' ),
		'edit_item'          => __( 'Editar proyecto', 'text-domain' ),
		'view_item'          => __( 'Ver proyecto', 'text-domain' ),
		'all_items'          => __( 'Todos los proyectos', 'text-domain' ),
		'search_items'       => __( 'Buscar proyectos', 'text-domain' ),
		'not_found'          => __( 'No hay proyectos proyectos.', 'text-domain' ),
		'not_found_in_trash' => __( 'Ningun proyecto en la papelera.', 'text-domain' )
	);


    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctription.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proyecto' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'taxonomies'         => array('loc'),
		'menu_icon'          => 'dashicons-admin-site-alt3',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
	);
	register_post_type( 'proyectos', $args );






  /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  $labels = array(
    'name'             => _x( 'Locations', 'taxonomy general name' ),
    'singular_name'    => _x( 'Location', 'taxonomy singular name' ),
    'search_items'     => __( 'Search by Location' ),
    'all_items'        => __( 'All Locations' ),
    'parent_item'      => __( 'Parent location' ),
    'parent_item_colon'=> __( 'Parent location:' ),
    'edit_item'        => __( 'Edit Location' ),
    'update_item'      => __( 'Update Location' ),
    'add_new_item'     => __( 'Add new Location' ),
    'new_item_name'    => __( 'Name of new Location' ),
  );

  /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  register_taxonomy( 'loc', array( 'restaurant' ), array(
    'labels'             => $labels,
    'public'             => true,
    'hierarchical'       => true,
    'show_ui'            => true,
    'query_var'          => true,
    'show_in_nav_menus'  => true,
    'show_admin_column'  => true,
    'show_in_rest'       => true, // Needed for tax to appear in Gutenberg editor.
    'rewrite'            => array( 'slug' => 'loc' ),
  ));

}
