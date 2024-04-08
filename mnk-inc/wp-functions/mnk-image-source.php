<?php
/**
 *
 * Mnk Function: generate image html
 *
 */
function get_picture_source ($params)
{
    // extacting vars values
    extract ($params);

    // validating params
    if ($array_image && is_array ($array_image)) {
        // init html string
        $html_image = '<picture id="' . $picture_id . '" class="' . $picture_class . '">';

        // iterating arrat image to get url images mobile
        foreach ($array_image as $image) {
            switch ($image['type_image']) {
                case 'webp':
                    $url_webp_image .= $image['image'];
                    break;

                case 'retina':
                    $url_retina_image = $image['image'];
                    break;

                case 'normal':
                    $url_normal_image = $image['image'];
                    break;
            }
        }

        // iterating arrat image to get url images desktop
        if ($array_image_desktop && is_array ($array_image_desktop) && $media_query) {
            foreach ($array_image_desktop as $image) {
                switch ($image['type_image']) {
                    case 'retina':
                        $url_retina_image_desktop = $image['image'];
                        break;
    
                    case 'normal':
                        $url_normal_image_desktop = $image['image'];
                        break;
                }
            }
        }
        

        $data = '';

        // validating lazy
        if ($lazy === true) {
            $lazy = 'm-lazy-js' . ' ' . $img_class;
            $data = 'data-';
        } else {
            $lazy = $img_class;
        }

        // validating images to print source
        if ($url_webp_image) {
            $html_image .= '<source  ' . $data .'srcset="' . $url_webp_image . '" type="image/webp">';
        }

        if ($url_retina_image_desktop && $url_normal_image_desktop) {
            $media_query = ($media_query) ? $media_query : '';
            $html_image .= '<source ' . $data .' srcset="' . $url_normal_image_desktop . ', ' . $url_retina_image_desktop . ' 2x" media="(' . $media_query . ')" type="image/png">';
        }

        if ($url_retina_image) {
            $html_image .= '<source ' . $data .' srcset="' . $url_normal_image . '  1x, ' . $url_retina_image . '  2x" type="image/png">';
        }

        if ($url_normal_image) {
            $html_image .= '<img class="' . $lazy . '" ' . $data .'src="' . $url_normal_image . '">';
        }

        $html_image .= $html_after;

        $html_image .= '</picture>';
    } else {
        $html_image = '';
    }

    return $html_image;
}