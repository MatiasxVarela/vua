<?php
/**
 * Mnk Funcion: pintar un email seguro de trakeo
 */
function mnk_pintar_email_seguro ($email, $tipo, $clases)
{
    $porcion_1 = explode('@', $email);
    $porcion_2 = $porcion_1[1];
    $porcion_1 = $porcion_1[0];
    $porcion_3 = explode('.', $porcion_2);
    $porcion_2 = $porcion_3[0];
    $porcion_3 = $porcion_3[1];

    if ($tipo == 'texto') {
		echo '<script> document.write(\''.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'\');</script>';
    } elseif ($tipo == 'mailto') {
		echo '<script> document.write(\'mai\' + \'lto:'.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'\');</script>';
    } elseif ($tipo == 'especial') {
        echo '<script> document.write(\'<a class="Mnk-box-table -middle -fixed Mnk-width-auto Mnk-margin-auto Mnk-margin-left-768 Mnk-padding-5-0 Mnk-box-underline-hover Mnk-light Mnk-color-white Mnk-color-white-hover" href="mai\' + \'lto:'.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'" title="Comunícate con Nosotros">\' );</script>';
    } elseif ($tipo == 'especial_two') {
		echo '<script> document.write(\'<a class="Mnk-box-table -middle -fixed Mnk-width-auto Mnk-margin-auto Mnk-margin-left-992 Mnk-padding-5-0 Mnk-box-underline-hover Mnk-color Mnk-color-black-hover" href="mai\' + \'lto:'.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'" title="Comunícate con Nosotros">\' );</script>';
    } else {
    	echo '<script> document.write( \'<a title="Correo electrónico" class="'.$clases.'" href="mai\' + \'lto:'.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'"\' + \'>'.$porcion_1.'\' + \'@\' + \''.$porcion_2.'.\' + \''.$porcion_3.'\' + \'</a>\' );</script>';
    }
}