<?php
/**
 * Mnk Function: Ocultando items del bar menú del wp
 */
function mnk_remove_admin_bar_links ()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo'); //logo wp
    $wp_admin_bar->remove_menu('updates'); //icono update
    $wp_admin_bar->remove_menu('about'); //'About WordPress'
    $wp_admin_bar->remove_menu('wporg'); //'WordPress.org'
    $wp_admin_bar->remove_menu('documentation'); //'Documentation'
    $wp_admin_bar->remove_menu('support-forums'); // 'Support Forums'
    $wp_admin_bar->remove_menu('feedback'); //'Feedback'
    $wp_admin_bar->remove_menu('customize'); //Curtomize
    $wp_admin_bar->remove_menu('comments'); //Comments
    $wp_admin_bar->remove_menu('new-content'); //Nuevos post
}
add_action('wp_before_admin_bar_render', 'mnk_remove_admin_bar_links');