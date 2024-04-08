<?php
/**
 * Mnk Function: Ocultar menús para usuario Petroperú
 */
function mnk_remover_menus ()
{
    $user = wp_get_current_user();

    if ( $user->user_login == 'vua-administrador' ) {
        /**
         * Ocultando menús primer nivel respectivamente
         * Escritorio
         * Comentarios
         * Herramientas
         * Plugins
         * Customs Fields
         * Apariencia
         * Usuarios
         */
        remove_menu_page('index.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('plugins.php');
        remove_menu_page('edit.php');
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('themes.php');
        remove_menu_page('options-general.php');
        remove_menu_page('users.php');

        //remove_menu_page('options-general.php');//Customs Fields

        /**
         * Ocultando menús segundo nivel respectivamente
         * Etiquetas
         * Comentarios
         * Medios
         * Editor Tiny
         * Intuitive CPO
         */
        remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
        remove_submenu_page( 'options-general.php', 'options-discussion.php' );
        remove_submenu_page( 'options-general.php', 'options-media.php' );
        remove_submenu_page( 'options-general.php', 'tinymce-advanced' );
        remove_submenu_page( 'options-general.php', 'hicpo-settings' );

        /**
         * Agregado Menús
         */
        add_menu_page( __( 'Inicio', 'noo' ), __( 'Inicio', 'noo' ), 'edit_posts', './', '', 'dashicons-dashboard', 0 );
        add_menu_page( __( 'Inicio', 'noo' ), __( 'Menú principal', 'noo' ), 'edit_posts', './nav-menus.php', '', 'dashicons-menu', 1 );
    }
}
add_action('admin_menu', 'mnk_remover_menus', 102);