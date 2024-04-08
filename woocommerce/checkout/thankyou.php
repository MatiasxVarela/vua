<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>
			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

				<li class="woocommerce-order-overview__order order">
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
					<strong><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
						<strong><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo cdtplug_get_session_total_order_formatted(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>
		<?php endif; ?>

		<?php
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
		<section class="">
			<h2 class="woocommerce-column__title">Detalle de los productos</h2>

			<?php
			/**
			 * formulas
			 */
			foreach ($products as $key => $product_json) :
				$product_json = json_decode ($product_json);

				foreach ($product_json as $product) : ?>
				<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
					<tbody>
						<tr>
							<th style="width:50%;color:#EFB1F2">Formula Personalizada <?php echo $count; ?></th>
							<td><span style="color:#EFB1F2"><?php echo $product->product; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">¿Tu cabello recibió tratamiento?</th>
							<td><span><?php echo $product->tratamiento; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Tipo de cabello</th>
							<td><span><?php echo $product->tipo_cabello; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Cuero cabelludo</th>
							<td><span><?php echo $product->cuero_cabelludo; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Logro para tu cabello</th>
							<td><span><?php echo $product->logro; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Fragancia</th>
							<td><span><?php echo $product->fragancia; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Color Shampoo</th>
							<td><span><?php echo $product->color_shampoo; ?></span></td>
						</tr>
						<tr>
							<th style="width:50%;">Color Acondicionador</th>
							<td><span><?php echo $product->color_acondicionador; ?></span></td>
						</tr>
					</tbody>
				</table>
				<?php
					$count++;
					endforeach;
			endforeach;
			?>

			<?php
			/**
			 * cupones
			 */
			if (is_array ($coupons) && count ($coupons) > 0) :
				foreach ($coupons as $key => $coupon_json) :
					$coupon_json = json_decode ($coupon_json);

					foreach ($coupon_json as $coupon) : ?>
					<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
						<tbody>
							<tr>
								<?php
									$giftcardProduct = wc_get_product($coupon->giftcard);
									$price = $giftcardProduct->get_price();
								?>
								<th style="width:50%;color:#EFB1F2">Gift Card <?php echo $count_coupon; ?> (<?php echo $price; ?>)</th>
								<td><span style="width:50%;color:#EFB1F2">Para <?php echo $coupon->name; ?></span></td>
							</tr>
							<tr>
								<th style="width:50%;">Correo receptor</th>
								<td><span><?php echo $coupon->email; ?></span></td>
							</tr>
						</tbody>
					</table>
					<?php
						$count_coupon++;
						endforeach;
				endforeach;
			endif;
			?>
		</section>
		<?php endif; ?>

		<script>
			// remove local storage
			localStorage.removeItem('formulas_productos')
			localStorage.removeItem('coupons')
		</script>

		<style>
			.custom-fields {display: none !important;}
			section.woocommerce-customer-details{display: none !important;}
			.address-section {
				font-style: normal;
				margin-bottom: 0;
				border: 1px solid rgba(0,0,0,.1);
				border-bottom-width: 2px;
				border-right-width: 2px;
				text-align: left;
				width: 100%;
				border-radius: 5px;
				padding: 6px 12px;
			}
		</style>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

		<section class="">
			<h2 class="woocommerce-column__title">Dirección de envío</h2>

			<address class="address-section">
				<?php
					$order_data = $order->get_data();
					$email_billing = (isset($order_data['billing']['email'])) ? $order_data['billing']['email'] : false;
					$phone_billing = (isset($order_data['billing']['phone'])) ? $order_data['billing']['phone'] : false;
					$address_billing = (isset($order_data['billing']['address_1'])) ? $order_data['billing']['address_1'] : '';
					$address_billing_2 = (isset($order_data['billing']['address_2'])) ? $order_data['billing']['address_2'] : '';

					// get new billign address
					$address_billing = ($address_billing_2) ? $address_billing . ', ' . $address_billing_2 : $address_billing;

					$city_billing = (get_post_meta ($order->get_id (), 'billing_city_select', true)) ? ', ' . get_post_meta ($order->get_id (), 'billing_city_select', true) : '';
					$departament_billing = (get_post_meta ($order->get_id (), 'billing_district', true)) ? ', ' . get_post_meta ($order->get_id (), 'billing_district', true) : '';

					if (!empty ($city_billing)) {
						$city_billing = ($city_billing === ', LIM') ? 'Lima' : 'Pronvincia';
					}
				?>

				<strong><?php echo $order->get_shipping_first_name(); ?> <?php echo $order->get_shipping_last_name(); ?></strong><br><br>
				<strong>Dirección</strong>: <?php echo $address_billing . $departament_billing; ?> - <?php echo $city_billing; ?><br>
				<strong>Teléfono</strong>: <a href="tel:<?php echo $phone_billing; ?>" style="color: #202020; font-weight: normal; text-decoration: underline;"><?php echo $phone_billing; ?></a><br>
				<strong>Correo electrónico</strong>: <a href="mailto:<?php echo $email_billing; ?>" style="color: #202020; font-weight: normal; text-decoration: underline;"><?php echo $email_billing; ?></a><br>
			</address>
		</section>

		<p style="margin: 20px 0; font-size: 13px;color: #404040; line-height: 1.5;"><strong>* Tu producto llegará máximo de 3 a 6 días útiles.</strong></p>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

	<?php endif; ?>

	<style>
		.woocommerce-table--custom-fields tr:last-child {
			display: none !important;
		}
	</style>

</div>