<?php
/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails\HTML
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer billing full name */ ?>
<p><?php printf( esc_html__( 'You’ve received the following order from %s:', 'woocommerce' ), $order->get_formatted_billing_full_name() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
//do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

//
$city_billing_x = (get_post_meta ($order->get_id (), '_billing_city_select', true)) ? get_post_meta ($order->get_id (), '_billing_city_select', true) : get_post_meta ($order->get_id (), 'billing_city_select', true);
$city_billing_x = (!empty ($city_billing_x) && $city_billing_x === 'LIM') ? 'Lima' : 'Pronvincia';
$district_department_x = (get_post_meta ($order->get_id (), '_billing_district', true)) ? get_post_meta ($order->get_id (), '_billing_district', true) : get_post_meta ($order->get_id (), 'billing_district', true);

echo '<p style="margin: 0 0 16px;"><strong>Provincia:</strong> ' . $city_billing_x . '</p>';
echo '<p style="margin: 0 0 16px;"><strong>Distrito:</strong> ' . $district_department_x . '</p><br>';

/**
 * Products
 */
$count = 1;
$count_coupon = 1;
$order_id = $order->get_id();

// get formulas
$products = get_post_meta ($order_id, 'formulas_productos', true);
$products = (isset ($products) && $products !== '-') ? explode ('***', $products) : false;

// get cupones
$coupons = get_post_meta ($order_id, 'cupones_data', true);
$coupons = (isset ($coupons) && $coupons !== '-') ? explode ('***', $coupons) : false;
?>

<?php if ($products || $coupons) : ?>
<div class="woocommerce-customer-details" style="width:100%;vertical-align:top;margin-bottom:40px;padding:0">
	<h2 style="color:#d0a8e8;display:block;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">Detalle de los productos</h2>

<?php
foreach ($products as $key => $product_json) :

	$product_json = json_decode ($product_json);
?>
	<?php foreach ($product_json as $product) : ?>
	<table cellspacing="0" style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
		<tbody>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;color:#EFB1F2">Formula personalizada <?php echo $count; ?></th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span style="color:#EFB1F2"><?php echo $product->product; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">¿Tu cabello recibió tratamiento?</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->tratamiento; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Tipo de cabello</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->tipo_cabello; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Cuero cabelludo</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->cuero_cabelludo; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Logro para tu cabello</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->logro; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Fragancia</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->fragancia; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Color Shampoo</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->color_shampoo; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" style="width:50%;">Color Acondicionador</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><?php echo $product->color_acondicionador; ?></span></td>
			</tr>
		</tbody>
	</table>
	<?php
		$count++;
		endforeach;
	?>
<?php endforeach; ?>

<?php
if ($coupons && is_array ($coupons)) :
	foreach ($coupons as $key => $coupon_json) :

	$coupon_json = json_decode ($coupon_json);
?>
	<?php foreach ($coupon_json as $coupon) : ?>
	<table cellspacing="0" style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
		<tbody>
			<tr>
				<?php
					$giftcardProduct = wc_get_product($coupon->giftcard);
				?>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;width:50%" style="width:50%;color:#EFB1F2">Gift Card <?php echo $count_coupon; ?> (<?php echo $giftcardProduct->get_price(); ?>)</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;width:50%"><span style="width:50%;color:#EFB1F2">Para <?php echo $coupon->name; ?></span></td>
			</tr>
			<tr>
				<th style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;width:50%" style="width:50%;">Correo receptor</th>
				<td style="color:#505050;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;width:50%"><span><?php echo $coupon->email; ?></span></td>
			</tr>
		</tbody>
	</table>
	<?php
		$count_coupon++;
		endforeach;
	?>
<?php endforeach; 
endif;
?>

</div>
<?php endif; ?>
<?php

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
//do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
//do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>

<div class="woocommerce-customer-details" style="width:100%;vertical-align:top;margin-bottom:40px;padding:0">
	<h2 style="color:#d0a8e8;display:block;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">Dirección de envío</h2>

	<address class="address" style="padding: 12px; color: #505050; border: 1px solid #e5e5e5;">
		<?php
			$order_data = $order->get_data();
			$email_billing = (isset($order_data['billing']['email'])) ? $order_data['billing']['email'] : false;
			$phone_billing = (isset($order_data['billing']['phone'])) ? $order_data['billing']['phone'] : false;
			$address_billing = (isset($order_data['billing']['address_1'])) ? $order_data['billing']['address_1'] : '';
			$address_billing_2 = (isset($order_data['billing']['address_2'])) ? $order_data['billing']['address_2'] : '';

			// get new billign address
			$address_billing = ($address_billing_2) ? $address_billing . ', ' . $address_billing_2 : $address_billing;

			$city_billing = (get_post_meta ($order->get_id (), 'billing_city_select', true)) ? ', ' . get_post_meta ($order->get_id (), 'billing_city_select', true) : '';
			$departament_billing = (get_post_meta ($order->get_id (), '_billing_district', true)) ? ', ' . get_post_meta ($order->get_id (), '_billing_district', true) : get_post_meta ($order->get_id (), 'billing_district', true);

			if (!empty ($city_billing)) {
				$city_billing = ($city_billing === ', LIM') ? 'Lima' : 'Pronvincia';
			}
		?>

		<strong><?php echo $order->get_shipping_first_name(); ?> <?php echo $order->get_shipping_last_name(); ?></strong><br><br>
		<strong>Dirección</strong>:<?php echo $address_billing . $departament_billing; ?> - <?php echo $city_billing; ?><br>
		<strong>Teléfono</strong>: <a href="tel:<?php echo $phone_billing; ?>" style="color: #202020; font-weight: normal; text-decoration: underline;"><?php echo $phone_billing; ?></a><br>
		<strong>Correo electrónico</strong>: <a href="mailto:<?php echo $email_billing; ?>" style="color: #202020; font-weight: normal; text-decoration: underline;"><?php echo $email_billing; ?></a><br>
	</address>
<?php
?>
</div>

<p style="margin: 20px 0; font-size: 13px;color: #404040; line-height: 1.5;"><strong>* Tu producto llegará máximo de 3 a 6 días útiles.</strong></p>
<?php
/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	//echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email ); ?>

