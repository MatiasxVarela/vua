<?php

/**
 * Mnk The template for displaying pages
 *
 */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
?>

	<?php
		if (get_field ('has_banner') === 'Si') :
	?>
		<section class="m-banner-inner m-page__cart" style="position:relative;z-index:3;">
			<div class="m-flow">
				<?php
					$banner_page_mobile = get_field ('images_mobile_page');
					$banner_page_desktop = get_field ('images_desktop_page');

					$picture = get_picture_source (array (
						'array_image' => $banner_page_mobile,
						'array_image_desktop' => $banner_page_desktop,
						'media_query' => 'min-width: 625px'
					));

					echo $picture;
				?>
			</div>
		</section>
	<?php endif; ?>

	<?php
		if (get_field ('has_breadcrumbs') === 'Si') :
			$background_breadcrumbs = (get_field ('color_breadcrumbs') === 'Celeste') ? 'style="background-color:#f2f6ff;"' : '';
	?>
		<div <?php echo $background_breadcrumbs; ?>>
			<div class="m-container">
				<div class="m-breadcrumbs">
					<?php mnk_get_breadcrumb (); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if (!empty (get_the_content ())) : ?>
		<section class="m-section m-page__cart" style="position:relative;z-index:3;">
			<div class="m-flow">
				<div class="m-container">
					<?php
						$has_title = get_field ('has_title');
						$title_page = (get_field ('custom_title')) ? get_field ('custom_title') : '';
						$title_page = ($title_page) ? $title_page : get_the_title ();
					?>

					<?php if ($has_title === 'Si') : ?>
						<h2 class="m-h3" title="<?php echo $title_page; ?>"><?php echo $title_page; ?></h2>
					<?php endif; ?>

					<div class="m-page__recharge__content m-content-editor"><?php the_content(); ?></div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php
		/**
		 *
		 * Print Mnk Module section
		 *
		 */
		get_template_part( 'template-parts/page/content', 'page' );
	?>

	<?php
	/**
	 *
	 * Validate if Mnk Modules exists
	 *
	 */
	if (shortcode_exists('mnk_modules_plugin')) {
		/**
		 * Print Mnk Modules plugin
		 */
		echo do_shortcode('[mnk_modules_plugin]');
	}

	endwhile;
endif;
?>
<style>
.m-page__custom-account .m-box-custom .m-button{ border: 1px solid #404040;color: #404040;height: 40px;font-size: 16px;line-height: 1.1;display: inline-flex; align-items: center; text-transform: uppercase;justify-content: center;}
/*Mensajes customizados*/
.m-wc-alert{margin: 60px auto 0;text-align: center;}
.m-wc-alert .m-wc-alert__title {font-family: Zilla Slab;font-size: 28px;}
.m-wc-alert a{background: linear-gradient(0deg, rgba(190, 240, 241, 0.5), rgba(190, 240, 241, 0.5)), linear-gradient(0deg, #EFB3F1, #EFB3F1);}
.m-wc-alert p{ margin-bottom: 20px; font-size: 16px;}

.woocommerce-info { border-top-color: #EFB1F2;}
.woocommerce-info::before {color: #EFB1F2}
.woocommerce-error, .woocommerce-info, .woocommerce-message{background-color: transparent;}
body:not(.woocommerce-cart) .cart-empty.woocommerce-info{display: none!important;}
</style>

<?php get_footer(); ?>
