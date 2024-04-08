<?php
/**
 * Mnk Function : Get breadcrumb page
 */
function mnk_get_breadcrumb ()
{
	global $post;

	if (!is_front_page()) {
		/**
		 *  Start the breadcrumb with a link to your homepage
		 */
		$html = '<ul>';
		$html .= '<li><a href="' . get_bloginfo('url') . '/">Inicio</a></li>';

		/**
		 * Check if the current page is and this page has parent
		 */
		if (is_page ()) {
			if ($post->post_parent) {
				$parent_id = wp_get_post_parent_id ($post->ID);
				$html .= '<li><a href="' . get_the_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a></li>';
			}

			$html .= '<li class="css--active"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		}
		/**
		 * Check if the current page is a single
		 */
		elseif (is_single()){
			/**
			 * Check if the post type is products
			 */
			if ($post->post_type == 'productos') {
				$html .= '<li><a href="' . get_bloginfo('url') . '/productos/">Productos</a></li>';
			} 
			/**
			 * Else always are for blog
			 */
			else {
				$html .= '<li><a href="' . get_bloginfo('url') . '/blog/">Blog</a></li>';
			}			

			$html .= '<li class="css--active"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		}
		/**
		 * Check if the current page is a category
		 */
		elseif (is_category()) {
			$category = get_the_category ();

			$html .= '<li><a href="' . get_bloginfo('url') . '/blog/">Blog</a></li>';
			$html .= '<li class="css--active"><a href="' . get_bloginfo('url') . '/categoria-blog/' . $category[0]->slug . '">' . $category[0]->name . '</a></li>';

		}
		/**
		 * Check if the current page is a product category
		 */
		elseif (is_tax('categoria-productos')) {
			$queried_object = get_queried_object(); 
			$taxonomy = $queried_object->taxonomy;
			$term_id = $queried_object->term_id; 

			$product_category = get_term ($term_id, $taxonomy);

			$html .= '<li><a href="' . get_bloginfo('url') . '/productos/">Productos</a></li>';
			$html .= '<li class="css--active"><a href="' . get_bloginfo('url') . '/categoria-productos/' . $product_category->slug . '">' . $product_category->name . '</a></li>';

		} 

		/**
		 *  Finishing the breadcrumb
		 */
		$html .= '</ul>';
		
		echo $html;
	}
}
