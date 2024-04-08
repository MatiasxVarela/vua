<?php
/**
 * Shortcode para enlace video
 */
function mnk_video_popup ($atts)
{
    extract( shortcode_atts( array(
        'url_video' => '',
        'url_img' => ''
    ), $atts ) );

    if ($url_video || $url_img) :
        $html = '
            <a class="Mnk-video_js Mnk-video_css -medium Mnk-margin-25-0" href="' . $url_video . '" title="ver video"><img src="' . $url_img . '"></a>
        ';
    endif;

    return $html;
}
add_shortcode('video_popup', 'mnk_video_popup');