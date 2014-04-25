<?php
//	Maxima.
//	Funciones.

//	Color de fondo.
add_theme_support( 'custom-background' );

//	Menu custom.
register_nav_menus(
	array(
		'header' => "Navegaci&oacute;n principal"
	)
);

//	Sidebar dinamico.
$widget_sidebar_args = array(
	'name'			=> 'Widgets Sidebar',
	'id'			=> 'widgets-sidebar',
	'description'	=> 'Elementos del sidebar',
	'class'			=> '',
	'before_widget'	=> '<div id="%1$s" class="sidebar_single widget %2$s">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h3>',
	'after_title'	=> '</h3>'
);

register_sidebar( $widget_sidebar_args );

//	Tipo de contenido custom.
$productos_labels = array(
	'name'               => _x( 'Productos', 'nombre plural' ),
	'singular_name'      => _x( 'Producto', 'nombre singular' ),
	'add_new'            => _x( 'Nuevo', 'producto' ),
	'add_new_item'       => __( 'Nuevo producto' ),
	'edit_item'          => __( 'Editar ' ),
	'new_item'           => __( 'Nuevo producto' ),
	'all_items'          => __( 'Todos los productos' ),
	'view_item'          => __( 'Ver producto' ),
	'search_items'       => __( 'Buscar productos' ),
	'not_found'          => __( 'No se encontraron productos' ),
	'not_found_in_trash' => __( 'No se encontraron productos en la Papelera' ), 
	'parent_item_colon'  => '',
	'menu_name'          => 'Productos'
);
$productos_settings = array(
	'labels'        => $productos_labels,
	'description'   => 'Productos',
	'public'        => true,
	'menu_position' => 5,
	'supports'      => array('title', 'editor'),
	'has_archive'   => true,
);
register_post_type( 'productos', $productos_settings );	

//	Javascript.
