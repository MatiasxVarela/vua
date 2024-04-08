<?php
/**
 *
 * Template Name: Página Contacto
 * by Monki
 *
 */
get_header (); 

if (have_posts ()) :
	while ( have_posts() ) : the_post();
?>

<div class="m-container">
  <div class="m-breadcrumbs m-breadcrumbs--white">
    <?php mnk_get_breadcrumb (); ?>
  </div>

  <h1 class="m-title m-title--white"><?php the_field ('title_page'); ?></h1>

  <div class="m-page__grid m-box-table">
    <div class="m-page__grid__left">
      <form id="form_contact">
        <p><?php the_field ('title_form'); ?></p>
        
        <div class="m-box-table-tm m-box-table--fixed-tm">
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="text" maxlength="60" name="name" id="name" minlength="4">
              <div></div><span>Nombres</span>
            </div>
          </div>
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="text" maxlength="60" name="lastname" id="lastname" minlength="4">
              <div></div><span>Apellidos</span>
            </div>
          </div>
        </div>
        
        <div class="m-input m-input--light m-input--small">
          <input class="m-input--light m-input--small" type="email" maxlength="60" name="email" id="email" minlength="4">
          <div></div><span>Correo electrónico</span>
        </div>

        <div class="m-box-table-tm m-box-table--fixed-tm">
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="text" maxlength="60" name="phone" id="phone" minlength="4">
              <div></div><span>Celular</span>
            </div>
          </div>
          <div>
            <div class="m-input m-input--select m-input--light m-input--small">
                <select class="m-input--light m-input--small" id="age" name="age">
                  <option value="">Edad</option>
                  <option value="18 - 23">18 - 23</option>
                  <option value="24 - 29">24 - 29</option>
                  <option value="30 - 35">30 - 35</option>
                  <option value="36 - 40">36 - 40</option>
                  <option value="41 - 50">41 - 50</option>
                  <option value="51 - 60">51 - 60</option>
                  <option value="61 a más">61 a más</option>
                </select>
              </div>
          </div>
        </div>

        <div class="m-box-table-tm m-box-table--fixed-tm">
          <div>
            <div class="m-input m-input--select m-input--light m-input--small">
              <select class="m-input--light m-input--small" id="tipo_de_documento" name="tipo_de_documento">
                <option value="DNI">DNI</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="Carné de extranjería">Carné de extranjería</option>
                <option value="RUC">RUC</option>
              </select>
            </div>
          </div>
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="text" maxlength="15" name="numero_de_documento" id="numero_de_documento" minlength="8">
              <div></div><span>Nro de documento</span>
            </div>
          </div>
        </div>

        <div id="data-company" class="m-box-table-tm m-box-table--fixed-tm" style="display: none;">
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="text" maxlength="60" name="company" id="company" minlength="4">
              <div></div><span>Razón social</span>
            </div>
          </div>
          <div>
            <div class="m-input m-input--select m-input--light m-input--small">
              <select class="m-input--light m-input--small" id="numemployees" name="numemployees">
                <option value="">Nro. de trabajadores</option>
                <option value="1 - 4">1 - 4</option>
                <option value="5 - 10">5 - 10</option>
                <option value="11 - 100">11 - 100</option>
                <option value="101 - 200">101 - 200</option>
                <option value="201 a más">201 a más</option>
              </select>
            </div>
          </div>
        </div>

        <div class="m-box-table-tm m-box-table--fixed-tm">
          <div>
            <div class="m-input m-input--light m-input--small">
              <input class="m-input--light m-input--small" type="number" maxlength="60" name="cantidad_de_personas_producto" id="cantidad_de_personas_producto" minlength="1">
              <div></div><span>Cantidad de pruebas</span>
            </div>
          </div>
          <div>
            <div class="m-input m-input--select m-input--light m-input--small">
              <select class="m-input--light m-input--small" id="district" name="district">
                <option value="">Distrito</option>
                <?php while (have_rows ('districts', 'option')) : the_row (); ?>
                  <option value="<?php the_sub_field ('name'); ?>"><?php the_sub_field ('name'); ?></option>
                <?php endwhile; ?>
              </select>
            </div>
          </div>
        </div>

        <?php
        $mnk_products = new WP_Query (
          array (
            'post_type' => 'page',
            'posts_per_page' => -1,
            'relation' => 'AND',
            'meta_query'	=> array(
              array(
                'key' => 'trans',
                'value' => 'Si',
                'compare' => '='
              ),
              array(
                'key' => 'type_product',
                'value' => 'Diagnósticos',
                'compare' => '='
              ),
            ),
          )
        );
        ?>

        <?php if ($mnk_products->have_posts() && count ($mnk_products->posts) > 1) : ?>
        <div class="m-input m-input--select m-input--light m-input--small">
          <select class="m-input--light m-input--small" id="product" name="product">
            <option value="">¿Qué producto te interesa?</option>
            <?php while ($mnk_products->have_posts()) : $mnk_products->the_post(); ?>
              <option value="<?php the_title (); ?>"><?php the_title (); ?></option>
            <?php endwhile;
            wp_reset_query();?>
          </select>
        </div>
        <?php endif; ?>
        
        <div class="m-input m-input--select m-input--light m-input--small">
          <select class="m-input--light m-input--small" id="hs_persona" name="hs_persona">
            <option value="">¿Cómo te identificas?</option>
            <option value="persona_2">Me interesa adquirir pruebas médicas para mis colaboradores</option>
            <option value="persona_1">Me interesa cuidar mi salud y prevenir enfermedades con exámenes a tiempo</option>
          </select>
        </div>
        
        <div class="m-input m-input--select m-input--light m-input--small">
          <select class="m-input--light m-input--small" id="medio_de_contacto" name="medio_de_contacto">
            <option value="">¿Cómo te enteraste de nosotros?</option>
            <option value="Facebook">Facebook</option>
            <option value="Instagram">Instagram</option>
            <option value="Linkedin">Linkedin</option>
            <option value="Twitter">Twitter</option>
            <option value="Evento Online">Evento Online</option>
            <option value="Evento Físico">Evento Físico</option>
            <option value="Banner publicitario">Banner publicitario</option>
            <option value="Anuncio de google">Anuncio de google</option>
            <option value="Referido">Referido</option>
            <option value="Bus Covida">Bus Covida</option>
          </select>
        </div>
        
        <div class="m-input m-input--light m-input--small">
          <textarea class="m-input--light m-input--small" name="message" id="message" placeholder="Déjanos tu consulta" maxlength="140" minlength="4"></textarea>
          <div></div>
        </div>
        <div class="m-input m-input--radio m-input--light m-input--radio--square">
          <input class="m-input--light m-input--radio--square" id="checkbox-contact" type="checkbox" name="checkbox-contact" value="Acepto las Políticas de privacidad.">
          <div></div>
          <label for="checkbox-contact">Acepto los <span class="m-modal__button" data-modal="terms_conditions">Términos y condiciones</span> y <span class="m-modal__button" data-modal="politics">Políticas de privacidad</span>.</label>
        </div>
        <button class="m-button" id="submit-contact" type="submit" disabled="disabled">enviar</button>
      </form>
	</div>

    <div class="m-page__grid__right m-table__header m-table__cell-tm">
      <div class="m-page__grid__right__content">
        <p><?php the_field ('description_page'); ?></p>

        <div class="m-contact__channel">
            <?php if (PHONE) : ?>
			<a href="tel:<?php echo PHONE; ?>" class="m-contact__channel__item m-box-table m-box-table--middle m-box-table--auto" title="<?php echo PHONE; ?>">
				<div><span class="m-block icon-phone-mid"></span></div>
				<p> <strong><?php echo PHONE; ?></strong></p>
			</a>
			<?php endif; ?>
      <?php if (WHATSAPP) : ?>
			<a href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>" class="m-contact__channel__item m-box-table m-box-table--middle m-box-table--auto" title="<?php echo WHATSAPP; ?>" target="_blank">
				<div><span class="m-block whatsapp"></span></div>
				<p> <strong><?php echo WHATSAPP; ?></strong></p>
			</a>
      <?php endif; ?>
			<?php if (WHATSAPP_TWO) : ?>
			<a href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP_TWO; ?>&text=<?php echo WHATSAPP_TEXT; ?>" class="m-contact__channel__item m-box-table m-box-table--middle m-box-table--auto" title="<?php echo WHATSAPP_TWO; ?>" target="_blank">
				<div><span class="m-block whatsapp"></span></div>
				<p> <strong><?php echo WHATSAPP_TWO; ?></strong></p>
			</a>
			<?php endif; ?>
			<a class="m-contact__channel__item m-box-table m-box-table--middle m-box-table--auto" href="mailto:<?php echo EMAIL; ?>">
				<div><span class="m-block gmail"></span></div>
				<p> <strong><?php echo EMAIL; ?></strong></p>
			</a>
			<?php if (EMAIL_TWO) : ?>
			<a class="m-contact__channel__item m-box-table m-box-table--middle m-box-table--auto" href="mailto:<?php echo EMAIL_TWO; ?>">
				<div><span class="m-block gmail"></span></div>
				<p> <strong><?php echo EMAIL_TWO; ?></strong></p>
			</a>
          <?php endif; ?>
        </div>
	  </div>
	  <?php
    $image_contact = get_field ('image_page');

		$picture = get_picture_source (array (
			'array_image' => $image_contact,
      'picture_class' => 'm-lazy__img',
      'lazy' => true
		));

		echo $picture;
		?>
    </div>
  </div>
</div>
<div class="m-contact__map">
  <div class="m-container">
    <div class="m-contact__map__tooltip">
	  <p>Úbicanos en:</p>
	  <a href="<?php echo ADDRESS_LINK ?>" target="_blank"><strong><?php echo ADDRESS; ?></strong></a>
	</div>
	<span class="m-contact__map__pulse"></span>
    <picture class="m-lazy__img">
      <source data-srcset="<?php bloginfo ('template_directory'); ?>/img/contact_map_google.png  1x, <?php bloginfo ('template_directory'); ?>/img/contact_map_google@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src="<?php bloginfo ('template_directory'); ?>/img/contact_map_google.png ">
    </picture>
  </div>
</div>

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