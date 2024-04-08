<?php
/**
 * Shortcode para enlace video
 */
function mnk_boton_ir ($atts)
{
    extract( shortcode_atts( array(
        'texto_boton' => '',
        'url_boton' => '',
        'target_boton' => ''
    ), $atts ) );

    if ($texto_boton || $url_boton) :
        $html = '
    	<div class="Mnk-margin-top-50 Mnk-margin-top-40-451">
            <a class="Mnk-row-button -icon-animation Mnk-button" href="' . $url_boton . '" title="ir a ' . $texto_boton . '" target="' . $target_boton . '">
                <div class="Mnk-button_icon -animation -animation-21">
                <strong class="Mnk-button_icon-text -medium">' . $texto_boton . '</strong>
                <span class="Mnk-button_icon-box"><i class="Mnk-font-18 flaticon-arrows-11"></i></span>
                </div>
            </a>
        </div>
        ';
    endif;

    return $html;
}
add_shortcode('boton_ir', 'mnk_boton_ir');