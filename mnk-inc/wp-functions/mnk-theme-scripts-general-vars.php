<?php

/**
 * Mnk Function: declarando vars general scripts
 */
function mnk_theme_scripts_general_vars ()
{
        echo
        "<script type='text/javascript'>
                var MNK_BASE_HOME = '" . get_bloginfo('url') . "';
                var MNK_BASE_URL = '" . get_bloginfo('template_directory') . "';
                var MNK_ADMIN_URL = '" . get_bloginfo('url') . "/wp-admin/admin-ajax.php';
        </script>";
}

add_action( 'wp_head', 'mnk_theme_scripts_general_vars' );
