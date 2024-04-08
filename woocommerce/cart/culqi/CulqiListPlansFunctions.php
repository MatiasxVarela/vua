<?php

// Incluir el archivo que contiene la clase CulqiSubscriptionQuery
require_once get_template_directory() . '/woocommerce/cart/culqi/CulqiAPIQuery.php';
require_once get_template_directory() . '/woocommerce/cart/culqi/CulquiListPlansQueryRepository.php';

function get_subscription_plans() {

	$data = get_all_active_plans();

	// Verificar si la respuesta contiene datos válidos
	if (!empty($data['data'])) {

	    echo '<tr class="" style="text-align: center;">
				    <td class="product-name" colspan="2" data-title="">
				        <span style="font-size:18px;color: #404040;font-weight:bold;display: block;padding: 5px 0;">¿Quieres suscribirte a vuá club y recibir tu fórmula en automático?</span>
				    </td>
						<td class="product-name" colspan="2" data-title="">
							
							<select name="opciones" id="opciones" style="padding: 10px; border: 2px solid #EFB3F1; border-radius: 8px; background-color: #fff; color: #404040; font-size: 16px;" onchange="getSelectedSubscription()">';

	    // Iterar sobre los datos y generar las opciones del combobox
	    foreach ($data['data'] as $plan) {
	        // Obtener el valor y el texto para la opción
	        $value = $plan['id'];
	        $text = $plan['name']; // Utilizamos el nombre del plan como texto de la opción
	        $amount = $plan['amount'] / 100;
			$selected = '';

			// Verificar si el parámetro 'suscrip' está presente en la URL
            if (isset($_GET['suscrip']) && $_GET['suscrip'] == $value) {
                $selected = 'selected'; // Marcar como seleccionado si el valor coincide
            }


            echo '<option value="' . esc_attr($value) . '" ' . $selected . '>' . esc_html($text) . ' ($/' . esc_html($amount) . ' c/u)</option>';
	    }

	    $selected_solo_uno = "";
	    if (!isset($_GET['suscrip'])) {
    		$selected_solo_uno = "selected";
    	}

	    echo '<option value="no_solo_uno" '.$selected_solo_uno.'>No, pedir solo uno</option>';

	    // Cerrar la etiqueta select
	    echo '</select></td></tr>';
	} else {
	    // Si no hay datos, mostrar un mensaje de error
	    echo 'No se encontraron planes de suscripción.';
	}

	// Incluir la función JavaScript getSelectedSubscription() dentro de la función PHP get_subscription_plans()
    echo '<script type="text/javascript">
        function getSelectedSubscription() {
            var selectedOption = document.getElementById(\'opciones\').value;
            console.log(selectedOption);
            var url = window.location.href.split(\'?\')[0]; // Obtener la URL actual sin los parámetros
            var url_ = url + \'?suscrip=\' + selectedOption;
            if(selectedOption==="no_solo_uno"){
            	url_ = url;
            }
            
            console.log("url_=" + url_);
            window.location.href =  url_;// Agregar el valor seleccionado como parámetro \'s\' en la URL y recargar la página
        }
    </script>';
}