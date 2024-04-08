<?php
add_action('template_redirect', 'check_if_logged_in');
function check_if_logged_in()
{
    $page_checkout = get_option('woocommerce_checkout_page_id');
    $page_user = get_option('woocommerce_myaccount_page_id');
//    $page_id = get_queried_object_id();
    if (!is_user_logged_in() && is_page($page_checkout)) {
        WC()->session->set('checkout_after_login', true);
        wp_redirect(get_permalink($page_user));
        exit;
    }
    if (is_user_logged_in() && is_page($page_user) && WC()->session->get('checkout_after_login')) {
        WC()->session->__unset('checkout_after_login');
        wp_redirect(get_permalink($page_checkout));
        exit;
    }
}

function get_valid_dates()
{
    // vars
    $total_schedule = 1;
    $current_schedule = array ();
    $products_ids = $_POST['ids'];
    $current_date = $_POST['date'];
    $limit_schedule_hourly = intval (get_field ('limit_schedule_hourly', 'option'));

    // validating post vars
    if (!isset ($products_ids) && !isset ($current_date)) {
        wp_send_json (['result' => false]);
        return false;
    } else {
        // itearatings product id to get schedule
        foreach ($products_ids as $key => $product_id) {
            // get page id
            $page_id = get_posts(array(
                'numberposts' => 1,
                'post_type' => 'page',
                'meta_key' => 'producto',
                'meta_value' => $product_id
            ))[0]->ID;

            // get data schedule
            $schedule = get_field ('horarios_de_atencion', $page_id);

            // validating schedule
            if ($key === 0) {
                $current_schedule = $schedule;
            } else {
                if (count ($schedule) < $total_schedule) {
                    $current_schedule = $schedule;
                }
            }

            // flag total schedule
            $total_schedule = count ($schedule);
        }

        // iterating current schedule
        foreach ($current_schedule as $key => $value) {
            $value_schedule = $value['horario'];
            
            // get orders
            $orders = new WP_Query(
                array (
                    'post_type' => 'shop_order',
                    'posts_per_page' => -1,
                    'post_status' => array('wc-completed', 'wc-processing'),
                    'relation' => 'AND',
                    'meta_query' => array(
                        array(
                            'key' => 'apointment_date',
                            'value' => $current_date,
                            'compare' => '='
                        ),
                        array(
                            'key' => 'appointment_time',
                            'value' => $value_schedule,
                            'compare' => '='
                        ),
                    ),
                )
            );

            // set quanty orders
            $current_schedule[$key]['quanty'] = count($orders->posts);

            // validating limit order by schedule
            if (count ($orders->posts) < $limit_schedule_hourly) {
                $current_schedule[$key]['enable'] = true;
            } else {
                $current_schedule[$key]['enable'] = false;
            }
        }
        
        wp_send_json (['result' => true, 'settings' => $current_schedule]);
    }
}

add_action  ('wp_ajax_get_valid_dates', 'get_valid_dates');