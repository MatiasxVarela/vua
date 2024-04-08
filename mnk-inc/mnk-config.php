<?php
/**
 * Identificación la base de datos
 */
define('MNK_BD_NOMBRE', DB_NAME);
define('MNK_BD_USUARIO', DB_USER);
define('MNK_BD_CONTRASENA', DB_PASSWORD);
define('MNK_BD_HOST', DB_HOST);

define('MNK_URL_WEB', get_bloginfo('url'));
define('MNK_URL_TEMPLATE', get_bloginfo('template_directory'));

/**
 * Identificación del servidor de correos
 */
define('MNK_MAIL_WORDWRAP', 80);
define('MNK_MAIL_HOST', '');
define('MNK_MAIL_USERNAME', '');
define('MNK_MAIL_PASS', '');
define('MNK_MAIL_PORT', 587);
?>