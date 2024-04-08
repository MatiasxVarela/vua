<?php
/**
 * Mnk template form search
 */
?>
<form role="search" method="get" class="Mnk-row-table -middle Mnk-height-full Mnk-padding-5-0 Mnk-padding-10-0-768" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="¿Qué estás buscando?" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="hidden" name="post_type" value="page">
</form>
