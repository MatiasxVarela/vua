<?php

/**
 * Añadiendo Página de Opciones
 */
if (function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title'    => 'Datos generales',
        'menu_title'    => 'Datos generales',
        'menu_slug'     => 'datos-generales',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
