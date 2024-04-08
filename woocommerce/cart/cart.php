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

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>


<div class="m-steps">
	<ul>
		<li class="m-active"><span>1.</span> Resumen</li>
		<li><span>2.</span> Finalizar</li>
		<li><span>3.</span> Confirmación</li>
	</ul>
</div>

<h1 class="m-cart-h1">Carrito de compra</h1>
<div class="m-cart">
	<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
		<?php do_action( 'woocommerce_before_cart_table' ); ?>

		<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
			<thead>
				<tr>
					<th class="product-remove">&nbsp;</th>
					<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
					<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
					<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
					<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

							<td class="product-remove">
								<?php
									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										'woocommerce_cart_item_remove_link',
										sprintf(
											'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
											esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
											esc_html__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() ),
											get_bloginfo('template_directory'),
											get_bloginfo('template_directory'),
											get_bloginfo('template_directory')
										),
										$cart_item_key
									);
								?>
							</td>

							<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
							<?php
							echo '<span style="font-size:18px;color: #404040;font-weight:400;text-transform:uppercase;display: block;padding: 5px 0;">' . wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' ) . '</span>';
							echo '<div class="data-formula" data-product="' . $product_id . '"></div>';

							do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

							// Meta data.
							echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

							// Backorder notification.
							if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
							}
							?>
							</td>

							<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>

							<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
							<?php					
										/*
										function button1() { 											
											echo "This is Button1 that iss selected";
										}
										if(isset($_POST['button34aa1'])) { 
											button1(); 
										}
										<form method="post" action="cart.php"> 
												  	<input type="submit" name="someAction"
															 class="test" value="-" /> 
												</form>	
										*/

										//WC()->cart->set_quantity( $cart_item_key, $cart_item['quantity']-1 );					 
							?>
												
								
									
								
							<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
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
							/*
							echo '<div class="test"><span>- ' . $cart_item['quantity'] . '</span>';
							*/
							?>
								
							<div id="resultMsg" class="test"><span>
								
								<?php
								/*	
									echo "<a href='https://www.vua.pe/carrito/?remove_item=" . $cart_item_key . "&_wpnonce=22c445f101'>-</a>"
								*/
								?>								
								
								<?php echo $cart_item['quantity']  ?> </span>
								
								<?php
									
									echo "<a href='https://www.vua.pe/?add-to-cart=" . $cart_item['product_id'] . "'>+</a></div>"
								?>
							</td>

							<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>
						</tr>
						<?php
					}
				}
				?>

				<?php do_action( 'woocommerce_cart_contents' ); ?>

				<tr>
					<td colspan="6" class="actions">

						<?php if ( wc_coupons_enabled() ) { ?>
							<div class="coupon">
								<h4>Código de descuento</h4>
								<p>Ingresa acá tu cupón si tienes uno</p>
								<div style="padding: 0 10px">
									<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input style="min-width: 125px;" type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button m-button-cupon" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
									<?php do_action( 'woocommerce_cart_coupon' ); ?>
								</div>
							</div>
						<?php } ?>

						<?php do_action( 'woocommerce_cart_actions' ); ?>

						<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
					</td>
				</tr>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</tbody>
		</table>
		<?php do_action( 'woocommerce_after_cart_table' ); ?>
	</form>

	<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	<div class="cart-collaterals">
		<div class="vua-cart-disclaimer">
			<p>* Tu producto llegará máximo de 3 a 6 días útiles.</p>
		</div>
		<?php
			/**
			 * Cart collaterals hook.
			 *
			 * @hooked woocommerce_cross_sell_display
			 * @hooked woocommerce_cart_totals - 10
			 */
			do_action( 'woocommerce_cart_collaterals' );
		?>
	</div>

	<?php do_action( 'woocommerce_after_cart' ); ?>
</div>


<style>
  .m-page__custom-account:before{content: ''; position: absolute;bottom: 0;left: 0;width: 306px;z-index: -1;height: 399px;background-image: url('<?php bloginfo('template_directory'); ?>/img/page-custom-ecommerce.png');}
  @media only screen and (min-width: 768px){.m-page__custom-account:before{z-index: 1;}}
  .m-page__custom-account .m-box-custom .m-button{background: linear-gradient(0deg, rgba(190, 240, 241, 0.5), rgba(190, 240, 241, 0.5)); border: 1px solid #404040;color: #404040;height: 40px;font-size: 16px;line-height: 1.1;display: inline-flex; align-items: center; text-transform: uppercase;justify-content: center;}
  .m-page__custom-account .m-cart * {font-family: "Roboto", sans-serif;}
  .m-page__custom-account h3 {font-family: Zilla Slab,serif !important; font-size: 20px; margin-bottom: 10px !important;}
  .m-page__custom-account .remove {color: #EFB1F2;}
  .m-page__custom-account .woocommerce table.shop_table {border: 0;border-radius: 9px;}
  .m-page__custom-account .woocommerce table.shop_table thead th { border: 1px solid #404040; border-left: 0;border-right: 0;font-weight: 500;text-transform: uppercase;}
  .m-page__custom-account .woocommerce table.shop_table thead th:first-child {border-radius: 9px 0 0 9px;border-left: 1px solid #404040;}
  .m-page__custom-account .woocommerce table.shop_table thead th:last-child {border-radius: 0 9px 9px 0;border-right: 1px solid #404040;}
  .m-page__custom-account .woocommerce table td { border-bottom: 0 !important}
  .m-page__custom-account .woocommerce .order-total > * { border-bottom: 1px solid #404040!important;}
  .m-page__custom-account .woocommerce a.remove {width:20px;height:25px;display:inline-block;color: transparent; background-color: transparent !important;font-size: 0;background-image: url('<?php bloginfo('template_directory'); ?>/img/icon-detele.png');background-size: 20px auto; background-position: center;border-radius: 0 !important;}
  
  .vua-cart-disclaimer{margin-bottom: 20px;}
  .vua-cart-disclaimer p{margin-bottom: 0;font-size: 13px;}
  @media only screen and (min-width: 768px){.vua-cart-disclaimer{float: left;}}

  .cart_totals table.shop_table {
	overflow: hidden;
	border-radius: 5px;
	border: 1px solid #404040 !important;
	background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3));
  }

  .test{
	border-radius: 10px;
    display: inline-block;
    height: 30px;
    padding-right: 10px;
    padding-left: 10px;
    padding-top: 4px;
    background-color: #efb1f2;
    border: 1px solid black;
    font-weight: 600;
    font-size: 16px;
  }

  .test:hover{
	  cursor:pointer;
  }

  .cart_totals table.shop_table .cart-subtotal th,
  .cart_totals table.shop_table .cart-subtotal td {
	border-bottom: 1px solid #404040 !important;
  }

  .data-formula p {
	  font-size: 12px;
	  line-height: 16px;
	  margin:0;
  }

  .data-formula article {
	  padding: 5px 0;
	  margin: 5px 0 0;
	  border-top: 1px solid #eee;
  }

  .m-cart-h1 {
	  font-weight: 500;
  }

  @media (min-width:1280px) {
	  .m-cart-h1 {
		  font-size: 30px;
		  line-height: 40px;
	  }
  }

  .coupon {
	  text-align: left;
	  border-radius: 5px;
	  border: 1px solid #404040;
	  padding: 5px 0;
	  margin-top: 5px;
	  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3));
  }

  .coupon h4 {
	font-family: Zilla Slab !important;
	font-style: normal;
	font-weight: 500;
	font-size: 26px;
	line-height: 25px;
	margin: 0;
	border-bottom: 1px solid #404040;
	display: block;
	padding: 0 10px 4px;
  }

  .coupon p {
	margin: 0;
	font-size: 13px;
	font-weight: 500;
	padding: 5px 10px;
	text-transform: uppercase;
  }

  .coupon label {
	display: none;
  }

  .coupon input {
	background: linear-gradient(0deg, rgba(235, 184, 233, 0.5), rgba(235, 184, 233, 0.5));
	border-radius: 5px;
	border: 0 !important;
  }

  @media (min-width:768px) {
	.woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals {
		margin-top: -130px;
	}

	.coupon {
		width: 300px;
	}
  }
</style>
	  


<script type="text/javascript">
	function calculator(quantity, id){
		console.log("quant",quantity)
		console.log("id",id)				
		
		
		$.ajax({
		  method: "POST",
		  //url: "<?php echo admin_url('admin-ajax.php'); ?>",
		  url: "<?php echo ajaxurl ?>",

		  data: {
					id: quantity,
					action:"reducefromCart"
				}
		}).done(function( response ) {
			console.log("done!", response);
		});

	}
</script>