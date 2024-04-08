<?php
/**
 * Ocultando editor para pages
 */
function hide_editor ()
{
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  $template_file = get_post_meta ($post_id, '_wp_page_template', true);
  $templates = array ('page-inicio.php', 'page-contact.php');

  if (in_array ($template_file, $templates)) {
    remove_post_type_support ('page', 'editor');
  }
}
add_action( 'admin_init', 'hide_editor' );