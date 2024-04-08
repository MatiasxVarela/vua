<?php
/**
 * set limit to cart
*/
//add_filter ('woocommerce_add_cart_item_data', 'mnk_limit_items_cart', 10, 1);

function mnk_limit_items_cart ($cartItemData) {
	wc_empty_cart();

	return $cartItemData;
}