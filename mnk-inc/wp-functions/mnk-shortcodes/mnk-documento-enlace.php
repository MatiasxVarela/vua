<?php
/**
 * Shortcode para enlace video
 */
function mnk_documento_enlace ($atts)
{
    extract( shortcode_atts( array(
        'titulo' => '',
        'url_documento' => ''
    ), $atts ) );

    if ($titulo || $url_documento) :
        $html = '
            <div class="Mnk-row-table -fixed -middle Mnk-margin-top-20 Mnk-margin-bottom-20 Mnk-padding-10-0 Mnk-padding-10-20-451 Mnk-border-bottom-negro-claro">
                <div class="Mnk-width-45 Mnk-width-60-768 Mnk-padding-top-7 Mnk-padding-top-768 Mnk-font-25 Mnk-font-30-768 Mnk-font-40-992"><i class="Mnk-inline-block flaticon-symbol-1"></i></div>
                    <div class="Mnk-content -alterno Mnk-last-margin-bottom Mnk-padding-7-0">
                    <p><a href="' . $url_documento . '" title="' . $titulo . '" target="_blank">' . $titulo . '</a></p>
                </div>
            </div>
        ';
    endif;

    return $html;
}
add_shortcode('documento_enlace', 'mnk_documento_enlace');