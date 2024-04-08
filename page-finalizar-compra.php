<?php

/**
 *
 * Template Name: Página Finalizar Compra
 * by Monki
 *
 */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
?>

	<?php if (!empty (get_the_content ())) : ?>

		<section class="m-flow m-box-custom" style="position:relative;z-index:1;">
			<div class="m-container">
				<div class="m-steps">
					<?php
						$class_one = (isset ($_GET['key'])) ? '' : 'm-active';
						$class_two = (isset ($_GET['key'])) ? 'm-active' : '';
					?>
					<ul>
						<li><span>1.</span> Resumen</li>
						<li class="<?php echo $class_one; ?>"><span>2.</span> Finalizar</li>
						<li class="<?php echo $class_two; ?>"><span>3.</span> Confirmación</li>
					</ul>
				</div>
				<?php the_content(); ?>
			</div>
		</section>

	<?php endif; 


	endwhile;
endif;
?>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		// get data steps values
		const dataCoupons = localStorage.getItem('coupons')
		const dataProducts = localStorage.getItem('formulas_productos')

		// set data products
		if (dataProducts) {
			document.querySelector('#formulas_productos').value = dataProducts
		} else {
			document.querySelector('#formulas_productos').value = '-'
		}

		// set data products
		if (dataCoupons) {
			document.querySelector('#cupones_data').value = dataCoupons
		} else {
			document.querySelector('#cupones_data').value = '-'
		}

		// ubigeo
		const $province = document.querySelector('#billing_city_select_field')
		const $optionsProvince = document.querySelectorAll('#billing_city_select option')

		if ($province && $optionsProvince) {
			const $selectProvince = document.createElement('select')

			// print select
			$selectProvince.id = "custom_province_select"
			$province.appendChild($selectProvince)

			// print options
			$optionsProvince.forEach(element => {
				const option = document.createElement('option')
				option.value = element.value
				option.text = element.textContent

				$selectProvince.appendChild(option)
			})

			// event change
			$selectProvince.addEventListener('change', e => {
				const value = e.target.value
				const $labelDistrict = document.querySelector('label[for="billing_district"]')

				if ($labelDistrict) {
					const textLabel = (value === 'LIM') ? 'Distrito' : 'Departamento'
					$labelDistrict.innerHTML = `${textLabel} <abbr class="required" title="obligatorio">*</abbr>`
				}

				// get distritos/departamentos
				ubigeo_load_districts(value)

				// set value
				document.querySelector('#billing_city_select').value = value
			})

			// first load
			ubigeo_load_districts('LIM')
		}

		function ubigeo_load_districts(province) {
			const $district = document.querySelector('#billing_district_field')

			// disabled
			$district.style['pointer-events'] = 'none'

			// ajax
			$.ajax({
				type: 'POST',
				url: MNK_ADMIN_URL,
				data: {
					'action': 'labcorp_ubigeo_load_districts',
					'stateId': province,
				},
				dataType: 'json',
				success: function(districts) {
					// vars
					const district = `#billing_district`
					let htmlOptions = '<option value="">Seleccionar</option>'

					// disabled
					$district.style['pointer-events'] = 'initial'

					if (districts) {
						// get districts
						for (var name in districts) {
							htmlOptions += `<option value="${districts[name]}">${districts[name]}</option>`
						}

						// print districts
						document.querySelector(district).innerHTML = htmlOptions
						//jQuery(district).trigger('change')
					}
				}
			})
		}

		// Payment
		const $reviewOrder = document.querySelector('#order_review table.woocommerce-checkout-review-order-table')

		if ($reviewOrder) {
			$reviewOrder.insertAdjacentHTML('afterend', '<h3 id="order_review_heading">Métodos de pago</h3>')
		}
	})
</script>

<style>
	.woocommerce-additional-fields ,
	#billing_tratamiento_field,
	#billing_cuero_cabelludo_field,
	#billing_tipo_cabello_field,
	#billing_logro_field,
	#billing_fragancia_field,
	#billing_color_shampoo_field,
	#billing_color_acondicionador_field,
	#billing_city_field,
	#billing_state_field,
	#billing_city_select_field .woocommerce-input-wrapper,
	.woocommerce-form-coupon-toggle {display: none !important;}

	.frame-tarjetas .mp-subtitle-custom-checkout {
		color: #EFB3F1 !important;
		font-family: "Zilla Slab",serif !important
	}

	.woocommerce-checkout #payment div.payment_box,
	.mp-frame-links .mp-checkout-link {
		font-family: "Roboto", sans-serif !important;
	}

	#custom_province_select {
		height: 40px;
		line-height: 1;
		font-family: "Roboto", sans-serif;
		font-size: 16px !important;
		background-color: #fff;
		border: 1px solid #aaa;
		border-radius: 4px;
		padding: 1px;
	}

	.select2 .select2-selection {
		height: 40px !important;
		line-height: 1 !important;
	}

	.select2-container--default .select2-selection--single .select2-selection__rendered {
		line-height: 38px !important;
	}

	.woocommerce {
		padding-top: 10px;
	}

	input,
	input.mp-form-control {
		font-size: 16px !important;
		background: #fff;
		border: 1px solid #404040 !important;
		border-radius: 5px;
		padding: 5px 10px;
	}

	.woocommerce form .form-row label {
		font-size: 14px;
		font-weight: normal;
		text-transform: uppercase;
	}

	.m-section-parent-steps{position:relative; z-index: 5;}
	.m-modal__scene.js--active {overflow: inherit;}
	/* select2 */
	.state_select.select2-hidden-accessible + span{position: relative!important;left: 0!important;top: 0!important;transform: translateY(0)!important;pointer-events: all!important;}
	.state_select.select2-hidden-accessible + span .select2-selection{height: 45px!important;}
	.state_select.select2-hidden-accessible + span .select2-selection span{height: 45px!important;line-height: 45px!important;}
	.select2{ max-width: 100%;}
	.select2 .select2-selection{height: 50px;padding-top: 0;}
	.select2 .select2-selection__arrow{ top: 12px;}

	@media only screen and (min-width: 1024px){
		.m-section-parent-steps{ background-color: #F3F7FF;}
	}
	.woocommerce-order{background: #fff;padding: 50px 30px;border-radius: 15px;}
	/*Custom Vua*/
	.m-page__custom-account:before{opacity: 0.5; content: ''; position: absolute;bottom: 0;left: 0;width: 306px;z-index: -1;height: 399px;background-image: url('<?php bloginfo('template_directory'); ?>/img/page-custom-ecommerce.png');}
  	@media only screen and (min-width: 768px){.m-page__custom-account:before{z-index: 1;opacity:1;}}
	.woocommerce * {font-family: "Roboto", sans-serif;}
	.m-page__custom-account .m-flow {padding-bottom: 50px;}
	.m-page__custom-account .m-box-custom h2, .m-page__custom-account .m-box-custom h3 {font-family: Zilla Slab,serif !important; font-size: 23px; margin-bottom: 20px !important;}
	.m-page__custom-account .m-box-custom input.input-text {height: 40px;}
	.m-page__custom-account .m-box-custom .m-button{ border: 1px solid #404040;color: #404040;height: 40px;font-size: 16px;line-height: 1.1;display: inline-flex; align-items: center; text-transform: uppercase;justify-content: center;}
	.m-page__custom-account .m-box-custom .woocommerce-checkout-payment{background: transparent !important;}
	.m-page__custom-account .m-box-custom .payment_box.payment_method_bacs{background: #ca89bc!important;}
	.m-page__custom-account .m-box-custom .payment_box.payment_method_bacs:before{border: 1em solid #ca89bc!important;border-right-color: transparent!important;border-left-color: transparent!important;border-top-color: transparent!important;}
	.m-page__custom-account .m-box-custom .payment_box.payment_method_bacs p{ color: #fff;}

	/*payment*/
	.m-page__custom-account .mp-wallet-button,
	.m-page__custom-account .woocommerce-privacy-policy-text {display: none !important;}
	#payment .form-row label {text-transform: none !important;}
	.m-page__custom-account ul.wc_payment_methods {padding-left: 0 !important; padding-right: 0 !important; padding-top: 0 !important;}
	.m-page__custom-account ul.wc_payment_methods li.wc_payment_method > label {font-size: 20px; font-family: Zilla Slab,serif !important;}


	/*.m-page__custom-account .m-box-custom .payment_box.payment_method_woo-mercado-pago-custom{background-color: #ca89bc!important;}*/
	/*.m-page__custom-account .m-box-custom .payment_box.payment_method_woo-mercado-pago-custom:before{border: 1em solid #ca89bc!important;border-right-color: transparent!important;border-left-color: transparent!important;border-top-color: transparent!important;}*/

	.m-page__custom-account .m-box-custom .woocommerce-order{border:2px solid #404040;}
	.m-page__custom-account .m-box-custom .woocommerce-column--shipping-address,.m-page__custom-account .m-box-custom .woocommerce-column--billing-address{margin-bottom: 20px;}
	.m-page__custom-account .m-box-custom .woocommerce ul.order_details li{margin-bottom: 10px;}

	/*Mensajes customizados*/
	.m-wc-alert{margin: 60px auto 0;text-align: center;}
	.m-wc-alert .m-wc-alert__title {font-family: Zilla Slab;font-size: 28px;}
	.m-wc-alert a{background: linear-gradient(0deg, rgba(190, 240, 241, 0.5), rgba(190, 240, 241, 0.5)), linear-gradient(0deg, #EFB3F1, #EFB3F1);}
	.m-wc-alert p{ margin-bottom: 20px; font-size: 16px;}

	.woocommerce-info { border-top-color: #EFB1F2;}
	.woocommerce-info::before {color: #EFB1F2}
	.woocommerce-error, .woocommerce-info, .woocommerce-message{background-color: transparent;}

	/*botón login*/
	/*este boton es invisible, visibility hidden, dice "inicio"*/
	.m-page__custom-account .m-cart-login {padding: 20px 0;visibility:hidden;display:none;}
	.m-page__custom-account .m-cart-login .m-button { background: linear-gradient(0deg, #E2F2C0, #E2F2C0);; height: 45px; font-size: 14px;visibility:hidden;display:none;}

	@media (min-width: 1024px) {
		.m-page__custom-account .m-cart-login .m-button { width: 440px;}
	}
	

	/*tabla detalle*/
	.m-page__custom-account .woocommerce table.shop_table { border: 0; margin: 0; border-spacing: 0 10px; margin-bottom: 30px;}
	.m-page__custom-account .woocommerce table.shop_table td,
	.m-page__custom-account .woocommerce table.shop_table th {border: 1px solid #404040; background-color: rgba(255, 255, 255, 0.3); margin-bottom: 10px; text-transform: uppercase; font-size: 14px;}
	.m-page__custom-account .woocommerce table.shop_table td:first-child,
	.m-page__custom-account .woocommerce table.shop_table th:first-child {border-radius: 5px 0 0 5px; border-right: 0;}
	.m-page__custom-account .woocommerce table.shop_table td:last-child,
	.m-page__custom-account .woocommerce table.shop_table th:last-child {border-radius: 0 5px 5px 0; border-left: 0;}
	.m-page__custom-account .woocommerce ul#shipping_method li {margin: 0}
	.m-page__custom-account .woocommerce table.shop_table thead tr:first-child { display: none;}
	.m-page__custom-account .woocommerce table.shop_table .order-total th,
	.m-page__custom-account .woocommerce table.shop_table .order-total td { background-color: #EFB3F1;}
                                                                           
	.wc_payment_method payment_method_visanet label img:last-child {display:none !important}

	/*boton pay*/
	.woocommerce-checkout #payment div.form-row {padding-left: 0 !important; padding-right: 0 !important;}
	#payment button.m-button {background-color: #EFB3F1 !important; border: 1px solid #404040 !important; color: #404040 !important; font-size: 15px !important; font-weight: 500 !important; height: 45px; float: none !important;}
</style>

<?php
get_footer(); ?>