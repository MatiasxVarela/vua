<?php
/**
 * Capturar pago y enviar al servicio web poclab
*/

global $ubigeo_data;

//add_action( 'woocommerce_order_status_changed', 'send_data_to_poclab', 99, 4 );

function send_data_to_poclab ($order_id, $old_status, $new_status, $order ){  
    /*$province = get_post_meta ($order_id, 'billing_city_select', true);
    $distric = get_post_meta ($order_id, 'billing_district', true);
    $distric = ($ubigeo_data && isset ($ubigeo_data[$province][$distric])) ? $ubigeo_data[$province][$distric] : '';

    wp_mail("jparker@monki.pe", "Api order log " . $apointment_date[2]. "-". $apointment_date[1]. "-". $apointment_date[0], ":::::RESPUESTA DEL POCLAB::::: ".json_encode($rsCita).":::::: ORDERDATA: ". json_encode($orderData).":::::: ORDER LOG POCLAB: ". json_encode($parametros));
    //wp_mail("jparker@monki.pe", "order 2", "ORDER ID " . $order_id ."\nREQUEST: ".json_encode($paterno)."\nRESPONSE: ".json_encode($rsCita)."\n");

    $logger = wc_get_logger();
    $logger->info( "ORDER ID " . $order_id ."\nREQUEST: ".json_encode($parametros)."\nRESPONSE: ".json_encode($rsCita)."\n", array( 'source' => 'poclab-api' ) );*/
}