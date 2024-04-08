<?php
/**
 *
 * Template Name: Página de Inicio
 * by Monki
 *
 */
get_header (); 

if (have_posts ()) :
?>


<?php
    /**
     *
     * Validate if Mnk Modules exists
     *
     */
    if (shortcode_exists ('mnk_modules_plugin')) {
      /**
       * Print Mnk Modules plugin
       */
      echo do_shortcode ('[mnk_modules_plugin]');
    }

endif;

get_footer ();
?>
