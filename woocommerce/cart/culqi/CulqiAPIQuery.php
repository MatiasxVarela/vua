<?php

class CulqiAPIQuery {

    private $base_url = 'https://api.culqi.com/v2/';
    private $api_key;
    private $id = "";
    private $endpoint = "";

    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function querySubscriptions($params) {

        // Si el ID está vacío, se usa la URL base; de lo contrario, se concatena con el ID
        $url = $this->base_url . $this->endpoint . '/' . $this->id;

        // Crear una instancia de WP_Http
        $request = new WP_Http();

        // Configurar la URL y el método de la solicitud
        $args = array(
            'method' => 'GET',
            'timeout' => 45,
            'headers' => array(
                'Authorization' => 'Bearer ' . $this->api_key
            ),
            'body' => $params
        );

        // Realizar la solicitud HTTP
        $response = $request->request($url, $args);

        // Verificar si la solicitud fue exitosa
        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            // Devolver el cuerpo de la respuesta
            return $response['body'];
        } elseif (is_wp_error($response)) {
            // Manejar el error si la solicitud devuelve un objeto WP_Error
            return 'Error en la solicitud: ' . $response->get_error_message();
        } else {
            // Manejar otros errores
            return 'Error en la solicitud.';
        }
    }

    // Método para establecer el valor del endpoint
    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
    }

    // Método para limpiar el valor del endpoint
    public function clearEndpoint() {
        $this->endpoint = "";
    }

    // Método para establecer el valor del ID
    public function setId($id) {
        $this->id = $id;
    }
}