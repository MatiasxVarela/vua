<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	// echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	$link_login = get_site_url();
	echo ('<div class="m-wc-alert"><p class="m-wc-alert__title">¡No estás registrado!</p><p>DEBES INICIAR SESIÓN PARA FINALIZAR EL PAGO</p><a class="m-button" href="'.$link_login.'/mi-cuenta/">AQUÍ</a></div>');
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout m-box-custom" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>

				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

				<div class="m-cart-login">
					<h3>¡No te pierdas de nada!</h3>
					<a href="<?php bloginfo('url'); ?>/mi-cuenta/" class="m-button">Inicio de sesión / Registro</a>
				</div>
			</div>

	<?php endif; ?>
	
			<div class="col-2">

			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
			<h3 id="order_review_heading">Detalle de tu orden</h3>
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
			
			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

			</div>
		</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
