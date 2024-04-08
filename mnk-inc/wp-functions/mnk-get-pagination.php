<?php

// Mnk Function: obtener paginación de posts
function mnk_get_pagination ($pagination_id, $pagination_class = '', $max_show_number = 2, $query = '')
{
    global $wp_query;
    if ($query == '') $query = $wp_query;

    if ($query->max_num_pages > 1) {
        // get the current page
        $paged = 1;

        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } else if (get_query_var('page')) {
            $paged = get_query_var('page');
        }
    ?>
        <nav id="<?php echo $pagination_id; ?>" class="<?php echo $pagination_class; ?>">
            <ul>
                <?php
                $max_number = $query->max_num_pages;

                //prev button
                if ($paged > 1) {
                    echo '<li><a href="' . get_pagenum_link($paged - 1) . '" style="width:auto;"><span>' . __('previously', 'monki') . '</span></a></li>';

                    if ($paged - $max_show_number > 1) echo '<li><a href="' . get_pagenum_link(1) . '"><span>1</span></a></li>';
                } else {
                    echo '<li><a href="javascript:void(0)"></a></li>';
                }

                if ($paged - $max_show_number > 2) echo '<li><span>...</span></li>';

                for ($k = $paged - $max_show_number; $k <= ($paged + $max_show_number) & $k <= $max_number; $k++) {
                    if ($k < 1) continue;

                    if ($k == $paged) {
                        echo '<li><a class="Mnk-activo"><span>' . $k . '</span></a></li>';
                    } else {
                        echo '<li><a href="' . get_pagenum_link($k) . '"><span>' . $k . '</span></a></li>';
                    }
                }

                if ($paged + $max_show_number < $max_number) {
                    if ($paged + $max_show_number < ($max_number - 1)) echo '<li><span>...</span></li>';
                    echo '<li><a href="' . get_pagenum_link($max_number) . '"><span>' . $max_number . '</span></a></li>';
                }

                //next button
                if ($paged < $max_number) {
                    echo '<li><a href="' . get_pagenum_link($paged + 1) . '" style="width:auto;padding:0 10px;"><span>' . __('next', 'dwmonkis') . '</span></a></li>';
                } else {
                    echo '<li><a href="javascript:void(0)"></a></li>';
                }
                ?>
            </ul>
        </nav>
        <?php
    }
}