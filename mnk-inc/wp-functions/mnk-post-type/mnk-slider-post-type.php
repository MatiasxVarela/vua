<?php
function post_type_slider_principal ()
{
	$labels = array(
		'name' => __( 'Slider Principal'), 
		'singular_name' => __('Slider Principal'),
		'rewrite' => array(
			'slug' => __( 'slider' ) 
		),
		'add_new' => _x('Agregar slider', 'slider'), 
		'edit_item' => __('Editar slider'),
		'new_item' => __('Nueva slider'),
		'view_item' => __('Ver slider'),
		'search_items' => __('Buscar slider'), 
		'not_found' =>__('No se encontro ningun slider'),
		'not_found_in_trash' => __('No hay ningun Slider en la papelera.'),
		'parent_item_colon' => '',
		'menu_name' => 'Slider Principal'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'show_in_menu'  => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-images-alt',
		'supports' =>
			array(
				'title'
			) 
	);

	register_post_type(__( 'slider' ), $args);
}

function slider_principal_messages ($messages)
{
	$messages[__( 'slider' )] = 
		array(
			0 => '',
			1 => sprintf(__('Slider actualizado. <a href="%s">Ver slider</a>'), esc_url(get_permalink($post_ID))),
			2 => __('Campo Personalizado Actualizado.'),
			3 => __('Campo Personalizado Eliminado.'),
			4 => __('Slider actualizado.'),
			5 => isset($_GET['revision']) ? sprintf( __('Slider restaurado a revisión %s'), wp_post_revision_title((int)$_GET['revision'],false)) : false,
			6 => sprintf(__('Slider publicado. <a href="%s">Ver slider</a>'), esc_url(get_permalink($post_ID))),
			7 => __('Slider guardado.'),
			8 => sprintf(__('Slider enviado. <a target="_blank" href="%s">Ver slider</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),
			9 => sprintf(__('Slider creado por: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Ver slider</a>'),date_i18n( __( 'M j, Y @ G:i' ),strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
			10 => sprintf(__('Slider actualizado. <a target="_blank" href="%s">Ver slider</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),
		);
	return $messages;
}

add_action('init', 'post_type_slider_principal');
add_filter('post_updated_messages', 'slider_principal_messages');

?>