<?php

function cargar_archivo ($carpeta, $archivo_a_cargar, $archivo_temporal)
{
	$archivo_a_cargar = basename ($archivo_a_cargar);
	$carpetaCargas = $carpeta.$archivo_a_cargar;

	if (is_uploaded_file ($archivo_temporal)) {
		if (!copy ($archivo_temporal,$carpetaCargas)){
			$error .= 'Un error al copiar el archivo subido';
			return $error;
		}
	}
}

?>