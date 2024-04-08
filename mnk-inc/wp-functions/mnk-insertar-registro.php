<?php
/**
 * 
 */
function insertar_registro ($data)
{
	global $wpdb;

	extract($data);
	$ip_remitente = mnk_obtener_ip_real();
	$ruc = ($ruc) ? $ruc : '-';
	$dni = ($dni) ? $dni : '-';

	$datos = array(
		'id' => NULL,
		'nombre' => $nombre,
		'dni' => $dni,
		'ruc' => $ruc,
		'telefono' => $telefono,
		'correo' => $correo,
		'mensaje' => $mensaje,
		'condiciones' => $condiciones,
		'fecha_registro' => current_time('mysql', 1),
		'ip_remitente' => $ip_remitente,
	);

	$wpdb->insert('mnk_formulario_contacto', $datos, array('%d','%s','%s','%s','%s','%s','%s','%d','%s'));
}
?>