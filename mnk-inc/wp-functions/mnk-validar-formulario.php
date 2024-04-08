<?php

/**
 * Mnk Function: Validando formulario
 */
function ajax_mnk_validar_formulario ()
{
	parse_str($_POST['dataString'], $mnk_data);

	if (count($mnk_data)) {

		global $reglas_formulario;
		global $filtro_maestro;

		$validar_formulario = new mnk_validar_formulario($reglas_formulario, $mnk_data);
		$validar_formulario->filtroMaster = $filtro_maestro;

		if ($validar_formulario->validar()) {

			/**
			 * Envía correo a Petroperú de los datos del formulario
			 */
			enviar_correo_petroperu ($mnk_data);

			/**
			 * Registra datos del formulario en la base de datos
			 */
			insertar_registro ($mnk_data);

			redireccionar (MNK_URL_WEB . '/gracias/');

		} else {
			//var_dump($validar_formulario->obtener_errores());exit('here');
			redireccionar (MNK_URL_WEB . '/error/');
			exit();
		}
	}
}
add_action( 'wp_ajax_mnk_validar_formulario', 'ajax_mnk_validar_formulario' );
add_action('wp_ajax_nopriv_mnk_validar_formulario', 'ajax_mnk_validar_formulario');
