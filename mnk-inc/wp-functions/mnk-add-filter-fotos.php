<?php
/**
 * Agregar filtro en la lista de galería de fotos
 */
function mnk_add_filter_galeria_fotos ()
{
	global $typenow;

	$taxonomies = array('categoria-galeria-fotos');

	if( $typenow == 'galeria-fotos' ){

		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);

			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Todas las $tax_name</option>";
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name . ' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}
add_action('restrict_manage_posts', 'mnk_add_filter_galeria_fotos');
?>