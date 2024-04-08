<?php

function mnk_obtener_plantilla ($archivo_plantilla, $datos)
{
	$template = file_get_contents ($archivo_plantilla);

	$llaves = array();
	$valores = array();

	foreach ($datos as $key => $value) {
		$value = ($value) ? $value : '-';

		array_push($llaves, '${'. $key .'}');
		array_push($valores,  $value);
	}

	$plantilla = str_replace ($llaves, $valores, $template);
	return $plantilla;
}

?>