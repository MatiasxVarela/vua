<?php
/**
 * Mnk Function: Estilizando Login
 */
function mnk_custom_login ()
{
    echo '<style type="text/css">
        body, html { background-image:url("https://www.vua.pe/wp-content/themes/vua/img/bg-formula-steps-desktop.jpg") !important; background-position: bottom !important; background-size: 100% 100% !important;}
        .login h1{ background-color:#fff; border: none !important;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.07);padding:15px 0;padding-top:18px;border-bottom:0 !important;border-radius:10px 10px 0 0;}
        #login h1 a, .login h1 a {background-image: url("' . get_stylesheet_directory_uri() . '/img/logo-vua-color-mobile.png");width:50px; height:51px;background-size:50px auto; background-position: 0 0; margin: 0 auto;position:relative;left:-5px; }
        .login form{margin-top:0 !important;border: none !important;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.07);border-radius: 0 0 10px 10px;border-top:1px solid #F0F3FF !important;}
        .wp-core-ui .button, .wp-core-ui .button-secondary{color:#002B8B !important;}
        a:hover{color:#002B8B !important;}
        .login form .input,
        .login form input[type="checkbox"],
        .login input[type="text"] { background-color:#fff !important; border:1px solid #002B8B !important;box-shadow: none !important;font-size: 15px !important;}
        .login form .input:focus,
        .login form input[type="checkbox"]:focus,
        .login input[type="text"]:focus { border-color:#002B8B !important; box-shadow:none;}
        .wp-core-ui .button-primary { border-color:#bef0f1 !important; background-color: #bef0f1 !important; color:#fff !important; transition: background .3s ease-in-out; text-transform:uppercase;font-weight:bold; box-shadow:none !important;text-shadow:none !important;border-radius:5px !important; box-shadow:none;}
        .wp-core-ui .button-primary:hover { background-color:#EFB3F1 !important;border-color:#EFB3F1 !important;color:#fff !important;}
    </style>';
}

add_action( 'login_enqueue_scripts', 'mnk_custom_login' );