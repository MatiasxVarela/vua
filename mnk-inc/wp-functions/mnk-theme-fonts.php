<?php

/**
 * Mnk Function: cargando fonts del template
 */
function mnk_theme_fonts ()
{
    wp_enqueue_style ('google-fonts', 'https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&display=swap', array(), date ('dmyhis'));
    wp_enqueue_style ('google-fonts-alternate', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', array(), date ('dmyhis'));
}

add_action ('wp_enqueue_scripts', 'mnk_theme_fonts');