<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;
?>
<h2>TEST</h2>
<?php
do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart-form m-purchase" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <?php do_action('woocommerce_before_cart_table'); ?>
  <div class="m-table__head">
    <span></span><span><?php esc_html_e('Product', 'woocommerce'); ?></span><span><?php esc_html_e('Price', 'woocommerce'); ?></span><span><?php esc_html_e('Quantity', 'woocommerce'); ?></span><span><?php esc_html_e('Subtotal', 'woocommerce'); ?></span>
  </div>
    <?php do_action('woocommerce_before_cart_contents'); ?>
  <div class="m-purchase__card woocommerce-cart-form__contents">
      <?php
      foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
          $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
          $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

          if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
              $post_product = get_posts(array(
                  'numberposts' => 1,
                  'post_type' => 'page',
                  'meta_key' => 'producto',
                  'meta_value' => $product_id
              ))[0];

              $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? get_permalink($post_product->ID) : '', $cart_item, $cart_item_key);
              ?>
            <div class="m-purchase__card__row <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                <?php
                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    'woocommerce_cart_item_remove_link',
                    sprintf(
                        '<a href="%s" class="remove m-delete" aria-label="%s" data-product_id="%s" data-product_sku="%s"><picture>
              <source srcset="%s/img/icon-garbage.png, %s/img/icon-garbage@2x.png 2x" type="image/png"><img src="%s/img/icon-garbage.png">
            </picture></a>',
                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                        esc_html__('Remove this item', 'woocommerce'),
                        esc_attr($product_id),
                        esc_attr($_product->get_sku()),
                        get_bloginfo('template_directory'),
                        get_bloginfo('template_directory'),
                        get_bloginfo('template_directory')
                    ),
                    $cart_item_key
                );
                ?>
              <div class="m-purchase__card__content">
                <div class="m-purchase__card__data" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                  <h3><?php
                      if (!$product_permalink) {
                          echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                      } else {
                          echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                      }

                      do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                      // Meta data.
                      echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                      // Backorder notification.
                      if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                          echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                      }
                      ?></h3>
                  <p>Tipo de prueba: <span><?= $_product->get_name() ?></span>
                  </p>
                </div>
                <div class="m-purchase__card__price"><span><?php
                        echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                        ?></span></div>
                <div class="m-purchase__card__amount">
                    <?php
                    if ($_product->is_sold_individually()) {
                        $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                    } else {
                        $product_quantity = woocommerce_quantity_input(
                            array(
                                'input_name' => "cart[{$cart_item_key}][qty]",
                                'input_value' => $cart_item['quantity'],
                                'max_value' => $_product->get_max_purchase_quantity(),
                                'min_value' => '0',
                                'product_name' => $_product->get_name(),
                            ),
                            $_product,
                            false
                        );
                    }

                    echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                    ?>
                </div>
                <div class="m-purchase__card__price m-total" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>"><span><?php
                        echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                        ?></span></div>
              </div>
            </div>
              <?php
          }
      }
      ?>

      <?php do_action('woocommerce_cart_contents'); ?>

    <div class="actions">

        <?php if (wc_coupons_enabled()) { ?>
          <div class="coupon">
            <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
            <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_attr_e('Apply coupon', 'woocommerce'); ?></button>
              <?php do_action('woocommerce_cart_coupon'); ?>
          </div>
        <?php } ?>

      <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

        <?php do_action('woocommerce_cart_actions'); ?>

        <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
    </div>

      <?php do_action('woocommerce_after_cart_contents'); ?>
  </div>

    <?php do_action('woocommerce_after_cart_table'); ?>
</form>

<?php do_action('woocommerce_before_cart_collaterals'); ?>

<div class="cart-collaterals">
    <?php
    /**
     * Cart collaterals hook.
     *
     * @hooked woocommerce_cross_sell_display
     * @hooked woocommerce_cart_totals - 10
     */
    do_action('woocommerce_cart_collaterals');
    ?>
</div>

<?php do_action('woocommerce_after_cart'); ?>
