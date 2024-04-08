<?php

/**
 * Mnk Function: disabling jquery wp
 */
function mnk_theme_scripts_disable_jquery ()
{
    if (!is_admin()) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', false);
    }
}

add_action('init', 'mnk_theme_scripts_disable_jquery');
