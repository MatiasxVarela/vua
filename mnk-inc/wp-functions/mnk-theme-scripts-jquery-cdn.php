<?php
/**
 * Mnk Function: disabling jquery wp
 */
function mnk_theme_scripts_jquery_cdn ()
{
    echo '<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';
    echo '<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>';
    echo '<script>window.jQuery || document.write("<script src=\'' . get_template_directory_uri() . ' /js/jquery.js\'><\/script>")</script>';
    echo '<script>window.jQuery || document.write("<script src=\'' . get_template_directory_uri() . ' /js/jquery-migrate.min.js\'><\/script>")</script>';
}

//add_action ('wp_footer', 'mnk_theme_scripts_jquery_cdn');
