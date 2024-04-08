<?php

require_once get_template_directory() . '/woocommerce/cart/culqi/CulqiAPIQuery.php';

function get_all_active_plans() {
    $api_key = constant('CULQI_API_KEY');
    $culqi_query = new CulqiAPIQuery($api_key);
    $culqi_query->setEndpoint("recurrent/plans");
    $params = array('status' => '1');
    $response = $culqi_query->querySubscriptions($params);
    $data = json_decode($response, true);
    return $data;
}

function get_plan_by_id($id) {
    $api_key = constant('CULQI_API_KEY');
    $culqi_query = new CulqiAPIQuery($api_key);
    $culqi_query->setId($id);
    $culqi_query->setEndpoint("recurrent/plans");
    $response = $culqi_query->querySubscriptions([]);
    
    $data = json_decode($response, true);

    // Comprobamos si la decodificación del JSON fue exitosa
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error al decodificar la respuesta JSON");
    }

    // Devolvemos la respuesta sin necesidad de manipularla, ya que la estructura del JSON varía según el ID
    return $data;
}