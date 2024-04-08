<div class="m-purchase__detail">
  <h3>Detalle de orden</h3>
</div>
<div class="m-purchase__card">
    <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
        ?>
      <div class="m-purchase__card__content">
        <div class="m-purchase__card__data">
          <h3><?php echo apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key); ?></h3>
          <p>Fecha de la reserva: <span class="label-cart-date">18 octubre, 2020</span></p>
          <p>Horario de la reserva: <span class="label-cart-time">8:00 a 9:00 A.M</span></p>
          <p>Cantidad:
            <span><?php echo apply_filters('woocommerce_checkout_cart_item_quantity', sprintf('(%s)', $cart_item['quantity']), $cart_item, $cart_item_key); ?></span>
          </p>
        </div>
        <div class="m-purchase__card__price">
          <span><?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?></span>
        </div>
      </div>
    <?php } ?>
</div>
<div class="m-purchase__price">
  <p>Total de compra</p>
  <div class="m-purchase__price__subtotal">
    <p>Subtotal</p><span><?php wc_cart_totals_subtotal_html(); ?></span>
  </div>
  <div class="m-purchase__price__shipping">
    <p>Recargo a domicilio</p><span>	</span>
  </div>
  <div class="m-purchase__price__total">
    <p>Total</p><span><?php wc_cart_totals_order_total_html(); ?></span>
  </div>
</div>