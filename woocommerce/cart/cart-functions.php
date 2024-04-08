<?php

	function get_cart_products() {
	    $cart_items = array();

	    // Obtener los elementos del carrito
	    $cart_contents = WC()->cart->get_cart();

	    // Convertir los datos del carrito en objetos WC_Cart_Item
	    foreach ($cart_contents as $cart_item_key => $cart_item) {
	        $cart_items[] = $cart_item;
	    }

	    return $cart_items;
	}



	function has_pack_item($cart_products) {
	    foreach ($cart_products as $cart_item_key => $cart_item) {
	        $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
	        if (strpos(strtolower($_product->get_name()), "pack") !== false) {
	            return true;
	        }
	    }
	    return false;
	}


	function render_cart_item($cart_item_key, $cart_item) {
	    $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
	    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

	    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
	        ?>
	        <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

	            <td class="product-remove">
	                <?php render_remove_link($cart_item_key, $product_id, $_product); ?>
	            </td>

	            <td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
	                <?php render_product_name($_product, $cart_item, $cart_item_key); ?>
	            </td>

	            <td class="product-price" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
	                <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?>
	            </td>

	            <td class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
	                <?php render_quantity_input($_product, $cart_item_key, $cart_item); ?>
	            </td>

	            <td class="product-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
	                <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
	            </td>
	        </tr>
	    <?php
	    }
	}

	function render_remove_link($cart_item_key, $product_id, $_product) {
	    echo apply_filters(
	        'woocommerce_cart_item_remove_link',
	        sprintf(
	            '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
	            esc_url(wc_get_cart_remove_url($cart_item_key)),
	            esc_html__('Remove this item', 'woocommerce'),
	            esc_attr($product_id),
	            esc_attr($_product->get_sku())
	        ),
	        $cart_item_key
	    );
	}

	function render_product_name($_product, $cart_item, $cart_item_key) {
	    echo '<span style="font-size:18px;color: #404040;font-weight:400;text-transform:uppercase;display: block;padding: 5px 0;">' . wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;') . '</span>';
	    echo '<div class="data-formula" data-product="' . $cart_item['product_id'] . '"></div>';
	    do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);
	    echo wc_get_formatted_cart_item_data($cart_item);
	    if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
	        echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
	    }
	}

	function render_quantity_input($_product, $cart_item_key, $cart_item) {
	    if ($_product->is_sold_individually()) {
	        $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
	    } else {
	        $product_quantity = woocommerce_quantity_input(
	            array(
	                'input_name'   => "cart[{$cart_item_key}][qty]",
	                'input_value'  => $cart_item['quantity'],
	                'max_value'    => $_product->get_max_purchase_quantity(),
	                'min_value'    => '0',
	                'product_name' => $_product->get_name(),
	            ),
	            $_product,
	            false
	        );
	    }
	    // Mostrar el campo de cantidad
	    echo $product_quantity;
	}

?>