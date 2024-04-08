<?php
/**
 *
 * Template Name: Página de producto
 * by Monki
 *
 */
get_header ();

if (have_posts ()) :
  while ( have_posts() ) : the_post();

  $is_trans = (get_field ('trans') === 'Si') ? true : false;
  $is_diagnostics = (get_field ('type_product') === 'Diagnósticos') ? true : false;
  $is_process = (get_field ('service_type') === 'Procedimiento') ? true : false;
  $prefix_section = ($is_diagnostics) ? 'm-inner-test' : 'm-inner-services';
  $list_features_class = ($is_diagnostics) ? 'm-list--inline' : 'm-list-space';
?>

<section class="m-section <?php echo $prefix_section; ?>" id="m-inner-test">
  <div class="m-container">
    <div class="<?php echo $prefix_section; ?>__container">
      <div class="<?php echo $prefix_section; ?>__banner">
        <?php
					$banner_page_mobile = get_field ('images_mobile_page');
					$banner_page_desktop = get_field ('images_desktop_page');

					$picture = get_picture_source (array (
						'array_image' => $banner_page_mobile,
						'array_image_desktop' => $banner_page_desktop,
						'media_query' => 'min-width: 640px'
					));

					echo $picture;
				?>
      </div>

      <div class="<?php echo $prefix_section; ?>__content">
        <div>
          <?php
            if (get_field ('has_breadcrumbs') === 'Si') :
              $background_breadcrumbs = (get_field ('color_breadcrumbs') === 'Celeste') ? 'style="background-color:#f2f6ff;"' : '';
          ?>
            <div class="m-breadcrumbs">
              <?php mnk_get_breadcrumb (); ?>
            </div>
          <?php endif; ?>

          <?php if ($is_diagnostics) : ?>
            <?php /*<a class="m-button-back" href="./diagnostics-covid.html">
              <i>
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 2.0625L3.05405 6.375L7.25 10.6875L5.97297 12L0.499998 6.375L5.97297 0.75L7.25 2.0625Z" fill="#F06500"/>
                </svg>
              </i>
              <span>Regresar</span>
            </a>*/?>
          <?php endif; ?>

          <?php
            $has_title = get_field ('has_title');
            $title_page = (get_field ('custom_title')) ? get_field ('custom_title') : '';
            $title_page = ($title_page) ? $title_page : get_the_title ();
          ?>
          <?php if ($has_title) : ?>
            <h2 class="m-h3" title="<?php echo $title_page; ?>"><?php echo $title_page; ?></h2>
          <?php endif; ?>

          <div class="m-page__recharge__content m-content-editor" style="text-align:left;"><?php the_content(); ?></div>
          <p></p>

          <?php if (have_rows ('symptoms')) : ?>
          <div class="m-test-signs">
            <?php while (have_rows ('symptoms')) : the_row (); ?>
            <div>
              <div class="m-test-signs__picture">
                <?php
                  $image_contact = get_sub_field ('icon_desktop');

                  $picture = get_picture_source (array (
                    'array_image' => $image_contact,
                    'picture_class' => 'm-lazy__img',
                    'lazy' => true
                  ));

                  echo $picture;
                ?>
              </div>
              <p><?php the_sub_field ('name'); ?></p>
            </div>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>

          <?php if (have_rows ('features')) : ?>
          <ul class="m-list <?php echo $list_features_class; ?>">
            <?php while (have_rows ('features')) : the_row (); ?>
            <li>
              <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12.0687" width="2.7145" height="12.4867" rx="1.35725" transform="rotate(44.6449 12.0687 0)" fill="#F06500"/>
                <rect y="5.56464" width="2.7145" height="7.32965" rx="1.35725" transform="rotate(-44.3322 0 5.56464)" fill="#F06500"/>
              </svg>
              <span><?php the_sub_field ('name'); ?></span>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>

          <?php if (have_rows ('releated_products') && !$is_diagnostics) : ?>
            <h6>Elige la prueba que te interese:</h6>
            <div class="m-services-types">
              <?php while (have_rows ('releated_products')) : the_row (); ?>
                <?php
                  $link_product = get_sub_field ('link_product');
                  $link_product_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="m-services-types__picture" href="<?php echo $link_product['url']; ?>" target="<?php echo $link_product_target; ?>">
                  <div class="m-inner-services__card--covid-soft">
                    <?php
                      $image_contact = get_sub_field ('icon_product');

                      $picture = get_picture_source (array (
                        'array_image' => $image_contact,
                        'picture_class' => 'm-lazy__img',
                        'lazy' => true
                      ));

                      echo $picture;
                    ?>
                  </div>

                  <p><?php echo $link_product['title']; ?></p>
                </a>
                <?php endwhile; ?>
              </div>
          <?php endif; ?>

          <?php if ($is_diagnostics) :
              $product_id = get_field ('producto');
          ?>
            <form action="?add-to-cart=<?= $product_id ?>" class="cart" method="post" enctype="multipart/form-data">

              <?php if ($is_trans) : ?>
              <?php /*div class="m-test-amount"><span>Cantidad:</span>
                <div class="m-input m-input--select m-input--light m-input--small">
                  <select class="m-input--light m-input--small" id="amount" name="quantity">
                      <?php for ($i = 1; $i < 11; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php endfor; ?>
                  </select>
                </div>
              </div>*/?>
              <?php endif; ?>

                <?php if (get_field('price') && $is_diagnostics) : ?>
                  <div class="m-test-price">
                    <span>Precio: </span>
                    <strong id="m-price-product" class="m-price" data-price="<?php the_field('price'); ?>" data-total="<?php the_field('price'); ?>">S/<?php the_field('price'); ?></strong>
                  </div>
                <?php endif; ?>

              <div class="m-box-center">
                <?php if ($is_trans) : ?>
                  <button type="submit" data-quantity="1" data-product_id="<?= $product_id ?>" class="m-button button alt ajax_add_to_cart add_to_cart_button product_type_simple"><picture>
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/shopping-car.png, <?php bloginfo ('template_directory'); ?>/img/shopping-car@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/shopping-car.png">
                    </picture><span>Agregar a carrito</span>
                  </button>
                <?php endif; ?>
                <a class="m-button m--line m-modal__button" href="javascript:void(0)" title="Solicitar para empresa" data-modal="form_enterprise">
                  <span>Solicitar para empresa</span>
                </a>
              </div>
              
              <?php if ($is_diagnostics && $is_trans) : ?>
                <p class="m-test-contact">O también puedes dejarnos tus datos para contactarte, <span class="m-link m--line m-modal__button" data-modal="form_contact_you">AQUÍ.</span></p>
              <?php endif; ?>

            </form>
          <?php endif; ?>

          <?php if ($is_diagnostics && $is_trans) : ?>
            <p class="m-test-contact m--mall">*Precios no incluyen servicio a domicilio</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if (have_rows ('steps')) : ?>
<section class="m-section m-pre-analytics">
  <div class="m-container">
    <?php if (get_field ('subtitle_pre_analytics')) : ?>
      <p class="m-title-tag"><?php the_field ('subtitle_pre_analytics'); ?></p>
    <?php endif; ?>
    <h2 class="m-h3" title="<?php the_field ('title_pre_analytics'); ?>"><?php the_field ('title_pre_analytics'); ?></h2>
  </div>

  <div class="m-pre-analytics__slider-wrapper">
    <div class="glide" id="m-pre-analytic-slider">

      <div class="m-slider__track m-pre-analytics__slider">
        <ul class="m-slider__slides">
          <?php
            $count = 1;

            while (have_rows ('steps')) : the_row ();
          ?>
            <li class="glide__slide" data-slider-index="0">
              <i class="lines-rounded"></i>
              <div class="m-pre-analytics__slider__box">
                <div class="m-tags">
                  <span><?php echo $count; ?></span>
                </div>
                <?php
                  $image_step = get_sub_field ('images');

                  $picture = get_picture_source (array (
                    'array_image' => $image_step,
                    'picture_class' => 'm-lazy__img'
                  ));

                  echo $picture;
                ?>
                <div class="m-text">
                  <p><?php the_sub_field ('text') ?></p>
                </div>
                </div>
            </li>
          <?php
            $count++;
            endwhile;
          ?>
        </ul>
      </div>

      <div class="glide__controls glide__arrows" data-glide-el="controls">
        <button class="slider__arrow slider__arrow--prev glide__arrow glide__arrow--prev glide__arrow--circle glide__arrow--hover glide__arrow--disabled" data-glide-dir="&lt;">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
            <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M9 1.75L3.40541 7.5L9 13.25L7.2973 15L2.98319e-08 7.5L7.2973 -2.23283e-07L9 1.75Z" fill="#F06500"></path>
          </svg>
        </button>
        <button class="slider__arrow slider__arrow--next glide__arrow glide__arrow--next glide__arrow--circle glide__arrow--hover" data-glide-dir="&gt;">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-5.79176e-07 13.25L5.59459 7.5L-7.64949e-08 1.75L1.7027 7.44275e-08L9 7.5L1.7027 15L-5.79176e-07 13.25Z" fill="#F06500"></path>
          </svg>
        </button>
      </div>
      <div class="slider__bullet-wrapper">
        <div class="slider__bullets-index"><small><span class="slider-bullet-current-index">1</span><span>/</span><span class="slider-bullet-count"></span></small></div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (have_rows ('recommend')) : ?>
<section class="m-section m-inner-test-services">
  <div class="m-container">
    <?php if (get_field ('subtitle_recommend')) : ?>
      <p class="m-title-tag"><?php the_field ('subtitle_recommend'); ?></p>
    <?php endif; ?>
    <h2 class="m-h3" title="<?php the_field ('title_recommend'); ?>"><?php the_field ('title_recommend'); ?></h2>

    <div class="m-inner-test-services__wrapper">
      <?php
        while (have_rows ('recommend')) : the_row ();
          $link = get_sub_field ('link');
          $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <a class="m-inner-test-services__box" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>">
        <?php
          $image_step = get_sub_field ('images');

          $picture = get_picture_source (array (
            'array_image' => $image_step,
            'picture_class' => 'm-lazy__img'
          ));

          echo $picture;
        ?>
        <div>
          <h3 title="<?php the_sub_field ('text'); ?>"><?php the_sub_field ('text'); ?></h3>
          <p><?php the_sub_field ('description'); ?></p>
          <span class="m-link m--icon" title="<?php echo $link['title']; ?>"><span><?php echo $link['title']; ?></span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow_orange.png, <?php bloginfo ('template_directory'); ?>/img/arrow_orange@2x.png 2x" type="image/png">
              <img src="<?php bloginfo ('template_directory'); ?>/img/arrow_orange.png">
            </picture>
          </span>
        </div>
      </a>
      <?php
        endwhile;
      ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php if (have_rows ('service_elements')) : ?>

  <?php if ($is_process) : ?>

    <section class="m-section m-process" id="m-process">
      <div class="m-container">
        <p class="m-title-tag"><?php the_field('service_subtitle'); ?></p>
        <h2 class="m-h3" title="<?php the_field('service_title'); ?>"><?php the_field('service_title'); ?></h2>
        <div class="m-process__content">

        <?php
          $count = 1;
          if( have_rows('service_elements') ):
              while ( have_rows('service_elements') ) : the_row();
            ?>

              <div class="m-process__content__box">
                <?php
                    echo get_picture_source (array (
                      'array_image' => get_sub_field('service_box_icon'),
                      'picture_class' => 'm-lazy__img',
                      'lazy' => true
                    ));
                ?>
                <div>
                  <h6 title="<?php the_sub_field('service_box_title'); ?>"><strong><?php echo $count; ?>.</strong> <?php the_sub_field('service_box_title'); ?></h6>
                  <p><?php the_sub_field('service_box_text'); ?></p>
                </div>
              </div>

            <?php
                $count++;
                endwhile;
            endif;
        ?>

        </div>
      </div>
      <a class="m-button m-modal__button" href="javascript:void(0)" title="Déjanos tus datos" data-modal="form_enterprise"><span>Déjanos tus datos</span></a>
      <div class="m-process__contact">
        <p>O tambíén puedes escribirnos al</p>
        <a class="m-button-whatsapp" href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>" target="_blank">
          <picture>
            <source srcset="<?php bloginfo ('template_directory'); ?>/img/whatsapp-icon-inner-services.png, <?php bloginfo ('template_directory'); ?>/img/icon-whatsapp@2x.png 2x" type="image/png">
            <img src="<?php bloginfo ('template_directory'); ?>/img/whatsapp-icon-inner-services.png">
          </picture><span><?php echo WHATSAPP; ?></span>
        </a>



      </div>
    </section>

    <?php else : ?>

      <section class="m-section m-consultancies">
        <div class="m-container">
          <p class="m-title-tag"><?php the_field('service_subtitle'); ?></p>
          <h2 class="m-h3" title="<?php the_field('service_title'); ?>"><?php the_field('service_title'); ?></h2>
        </div>
        <div class="m-consultancies__slider">
          <div class="glide" id="m-consultancies-slider">
            <div class="m-slider__track">
              <ul class="m-slider__slides">

                <?php
                    $count = 0;
                    if( have_rows('service_elements') ):
                        while ( have_rows('service_elements') ) : the_row();
                  ?>

                    <li class="glide__slide">
                      <div class="m-consultancies__card">
                        <div class="m-box-level">
                          <?php
                            for ($i = 0; $i <= $count; $i++) {
                          ?>
                              <div class="m-level"></div>
                          <?php
                            }
                          ?>
                        </div>
                        <h6><?php the_sub_field('service_box_title'); ?></h6>
                        <p><?php the_sub_field('service_box_text'); ?></p>
                      </div>
                    </li>

                  <?php
                      $count++;
                      endwhile;
                    endif;
                ?>

              </ul>
            </div>
            <div class="glide__controls glide__arrows" data-glide-el="controls">
              <button class="slider__arrow slider__arrow--prev glide__arrow glide__arrow--prev glide__arrow--circle glide__arrow--hover glide__arrow--disabled" data-glide-dir="&lt;">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                  <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M9 1.75L3.40541 7.5L9 13.25L7.2973 15L2.98319e-08 7.5L7.2973 -2.23283e-07L9 1.75Z" fill="#F06500"></path>
                </svg>
              </button>
              <button class="slider__arrow slider__arrow--next glide__arrow glide__arrow--next glide__arrow--circle glide__arrow--hover" data-glide-dir="&gt;">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M-5.79176e-07 13.25L5.59459 7.5L-7.64949e-08 1.75L1.7027 7.44275e-08L9 7.5L1.7027 15L-5.79176e-07 13.25Z" fill="#F06500"></path>
                </svg>
              </button>
            </div>
            <div class="slider__bullet-wrapper">
              <div class="slider__bullets-index"><small><span class="slider-bullet-current-index">1</span><span>/</span><span class="slider-bullet-count"></span></small></div>
              <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
              <?php
                  $count = 0;
                  if( have_rows('steps') ):
                      while ( have_rows('steps') ) : the_row();
                ?>
                  <button class="glide__bullet" data-glide-dir="=<?php echo $count; ?>"></button>
                <?php
                    $count++;
                    endwhile;
                  endif;
              ?>

              </div>
            </div>
          </div>
        </div><a class="m-button m-modal__button" href="javascript:void(0)" title="Déjanos tus datos" data-modal="form_enterprise"><span>Déjanos tus datos</span></a>
        <div class="m-process__contact">
          <p>O tambíén puedes escribirnos al</p>
          <a class="m-button-whatsapp" href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>" target="_blank">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/whatsapp-icon-inner-services.png, <?php bloginfo ('template_directory'); ?>/img/icon-whatsapp@2x.png 2x" type="image/png">
              <img src="<?php bloginfo ('template_directory'); ?>/img/whatsapp-icon-inner-services.png">
            </picture><span><?php echo WHATSAPP; ?></span>
          </a>
        </div>
      </section>

  <?php endif; ?>

<?php endif; ?>

<style>
  @media (min-width: 1024px) {
    .m-inner-test__content,
    .m-inner-services__content {
      min-width: 575px;
    }
  }
</style>

<?php
    /**
     *
     * Validate if Mnk Modules exists
     *
     */
    if (shortcode_exists ('mnk_modules_plugin')) {
      /**
       * Print Mnk Modules plugin
       */
      echo do_shortcode ('[mnk_modules_plugin]');
	}
?>

<?php
	endwhile;
endif;
get_footer(); ?>
