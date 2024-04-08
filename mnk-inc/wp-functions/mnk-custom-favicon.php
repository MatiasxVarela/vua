<?php
/**
 * Mnk Function: Añadiendo favicon's personalizados
 */

function add_favicon ()
{
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_bloginfo ('template_directory') . '/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="' . get_bloginfo ('template_directory') . '/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="' . get_bloginfo ('template_directory') . '/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="' . get_bloginfo ('template_directory') . '/img/favicon/site.webmanifest">';
}

add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');
add_action('wp_head', 'add_favicon');