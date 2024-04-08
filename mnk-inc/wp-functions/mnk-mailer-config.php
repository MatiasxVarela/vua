<?php

/**
 * Mnk Function: Configurando Mailer
 */
function mnk_mailer_config (PHPMailer $mailer)
{
	$mailer->IsSMTP();
	$mailer->IsHTML(true);
	$mailer->isSendmail();

	//$mailer->WordWrap = MNK_MAIL_WORDWRAP;
	//$mailer->Host	 = MNK_MAIL_HOST;
	//$mailer->Username = MNK_MAIL_USERNAME;
	//$mailer->Password = MNK_MAIL_PASS;
	$mailer->SMTPSecure = 'tls';
	//$mailer->Port	 = MNK_MAIL_PORT;
	$mailer->SMTPAuth = true;
	$mailer->SMTPDebug = 2;
	$mailer->CharSet  = "utf-8";
	$mailer->setFrom('contacto@petroperu.pe', 'Petroperú');
}

add_action( 'phpmailer_init', 'mnk_mailer_config', 10, 1);
