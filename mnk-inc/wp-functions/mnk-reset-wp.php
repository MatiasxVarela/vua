<?php
function disable_embeds_init ()
{
    /**
     * Remove the REST API endpoint.
     */
    remove_action('rest_api_init', 'wp_oembed_register_route');

    /**
     * Turn off oEmbed auto discovery.
     * Don't filter oEmbed results.
     */
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    /**
     * Remove oEmbed discovery links.
     */
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    /**
     * Remove oEmbed-specific JavaScript from the front-end and back-end.
     */
    remove_action('wp_head', 'wp_oembed_add_host_js');
}

add_action('init', 'disable_embeds_init', 9999);

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
 * Remove feed link from header
 */
remove_action( 'wp_head', 'feed_links_extra', 3 ); //Extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // General feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);


/**
 * Disable oEmbed Discovery Links
 */
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);


/**
 * Disable REST API link in HTTP headers
 */
remove_action('template_redirect', 'rest_output_link_header', 11, 0);


/**
 * Remove Open Sans that WP adds from frontend
 */
if (!function_exists('remove_wp_open_sans')) :
    function remove_wp_open_sans() {
        wp_deregister_style( 'open-sans' );
        wp_register_style( 'open-sans', false );
    }
    add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
endif;


/**
 * Eliminando enumeracion de usuarios
 */
if ( ! is_admin() && isset($_SERVER['REQUEST_URI'])){
    if(preg_match('/(wp-comments-post)/', $_SERVER['REQUEST_URI']) === 0 && !empty($_REQUEST['author']) ) {
        wp_die('forbidden');
    }
}

function my_custom_error_login_messages ($error)
{
    global $errors;

    $err_codes = $errors->get_error_codes();

    /*
     * Invalid username.
     * Default: '<strong>ERROR</strong>: Invalid username. <a href="%s">Lost your password</a>?'
     */
    if ( in_array( 'invalid_username', $err_codes ) ) {
        $error = '<strong>ERROR</strong>: Datos incorrectos. <a href="wp-login.php?action=lostpassword">¿Has olvidado tus datos?</a>';
    }

    /**
     * Invalid email.
     */
    if ( in_array( 'invalid_email', $err_codes ) ) {
        $error = '<strong>ERROR</strong>: Datos incorrectos. <a href="wp-login.php?action=lostpassword">¿Has olvidado tus datos?</a>';
    }

    /**
     * Incorrect password.
     */
    if ( in_array( 'incorrect_password', $err_codes ) ) {
        $error = '<strong>ERROR</strong>: Datos incorrectos. <a href="wp-login.php?action=lostpassword">¿Has olvidado tus datos?</a>';
    }

    return $error;
}

//add_filter('login_errors', 'my_custom_error_login_messages');


/**
 * Mnk Function: Remover el campo URL en el formulario de comentarios
 */
function mnk_disable_comment_url($fields)
{ 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','mnk_disable_comment_url');