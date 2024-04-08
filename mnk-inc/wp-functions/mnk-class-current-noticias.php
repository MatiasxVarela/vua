<?php
/**
 * Mnk Function: Colocando clase activa para menú noticias - Galerías si esta en single
 */
function custom_active_item_classes($classes = array(), $menu_item = false)
{
    global $post;

    $id = (isset ($post->ID) ? get_the_ID() : NULL);

    if (isset($id)){
	    $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type).'/noticias/') ? 'current_page_item current-menu-item active' : '';

	    if ($post->post_type == 'galeria-fotos') {
	    	$classes[] = ($menu_item->url == get_bloginfo('url').'/galeria-de-fotos/') ? 'current_page_item current-menu-item active' : '';
	    }
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );