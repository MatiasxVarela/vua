<?php

/**
* Add async or defer attributes to script enqueues
* @author Mike Kormendy
* @param  String  $tag     The original enqueued <script src="...> tag
* @param  String  $handle  The registered unique name of the script
* @return String  $tag     The modified <script async|defer src="...> tag
*/
// only on the front-end
if(!is_admin()) {
    function add_asyncdefer_attribute($tag, $handle) {
        // if the unique handle/name of the registered script has 'async' in it
        if (strpos($handle, 'async') !== false) {
            // return the tag with the async attribute
            return str_replace( '<script ', '<script async ', $tag );
        }
        // if the unique handle/name of the registered script has 'defer' in it
        else if (strpos($handle, 'defer') !== false) {
            // return the tag with the defer attribute
            return str_replace( '<script ', '<script defer ', $tag );
        }
        // otherwise skip
        else {
            return $tag;
        }
    }
    add_filter('script_loader_tag', 'add_asyncdefer_attribute', 10, 2);
}

/**
 * Mnk Function: cargando scripts del template
 */
function mnk_theme_scripts ()
{
    wp_enqueue_script('labcorp', get_template_directory_uri() . '/js/vua.js?v2', array(), '1', true);
    //wp_enqueue_script ('custom-script', get_template_directory_uri () .'/js/script.js', array (), '1', true );
}

//add_action ('wp_enqueue_scripts', 'mnk_theme_scripts');