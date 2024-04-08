<?php

/**
 * Librerías
 */
require_once 'mnk-lib/mobile_detect.php';

/**
 * Clases Monki
 */
require_once 'mnk-functions/mnk-clases/mnk-validar-formularios.php';

/**
 * Funciones Monki
 */
require_once 'mnk-functions/mnk-core/mnk-obteber-plantilla-email.php';
require_once 'mnk-functions/mnk-core/mnk-obtener-ip-real.php';

require_once 'mnk-functions/mnk-core/mnk-redireccionar.php';
require_once 'mnk-functions/mnk-core/mnk-subir-archivo.php';

/**
 * Funciones Personalizadas
 */
include_once 'mnk-functions/mnk-reglas-formulario.php';

/**
 * Funciones Admin Woo
*/
function mnk_products_meta_box() {
    add_meta_box(
        'custom_details_products',
        esc_html__( 'Detalle de los productos', 'text-domain' ),
        'render_product_meta_box',
        'shop_order', // shop_order is the post type of the admin order page
        'normal', // change to 'side' to move box to side column 
        'core' // priority (where on page to put the box)
    );
}
add_action( 'add_meta_boxes', 'mnk_products_meta_box' );

function render_product_meta_box() {
	// Metabox content
	$count = 1;
	$count_coupon = 1;
	$order_id = $_GET['post'];

	// get formulas
	$products = get_post_meta ($order_id, 'formulas_productos', true);
	$products = (isset ($products) && $products !== '-') ? explode ('***', $products) : false;

	// get cupones
	$coupons = get_post_meta ($order_id, 'cupones_data', true);
	$coupons = (isset ($coupons) && $coupons !== '-') ? explode ('***', $coupons) : false;

	foreach ($products as $key => $product_json) :
		$product_json = json_decode ($product_json);
	?>
		<?php foreach ($product_json as $product) : ?>
		<table cellspacing="0" style="color:#505050;border-bottom:1px solid #e5e5e5;vertical-align:middle;width:100%;">
			<tbody>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;color:#EFB1F2">Formula personalizada <?php echo $count; ?></th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span ><?php echo $product->product; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">¿Tu cabello recibió tratamiento?</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->tratamiento; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Tipo de cabello</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->tipo_cabello; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Cuero cabelludo</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->cuero_cabelludo; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Logro para tu cabello</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->logro; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Fragancia</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->fragancia; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Color Shampoo</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->color_shampoo; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Color Acondicionador</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->color_acondicionador; ?></span></td>
				</tr>
			</tbody>
		</table>
		<br>
		<?php
			$count++;
			endforeach;
		?>
	<?php endforeach;

	foreach ($coupons as $key => $coupon_json) :
		$coupon_json = json_decode ($coupon_json);
	?>
		<?php foreach ($coupon_json as $coupon) : ?>
		<table cellspacing="0" style="color:#505050;border-bottom:1px solid #e5e5e5;vertical-align:middle;width:100%;">
			<tbody>
				<tr>
					<?php
						$giftcardProduct = wc_get_product($coupon->giftcard);
					?>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;color:#EFB1F2">Gift Card <?php echo $count_coupon; ?> (<?php echo $giftcardProduct->get_price(); ?>)</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span style="width:50%;">Para <?php echo $coupon->name; ?></span></td>
				</tr>
				<tr>
					<th style="color:#505050;vertical-align:middle;padding:12px;text-align:left;width:50%;">Correo receptor</th>
					<td style="color:#505050;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $coupon->email; ?></span></td>
				</tr>
			</tbody>
		</table>
		<br>
		<?php
			$count_coupon++;
			endforeach;
		?>
	<?php endforeach; 
}