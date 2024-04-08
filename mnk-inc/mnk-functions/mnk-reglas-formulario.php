<?php

$reglas_formulario = array(
	'nombre' => array (
		'requerido' => true,
		'longitud-maxima' => 50
	),
	'dni' => array (
		'longitud-maxima' => 8
	),
	'ruc' => array (
		'longitud-maxima' => 11
	),
	'telefono' => array (
		'requerido' => true,
		'longitud-maxima' => 9
	),
	'correo' => array (
		'requerido' => true,
		'longitud-maxima' => 60,
		'correo-electronico' => true
	),
	'mensaje' => array (
		'requerido' => true,
		'longitud-maxima' => 400
	),
	'condiciones' => array (
		'requerido' => true
	)
);

$filtro_maestro = array('password', 'php', '../', 'index');

?>