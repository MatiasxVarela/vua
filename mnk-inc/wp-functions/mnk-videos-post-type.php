<?php
function post_type_galeria_videos ()
{
	$labels = array(
		'name' => __( 'Galería de videos'), 
		'singular_name' => __('Galería de videos'),
		'rewrite' => array(
			'slug' => __( 'videos' ) 
		),
		'add_new' => _x('Agregar video', 'videos'), 
		'edit_item' => __('Editar video'),
		'new_item' => __('Nuevo video'),
		'view_item' => __('Ver video'),
		'search_items' => __('Buscar videos'), 
		'not_found' =>__('No se encontro ningun video'),
		'not_found_in_trash' => __('No hay ningun video en la Papelera.'),
		'parent_item_colon' => '',
		'menu_name' => 'Galería de videos'
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
		'menu_position' => 24,
		'show_in_menu'  => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-video-alt3',
		'supports' =>
			array(
				'title'
			) 
	);

	register_post_type(__( 'videos' ), $args);
}

function galeria_videos_messages ($messages)
{
	$messages[__( 'videos' )] = 
		array(
			0 => '',
			1 => sprintf(__('Video Actualizada. <a href="%s">Ver video</a>'), esc_url(get_permalink($post_ID))),
			2 => __('Campo Personalizado Actualizado.'),
			3 => __('Campo Personalizado Eliminado.'),
			4 => __('Video Actualizado.'),
			5 => isset($_GET['revision']) ? sprintf( __('Video Restaurado a revisión %s'), wp_post_revision_title((int)$_GET['revision'],false)) : false,
			6 => sprintf(__('Video Publicada. <a href="%s">Ver video</a>'), esc_url(get_permalink($post_ID))),
			7 => __('Video Guardada.'),
			8 => sprintf(__('Video Enviado. <a target="_blank" href="%s">Ver video</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),
			9 => sprintf(__('Video creada por: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Ver video</a>'),date_i18n( __( 'M j, Y @ G:i' ),strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
			10 => sprintf(__('Video actualizada. <a target="_blank" href="%s">Ver video</a>'), esc_url( add_query_arg('preview','true',get_permalink($post_ID)))),
		);
	return $messages;
}

add_action('init', 'post_type_galeria_videos');
add_filter('post_updated_messages', 'galeria_videos_messages');

?>