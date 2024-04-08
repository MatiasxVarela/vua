<?php

/**
 *
 * Template Name: Página sencilla
 * by Monki
 *
 */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
?>

	<?php if (!empty (get_the_content ())) : ?>
		
		<div class="m-flow">
			<div class="m-container">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endif; 


	endwhile;
endif;

?>

<style>
	.m-profile__nav,.m-profile__content{position: relative; z-index: 5;}
	.m-profile__nav ul li:before{ content:none;}
	.m-text-small,.m-text-small *{font-size: 12px;}
	.m-link{margin: 0;padding: 0;text-decoration: none;text-transform: none;}
	.m-button-custom{color: #ffffff!important;padding: 12px 15px!important;min-width: auto!important;height: auto!important;line-height: 1!important;}

	.m-account-table {border: none!important;}
	.m-account-table th{background: #EFB1F2;color: #404040;font-weight: bold!important;padding: 10px 20px!important;}
	.m-account-table tr{background: #fff;margin-bottom: 20px;padding: 15px 10px; border-radius: 10px;}
	.m-account-table tr:last-child{margin-bottom: 0;}
	.m-account-table tr td{background: #fff!important;border: none!important;}
	.m-account-table tr td:before{margin-right: 10px!important;}
	.m-account-table td {font-size: 14px;}
	
	.show-password-input{opacity:0!important;}
	/* select2 */
	.state_select.select2-hidden-accessible + span{position: relative!important;left: 0!important;top: 0!important;transform: translateY(0)!important;pointer-events: all!important;}
	.state_select.select2-hidden-accessible + span .select2-selection{height: 45px!important;}
	.state_select.select2-hidden-accessible + span .select2-selection span{height: 45px!important;line-height: 45px!important;}
	
	@media only screen and (min-width: 769px){
		.m-account-table{border-collapse: collapse!important;border-spacing: 0 10px;}
		.m-account-table tr{padding: 0!important;border: 1px solid #404040;}
		.m-account-table tr:first-child{border-radius: 10px 0 0 10px;}
		.m-account-table td{padding: 20px!important;}
	}

	@media only screen and (min-width: 1024px) {
		h3 {
			font-size: 28px !important;
		}
	}

	.m-page__custom-account .m-footer{display: none;}
	.m-page__custom-account .m-box-custom input{height: 40px;}
	.m-page__custom-account .m-box-custom .m-button{ border: 1px solid #404040;color: #404040;height: 40px;font-size: 16px;line-height: 1.1;display: inline-flex; align-items: center; text-transform: uppercase;justify-content: center;}
	.m-page__custom-account .m-profile-title{ font-size: 30px;font-weight: 500;line-height: 30px;margin-block-end: 0;margin-bottom: 36px;color: #EFB1F2;}
	.m-page__custom-account .m-account__content strong {color: #EFB1F2;}
	.m-page__custom-account .m-account__content .m-link {color: #EFB1F2;}
	.m-page__custom-account h3 {color: #EFB1F2;}

	#account .m-container .m-account__aside{width: 100%;display: block;margin-bottom: 30px;}
	@media only screen and (min-width: 1024px){#account .m-container .m-account__aside{width: 30%;display: inline-block;margin-bottom: 0px;}}
	#account .m-container .m-account__aside ul li{width: 100%;}
	@media only screen and (min-width: 1024px){#account .m-container .m-account__aside ul li{width: 260px;}}
	#account .m-container .m-account__content form>div:first-of-type{display: initial;}

	address{background: #fff!important;padding: 15px!important;border-radius: 10px!important;border: 1px solid #404040!important;}
	mark{background: transparent!important;color: #EFB1F2!important;font-weight: bold!important;}
	fieldset{background: linear-gradient(0deg, rgba(235, 184, 233, 0.3), rgba(235, 184, 233, 0.3)); border-color: #404040!important;}

	.m-page__custom-account .woocommerce-column--shipping-address,.m-page__custom-account .woocommerce-column--billing-address{margin-bottom: 20px;}

	.m-page__custom-account:before{opacity: 0; content: ''; position: absolute;bottom: 0;left: 0;width: 306px;z-index: -1;height: 399px;background-image: url('<?php bloginfo('template_directory'); ?>/img/page-custom-ecommerce.png');}
  	@media only screen and (min-width: 1440px){.m-page__custom-account:before{z-index: 1;opacity:1;}}

</style>

<?php
get_footer(); ?>