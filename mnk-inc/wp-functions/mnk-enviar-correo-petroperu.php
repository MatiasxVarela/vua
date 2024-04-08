<?php
/**
 * Envía correo a petroperú
 */
function enviar_correo_petroperu ($data)
{
	$email_monkers_html = MNK_URL_TEMPLATE . '/mnk-inc/mnk-email-templates/email_contacto.html';
	$email_monkers_mensaje = mnk_obtener_plantilla ($email_monkers_html, $data);

	$email_monkers_para = 'erivas@petroperu.com.pe';
	$email_monkers_asunto = '¡Hola Petroperú! Hay una nuevo mensaje de contacto.';
	$email_monkers_headers = array('Content-Type: text/html; charset=UTF-8');

	wp_mail ($email_monkers_para, $email_monkers_asunto, $email_monkers_mensaje, $email_monkers_headers);
}
?>