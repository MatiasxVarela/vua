<?php

//include_once 'mnk-config.php';

class mnk_validar_formulario {

	private $reglas = array();
	protected $objeto = array();
	public $error = array();

	public function __construct ($reglas_p = array(), $objeto_p = array())
	{
		$this->reglas = $reglas_p;
		$this->objeto = $objeto_p;
		$this->error = array();
		$this->filtroMaster = array();
	}

	public function validar () {

		foreach ($this->reglas as $key => $value) {
			if (is_array($value)) {
				foreach ($value as $keyValue => $valueValue) {
					switch ($keyValue) {
						case 'requerido':
							if ($valueValue == true) {
								if (!validar_requerido($this->objeto[$key])) {
									$this->error[$key][] = 'requerido';
								}
							}
							break;
						case 'longitud-minima':
							if (!mininmo_caracteres($this->objeto[$key], $valueValue)) {
								$this->error[$key][] = 'longitud mínima';
							}
							break;
						case 'longitud-maxima':
							if (!empty($this->objeto[$key])) {
								if (!maximos_caracteres($this->objeto[$key], $valueValue)) {
									$this->error[$key][] = 'longitud máxima';
								}
							}
							break;
						case 'correo-electronico':
							if (!validar_email($this->objeto[$key])) {
								$this->error[$key][] = 'correo electrónico';
							}
							break;
						case 'numeros':
							if (!empty($this->objeto[$key])) {
								if (!validar_numeros($this->objeto[$key])) {
									$this->error[$key][] = 'números';
								}
							}
							break;
						case 'igual-a':
							if (!igual_a($this->objeto[$key], $this->objeto[$valueValue])) {
								$this->error[$key][] = 'Igual a';
							}
							break;
						case 'mascara-telefono':
							if (!validar_telefono($this->objeto[$key])) {
								$this->error[$key][] = 'mascara de telefono';
							}
							break;
						case 'fecha':
							if ($valueValue == true) {
								if (!validar_fecha($this->objeto[$key])) {
									$this->error[$key][] = 'fecha';
								}
							}
							break;
					}
				}
			}
		}

		return (count($this->error) > 0) ? false : true;
	}

	public function obtener_errores () {
		return $this->error;
	}
}

class mnk_validar_archivos {

	private $reglas = array();
	protected $objeto = array();
	public $error = array();

	public function __construct($reglas_p = array(), $objeto_p = array()) {
		$this->reglas = $reglas_p;
		$this->objeto = $objeto_p;
		$this->error = array();
		$this->filtroMaster = array();
	}

	public function validar () {

		if (count($this->filtroMaster)) {
			foreach ($this->objeto as $key => $value) {
				if (!fnFilter($this->objeto[$key], $this->filtroMaster)) {
					$this->error[$key][] = 'filtroMaster';
				}
			}
		}

		foreach ($this->reglas as $key => $value) {
			if (is_array($value)) {
				foreach ($value as $keyValue => $valueValue) {
					switch ($keyValue) {
						case 'requerido':
							if ($valueValue == true) {
								if (!validar_requerido($this->objeto['name'])) {
									$this->error[$key][] = 'requerido';
								}
							}
							break;
						case 'tipo-archivo':
							if (!validar_formato_archivo($this->objeto['name'], $valueValue)) {
								$this->error[$key][] = 'tipo de archivo';
							}
							break;
						case 'tamano-maximo-archivo':
							if (!validar_tamano_archivo($this->objeto['size'], $valueValue)) {
								$this->error[$key][] = 'tama&ntilde;o de archivo';
							}
							break;
					}
				}
			}
		}

		if (count($this->error) > 0) {
			return false;
		} else {
			return true;
		}
	}
}

function validar_telefono ($val1)
{
	if (eregi('^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$', $val1)) {
		return true;
	} else {
		return false;
	}
}

function igual_a ($val1, $val2)
{
	if ($val2 == $val1) {
		return true;
	} else {
		return false;
	}
}

function maximos_caracteres ($val, $num)
{
	if (strlen($val) <= $num)
		return true;
	else
		return false;
}

function mininmo_caracteres ($val, $num)
{
	if (strlen($val) >= $num)
		return true;
	else
		return false;
}

function validar_requerido ($val)
{
	if ($val)
		return true;
	else {
		return false;
	}
}

function validar_email ($email)
{
	return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email);
}

function validar_formato_archivo ($archivo, $extensiones)
{
	if ($archivo) {
		for ($i = 0; $i < count($extensiones); $i++) {
		  if (strcasecmp ($extensiones[$i],$archivo) == 0){
			return false;
		  }
		}
		return true;
	} else {
		return true;
	}
}

function validar_tamano_archivo ($tamano_archivo, $tamano_max)
{
	if($tamano_archivo){
		if( ($tamano_archivo/1024) > $tamano_max ){
			return false;
		}else{
			return true;
		}
	}else{
		return true;
	}
	
}

function validar_numeros ($value)
{
	if ($value) {
		return is_numeric ($value);
	} else {
		return false;
	}
}

function validar_letras ($str)
{
	return preg_match ('/[^A-Za-z\s ]/', '', $str);
}

function validar_alphanumericos ($string)
{
	return preg_match ('/[^a-zA-Z0-9\s]/', '', $string);
}

function validar_fecha ($date)
{
	#05/12/2109
	#05-12-0009
	#05.12.9909
	#05.12.99
	return preg_match('/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/', $date);
}

function validar_ip ($ip)
{
	return preg_match('/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip);
}

function validar_proxy ()
{
	if ($_SERVER['HTTP_X_FORWARDED_FOR']
		|| $_SERVER['HTTP_X_FORWARDED']
		|| $_SERVER['HTTP_FORWARDED_FOR']
		|| $_SERVER['HTTP_VIA']
		|| in_array($_SERVER['REMOTE_PORT'], array(8080, 80, 6588, 8000, 3128, 553, 554))
		|| @fsockopen($_SERVER['REMOTE_ADDR'], 80, $errno, $errstr, 30)
	) {
		exit('Proxy detected');
	}
}

?>