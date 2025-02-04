<?php

/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

function display_cart_totals() {
        
    ?>

    <div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
        <?php do_action( 'woocommerce_before_cart_totals' ); ?>
        <h3><?php esc_html_e( 'Cart totals', 'woocommerce' ); ?></h3>
        <table cellspacing="0" class="shop_table shop_table_responsive">
            <?php display_subtotal(); ?>
            <?php display_coupons(); ?>
            <?php display_shipping(); ?>
            <?php display_fees(); ?>
            <?php display_taxes(); ?>
            <?php display_order_total(); ?>
        </table>
        <?php display_proceed_to_checkout_button(); ?>
        <?php do_action( 'woocommerce_after_cart_totals' ); ?>
    </div>
    <?php
}


function display_subtotal() {
    // Obtener el subtotal original
    $subtotal = WC()->cart->subtotal;
   
    ?>
    <tr class="cart-subtotal">
        <th><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
        <td data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
    </tr>
    <?php
}

function display_coupons() {
    foreach ( WC()->cart->get_coupons() as $code => $coupon ) {
        ?>
        <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
            <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
            <td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
        </tr>
        <?php
    }
}

function display_shipping() {
    if ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) {
        ?>
        <tr class="shipping">
            <th><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></th>
            <td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
        </tr>
        <?php
    }
}

function display_fees() {
    foreach ( WC()->cart->get_fees() as $fee ) {
        ?>
        <tr class="fee">
            <th><?php echo esc_html( $fee->name ); ?></th>
            <td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
        </tr>
        <?php
    }
}

function display_taxes() {
    if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
        $taxable_address = WC()->customer->get_taxable_address();
        $estimated_text  = '';
        if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
            $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
        }
        if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
            foreach ( WC()->cart->get_tax_totals() as $code => $tax ) {
                ?>
                <tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                    <th><?php echo esc_html( $tax->label ) . $estimated_text; ?></th>
                    <td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr class="tax-total">
                <th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></th>
                <td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
            </tr>
            <?php
        }
    }
}

function display_order_total() {
    // Obtener el total original
    $total = WC()->cart->total;
    ?>
    <tr class="order-total">
        <th><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
        <td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>
    <?php
}

function display_proceed_to_checkout_button() {
    ?>
    <div class="wc-proceed-to-checkout m-box-custom">
        <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
    </div>
    <?php
}

display_cart_totals();

?>