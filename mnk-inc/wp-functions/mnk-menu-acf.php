<?php
/**
 * Mnk Function: loadings acf into menu items
 */
function my_wp_nav_menu_objects ($items, $args)
{
	// loop
	foreach ($items as $item) {
		// vars
        $icon = get_field ('icon_menu', $item);

		// append icon
		if ($icon) {
            $picture = get_picture_source (array (
                'array_image' => $icon
			));
			
			//var_dump ($picture);exit('s');

			$item->title = $picture . '<span>' . $item->title . '</span>';
		}
	}

	// return
	return $items;
}

add_filter ('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);