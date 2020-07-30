<?php

// Built by www.lattedev.com
add_action( 'init', 'lattedev_custom_posts' );
function lattedev_custom_posts() {


		// departamentos
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Departamentos', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Departamento', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Departamentos', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'departamento', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nuevo departamento', 'text-domain' ),
		'new_item'           => __( 'Nuevo departamento', 'text-domain' ),
		'edit_item'          => __( 'Editar departamento', 'text-domain' ),
		'view_item'          => __( 'Ver departamento', 'text-domain' ),
		'all_items'          => __( 'Todos los departamentos', 'text-domain' ),
		'search_items'       => __( 'Buscar departamentos', 'text-domain' ),
		'not_found'          => __( 'No hay departamentos departamentos.', 'text-domain' ),
		'not_found_in_trash' => __( 'Ningun departamento en la papelera.', 'text-domain' )
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
		'rewrite'            => array( 'slug' => 'departamento' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'taxonomies'         => array('loc'),
		'menu_icon'          => 'dashicons-admin-site-alt3',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
	);
	register_post_type( 'departamentos', $args );






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
// FIN Departamentos


// EQUIPO
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Equipo', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Equipo', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Equipo', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'miembro', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nuevo miembro', 'text-domain' ),
		'new_item'           => __( 'Nuevo miembro', 'text-domain' ),
		'edit_item'          => __( 'Editar miembro', 'text-domain' ),
		'view_item'          => __( 'Ver miembro', 'text-domain' ),
		'all_items'          => __( 'Todos los miembros', 'text-domain' ),
		'search_items'       => __( 'Buscar miembros', 'text-domain' ),
		'not_found'          => __( 'No hay miembros.', 'text-domain' ),
		'not_found_in_trash' => __( 'No hay miembros en la papelera.', 'text-domain' )
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
		'rewrite'            => array( 'slug' => 'miembros' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'taxonomies'         => array('loc'),
		'menu_icon'          => 'dashicons-groups',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
	);
	register_post_type( 'Miembros', $args );

	// FIN EQUIPO


	// COLABORADORES
	    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
		$labels = array(
			'name'               => _x( 'Colaboradores', 'post type general name', 'text-domain' ),
			'singular_name'      => _x( 'Colaborador', 'post type singular name', 'text-domain' ),
			'menu_name'          => _x( 'Colaboradores', 'admin menu', 'text-domain' ),
			'add_new'            => _x( 'Añadir nuevo', 'colaborador', 'text-domain' ),
			'add_new_item'       => __( 'Añadir nuevo colaborador', 'text-domain' ),
			'new_item'           => __( 'Nuevo colaborador', 'text-domain' ),
			'edit_item'          => __( 'Editar colaborador', 'text-domain' ),
			'view_item'          => __( 'Ver colaborador', 'text-domain' ),
			'all_items'          => __( 'Todos los colaboradores', 'text-domain' ),
			'search_items'       => __( 'Buscar colaboradores', 'text-domain' ),
			'not_found'          => __( 'No hay colaboradores.', 'text-domain' ),
			'not_found_in_trash' => __( 'No hay colaboradores en la papelera.', 'text-domain' )
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
			'rewrite'            => array( 'slug' => 'colaboradores' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
	    'taxonomies'         => array('loc'),
			'menu_icon'          => 'dashicons-heart',
			'menu_position'      => 5,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
		);
		register_post_type( 'colaboradores', $args );

		// FIN COLABORADORES
