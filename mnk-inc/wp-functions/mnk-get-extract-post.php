<?php
/**
 * Mnk Function: obtener extraco de un post
 */
function mnk_get_excerpt ($charlength = 180, $postscript = '', $excerpt_text = '')
{
    global $gdl_word_excerpt;

    if ($charlength == 0) return;

    if (empty ($excerpt_text)) {
        if ($gdl_word_excerpt) {
            $excerpt = get_the_excerpt ();
            $charlength++;

            if (strlen($excerpt) > $charlength) {
                $subex = mb_substr($excerpt, 0, $charlength - 5);
                $exwords = explode(' ', $subex);
                $excut = -(strlen($exwords[count($exwords) - 1]));

                if ($excut < 0) {
                    return mb_substr($subex, 0, $excut - 1) . $postscript;
                } else {
                    return mb_substr($subex, 0, -1) . $postscript;
                }
            } else {
                return $excerpt;
            }
        } else {
            return (strlen (get_the_excerpt ()) <= $charlengt ) ? get_the_excerpt () : mb_substr(get_the_excerpt (), 0, $charlength) . $postscript;
        }
    } else {
        $excerpt = $excerpt_text;
        $charlength++;

        if (strlen($excerpt) > $charlength) {
            $subex = mb_substr($excerpt, 0, $charlength - 5);
            $exwords = explode(' ', $subex);
            $excut = -(strlen($exwords[count($exwords) - 1]));

            if ($excut < 0) {
                return mb_substr($subex, 0, $excut - 1) . $postscript;
            } else {
                return mb_substr($subex, 0, -1) . $postscript;
            }
        } else {
            return $excerpt;
        }
    }
}