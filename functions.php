<?php

// Comenzar la depuración de WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
    define( 'WC_LOG_DIR', WP_CONTENT_DIR . '/woocommerce-logs/' );
    @ini_set( 'log_errors', 'On' );
    @ini_set( 'display_errors', 'Off' );
    @ini_set( 'error_log', WC_LOG_DIR . 'debug.log' );
}


if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}
/*deletes cart when changing pages*/
/*
add_action( 'template_redirect', 'custom_empty_cart' );
function custom_empty_cart() {
    if ( ! ( is_cart() || is_checkout() ) && ! WC()->cart->is_empty() ) {
        WC()->cart->empty_cart( true );
    }
}
*/
/*deletes cart when changing pages*/

function reducefromCart($id){
	WC()->cart->set_quantity( $id, quantity-1 );
	//echo "nice";
}
add_action( 'reducer', 'reducefromCart' );
//ajax?
add_action('wp_ajax_addProductToCart', 'reducefromCart');
add_action('wp_ajax_nopriv_addProductToCart', 'reducefromCart');

function monki_setup() {

	load_theme_textdomain( 'twentysixteen' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'monki_setup' );


function twentysixteen_scripts() {
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Mnk Functions
 */
require_once 'mnk-inc/mnk-config.php';
require_once 'mnk-inc/mnk-functions.php';
require_once 'mnk-inc/wp-functions.php';
// require_once 'mnk-inc/woo-functions.php';
require_once 'mnk-inc/labcorp-functions.php';

//
function njengah_login_redirect_to_cart($redirect) {
    $redirectPageID = url_to_postid ($redirect);
    $checkoutPageID = wc_get_page_id ('checkout');
    
	//Check if user is logging in from the checkout 
    if( $redirectPageID == $checkoutPageID ){
        return $redirect;
    }
	
	//redirect customer to the cart page 
    return wc_get_page_permalink ('cart');
}

add_filter ('woocommerce_login_redirect', 'njengah_login_redirect_to_cart');

function ajax_get_clear_cart ()
{
    WC()->cart->empty_cart();

    exit();
}

add_action ('wp_ajax_get_clear_cart', 'ajax_get_clear_cart');
add_action ('wp_ajax_nopriv_get_clear_cart', 'ajax_get_clear_cart');

// remove account fields
add_filter( 'woocommerce_billing_fields', 'remove_billing_account_fields', 25, 1 );
function remove_billing_account_fields ( $billing_fields ) {
    // Only my account billing address for logged in users
    if( is_account_page() ){
        unset($billing_fields['billing_city']);
        unset($billing_fields['billing_state']);
        unset($billing_fields['billing_company']);
        unset($billing_fields['billing_postcode']);
    }
    return $billing_fields;
}

/**
 * mailchimp suscription
 */
function rudr_mailchimp_subscriber_status( $email, $status, $list_id, $api_key, $merge_fields = array('FNAME' => '','LNAME' => '') ){
	$data = array(
		'apikey'        => $api_key,
    	'email_address' => $email,
		'status'        => $status,
		'tags'  => array ('15% de descuento Popup'),
		'merge_fields'  => $merge_fields
	);
	$mch_api = curl_init(); // initialize cURL connection
 
	curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
	curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
	curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
	curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
	curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
	curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
	curl_setopt($mch_api, CURLOPT_POST, true);
	curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
 
	$result = curl_exec($mch_api);
	return $result;
}


add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
        
function woocommerce_ajax_add_to_cart() {
	$product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
	$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
	$passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
	$product_status = get_post_status($product_id);

	if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity) && 'publish' === $product_status) {

		do_action('woocommerce_ajax_added_to_cart', $product_id);

		if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
			wc_add_to_cart_message(array($product_id => $quantity), true);
		}

		WC_AJAX :: get_refreshed_fragments();
	} else {

		$data = array(
			'error' => true,
			'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

		echo wp_send_json($data);
	}

	wp_die();
}

add_action( 'woocommerce_order_status_processing', 'code_for_payment' );

function code_for_payment ($order_id)
{
	// get cupones
	$flag_giftcard = false;
	$coupons = get_post_meta ($order_id, 'cupones_data', true);
	$coupons = (isset ($coupons) && $coupons !== '-') ? explode ('***', $coupons) : false;

	/**
	 * cupones
	 */
	if ($coupons && is_array ($coupons)) :
		foreach ($coupons as $key => $coupon_json) :
			$coupon_json = json_decode ($coupon_json);

			foreach ($coupon_json as $coupon) :
				$flag_giftcard = true;

				$giftcardProduct = wc_get_product($coupon->giftcard);
				$price = $giftcardProduct->get_price();
				$code_coupon = $count_coupo . $order_id;

				$to = $coupon->email;
				$name = $coupon->name;

				// generate cupon
				$coupon_name = generate_gift_card ($code_coupon, $price, $to, $name);
			endforeach;
		endforeach;
	endif;

	if ($flag_giftcard) {
		// get data to send email
		$order = wc_get_order ($order_id);
		$email  = $order->get_billing_email ();
		$name = $order->get_billing_first_name ();

		// send email
		send_email_giftcard ($email, $name);
	}
}


function generate_gift_card ($code_coupon, $price, $to, $name)
{
	$unique = '';
	$nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	$abc = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'U', 'V', 'W', 'X', 'Y', 'Z'];

	// get unique string
	for ($i=1; $i < 3; $i++) { 
		$unique .= $nums[rand(0, 9)];
	}

	for ($i=1; $i < 5; $i++) { 
		$unique .= $abc[rand(0, 24)];
	}

	// set coupon name
	$coupon_name = 'VUACARD' . $code_coupon . $unique;
	$product = intval ($price);

	// send email
	send_email_coupons ($to, $name, $product, $coupon_name);

	// args to coupon
	$coupon = array(
		'post_title' => $coupon_name,
		'post_content' => '',
		'post_status' => 'publish',
		'post_author' => 1,
		'post_type' => 'shop_coupon'
	);

	$new_coupon_id = wp_insert_post ($coupon);

	// Add meta
	update_post_meta ($new_coupon_id, 'discount_type', 'fixed_cart');
	update_post_meta ($new_coupon_id, 'coupon_amount', $price);
	update_post_meta ($new_coupon_id, 'individual_use', 'no');
	update_post_meta ($new_coupon_id, 'product_ids', '');
	update_post_meta ($new_coupon_id, 'exclude_product_ids', '');
	update_post_meta ($new_coupon_id, 'usage_limit', 1);
	update_post_meta( $new_coupon_id, 'usage_limit_per_user', 1);
	update_post_meta ($new_coupon_id, 'expiry_date', '');
	update_post_meta ($new_coupon_id, 'apply_before_tax', 'yes');
	update_post_meta ($new_coupon_id, 'free_shipping', 'yes');
}

function send_email_coupons ($to, $name, $product, $coupon_name)
{
	$subject = 'Hola ' . $name . ' te acaban de regalar un giftcard.';
	$img_path = get_bloginfo ('template_directory') . '/img/mails';

	if ($product === 49) {
		$message = '
		<div style="text-align: center;">
			<table id="Tabla_01" width="600" height="903" border="0" cellpadding="0" cellspacing="0" style="text-align: center; border: 0; width: 600px; margin: 0 auto; padding: 0;">
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_01.jpg" width="600" height="129" alt="¡Disfruta!" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_02.jpg" width="600" height="177" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td rowspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_03.jpg" width="353" height="533" alt="" style="vertical-align:top;"></td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_04.jpg" width="183" height="302" alt="" style="vertical-align:top;"></td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_05.jpg" width="64" height="302" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<div style="width: 183px; height: 78px; line-height: 78px; text-align: center;">
							<span style="display: inline-block; vertical-align: middle; font-size: 14px; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif; color: #c68bf7; font-weight: bold;">' . $coupon_name . '</span>
						</div>
					</td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_07.jpg" width="64" height="78" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="2" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_08.jpg" width="247" height="153" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/49_09.jpg" width="600" height="64" alt="" style="vertical-align:top;"></td>
				</tr>
			</table>
		</div>
		';
	} else {
		$message = '
		<div style="text-align: center;">
			<table id="Tabla_01" width="600" height="903" border="0" cellpadding="0" cellspacing="0" style="text-align: center; border: 0; width: 600px; margin: 0 auto; padding: 0;">
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_01.jpg" width="600" height="129" alt="¡Disfruta!" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_02.jpg" width="600" height="177" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td rowspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_03.jpg" width="353" height="533" alt="" style="vertical-align:top;"></td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_04.jpg" width="183" height="302" alt="" style="vertical-align:top;"></td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_05.jpg" width="64" height="302" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<div style="width: 183px; height: 78px; line-height: 78px; text-align: center;">
							<span style="display: inline-block; vertical-align: middle; font-size: 14px; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif; color: #c68bf7; font-weight: bold;">' . $coupon_name . '</span>
						</div>
					</td>
					<td style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_07.jpg" width="64" height="78" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="2" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_08.jpg" width="247" height="153" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td colspan="3" style="margin:0;padding:0;line-height:1;vertical-align:top;">
						<img src="' . $img_path . '/mail_09.jpg" width="600" height="64" alt="" style="vertical-align:top;"></td>
				</tr>
			</table>
		</div>
		';
	}

	// Send email
	wp_mail ($to, $subject, $message, array ('Content-Type: text/html; charset=UTF-8'));
	wp_mail (['lsuito@vua.pe'], $subject, $message, array ('Content-Type: text/html; charset=UTF-8'));
}


function send_email_giftcard ($to, $name) {
	$attachments = get_bloginfo ('template_directory') . '/img/mails/giftcard/giftcard.jpg';
	$subject = 'Hola ' . $name . ' tu regalo giftcard ya se envió.';
	$img_path = get_bloginfo ('template_directory') . '/img/mails/giftcard';

	$message = '
		<div style="text-align: center;">
			<table id="Tabla_01" width="600" height="830" border="0" cellpadding="0" cellspacing="0" style="text-align: center; border: 0; width: 600px; margin: 0 auto; padding: 0;">
				<tr>
					<td style="vertical-align:top;">
						<img src="' . $img_path . '/giftcard_01.jpg" width="600" height="145" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img src="' . $img_path . '/giftcard_02.jpg" width="600" height="97" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img src="' . $img_path . '/giftcard_03.jpg" width="600" height="278" alt="" style="vertical-align:top;"></td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<a href="' . get_bloginfo ('template_directory') . '/img/mails/giftcard/giftcard.jpg" download target="_blank">
							<img src="' . $img_path . '/giftcard_04.jpg" width="600" height="232" alt="" style="vertical-align:top;">
						</a>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;">
						<img src="' . $img_path . '/giftcard_05.jpg" width="600" height="78" alt="" style="vertical-align:top;"></td>
				</tr>
			</table>
		</div>
	';

	// Send email
	wp_mail ($to, $subject, $message, array ('Content-Type: text/html; charset=UTF-8'), $attachments);
	wp_mail (['lsuito@vua.pe'], $subject, $message, array ('Content-Type: text/html; charset=UTF-8'), $attachments);
}

function custom_admin_orders_status_colors() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            // Función para asignar colores a los estados
            function asignarColorEstado() {
                $('.order-status').each(function() {
                    var estado = $(this).text().trim();
                    switch(estado) {
                        case 'Pendiente de pago':
                            $(this).css({
                                'background-color': '#ffcc00', // Amarillo
                                'color': '#777',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        case 'Procesando':
                            $(this).css({
                                'background-color': '#c6e1c6', // Verde
                                'color': '#5b841b',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        case 'Completado':
                            $(this).css({
                                'background-color': '#c8d7e1', // Azul
                                'color': '#2e4453',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        case 'Cancelado':
                            $(this).css({
                                'background-color': '#e5e5e5', // Rojo
                                'color': '#777',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        case 'Reembolsado':
                            $(this).css({
                                'background-color': '#9900cc', // Púrpura
                                'color': '#ffffff',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        case 'Fallido':
                            $(this).css({
                                'background-color': '#ff6600', // Naranja
                                'color': '#ffffff',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
						case 'En espera':
                            $(this).css({
                                'background-color': '#ce112d', // Rojo
                                'color': '#ffffff',
                                'padding': '7px',
                                'border-radius': '6px',
                                'font-size': '15px'
                            });
                            break;
                        // Agrega más casos según tus necesidades
                    }
                });
            }

            // Llama a la función cuando la página está lista
            asignarColorEstado();

            $('.order-preview').css('display', 'none');
        });
    </script>
    <?php
}
add_action('admin_footer', 'custom_admin_orders_status_colors');

function agregar_estilos_select_personalizado() {
    // ID del select
    $select_id = 'prueba_select';

    // Estilos CSS para el select
    $css = '
        #'.$select_id.' {
            /* Estilos aquí */
            padding: 0.75rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            appearance: none;
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23131313%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
            background-repeat: no-repeat;
            background-position: right 0.7rem top 50%;
            background-size: 0.65rem auto;
        }
    ';

    // Agrega los estilos CSS al archivo style.css
    wp_add_inline_style( 'style', $css );
}
add_action( 'wp_enqueue_scripts', 'agregar_estilos_select_personalizado' );