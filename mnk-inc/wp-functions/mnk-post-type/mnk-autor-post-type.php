<?php
function post_type_Autor(){

		$labels = array(
			'name' => __( 'Autor'), 
			'singular_name' => __('Autor'),
			'rewrite' => array(
				'slug' => __( 'autor' ) 
			),
			'add_new' => _x('Agregar autor', 'Autor'), 
			'edit_item' => __('Editar autor'),
			'new_item' => __('Nuevo autor'),
			'view_item' => __('Ver Sautorlide'),
			'search_items' => __('Buscar autor'), 
			'not_found' =>__('No se encontro ningun autor'),
			'not_found_in_trash' => __('No hay ningun autor en la Papelera.'),
			'parent_item_colon' => '',
			'menu_name' => 'Autores'
		);

	$args = 
	array(

		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		//'taxonomies' => array('post_tag'),
		'hierarchical' => false,
		'menu_position' => 24,
		'show_in_menu'  => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-businessman',
		'supports' =>
			array(
				'title',
				//'editor',
				//'thumbnail'
			) 
	);

	register_post_type(__( 'autor' ),$args);

} // function: post_type_Autor END


// function: Autor_messages BEGIN
function Autor_messages($messages)
{
	$messages[__( 'Autor' )] = 
		array(

			0 => '',

			1 => sprintf(__('Autor Actualizada. <a href="%s">Ver Autor</a>'), esc_url(get_permalink($post_ID))),

			2 => __('Campo Personalizado Actualizado.'),

			3 => __('Campo Personalizado Eliminado.'),

			4 => __('Autor Actualizado.'),

			5 => isset($_GET['revision']) ? sprintf( __('Autor Restaurado a revisión %s'), wp_post_revision_title((int)$_GET['revision'],false)) : false,

			6 => sprintf(__('Autor Publicado. <a href="%s">Ver Autor</a>'), esc_url(get_permalink($post_ID))),

			7 => __('Autor Guardado.'),

			8 => sprintf(__('Autor Enviado. <a target="_blank" href="%s">Ver Autor</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),

			9 => sprintf(__('Autor creado por: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Ver Autor</a>'),date_i18n( __( 'M j, Y @ G:i' ),strtotime($post->post_date)), esc_url(get_permalink($post_ID))),

			10 => sprintf(__('Autor actualizado. <a target="_blank" href="%s">Ver Autor</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),
		);
	return $messages;	
	
} // function: Autor_messages END

add_action('init', 'post_type_Autor');
add_filter('post_updated_messages', 'Autor_messages');

?>