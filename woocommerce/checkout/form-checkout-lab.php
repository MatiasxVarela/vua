<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
  <section class="m-modal__scene js--active" id="appointment__step_one">
    <div class="m-container">
      <section class="m-appointment">
        <div class="m-steps">
          <div class="m-steps__content">
            <div class="m-steps__step m-active">
              <div class="m-steps__step__number">
                <div class="m-number">1</div>
              </div>
              <p class="m-steps__step__text">Reservar Cita</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">2</div>
              </div>
              <p class="m-steps__step__text">Resumen de compra</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">3</div>
              </div>
              <p class="m-steps__step__text">Datos personales</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">4</div>
              </div>
              <p class="m-steps__step__text">Método de pago</p>
            </div>
          </div>
        </div>
        <div class="m-appointment__content">
          <div class="m-step__title">
            <span class="m-step__title__number">1</span>
            <h2 class="m-step__title__text">Reservar cita</h2>
          </div>
          <p class="m-description">Agenda tu cita en línea desde donde estés. El personal asistirá con el protocolo de bioseguridad y distanciamiento social ante el COVID-19.</p>
          <div class="m-appointment__inputs">
            <div class="m-input m-input-calendar m-input--light m-input--small">
              <input class="m-input-calendar m-input--light m-input--small" type="text" maxlength="60" name="user_datepicker" autocomplete="off" id="user_datepicker" style="background-image: url(<?= get_bloginfo('template_directory') ?>/img/icon-input-calendar.png)" minlength="4">
              <div></div>
              <span>Selecciona una fecha</span>
            </div>
          </div>
          <br>

          <div class="dates-options">
            <p><strong>Selecciona un horario:</strong></p>
            <div class="m-cards"></div>
          </div>
          <br>

          <div class="m-cards-users" style="display: none;">
            <p><strong>Ingresa los datos de los pacientes:</strong></p>

            <?php
            $count = 1;

            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
              $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
              $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

              $quantity = intval ($cart_item['quantity']);

              for ($i=1; $i <= $quantity; $i++) :
            ?>
              <div class="m-card-user">
                <p><strong>Paciente N° <?php echo $count; ?></strong></p>
                <p class="m-product"><?php echo apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key); ?></p>

                <div class="m-input m-input--light m-input--small">
                    <input class="m-input--light m-input--small" data-validate="text" type="text" maxlength="60" name="patient_last_name_<?php echo $count; ?>" autocomplete="off" id="name" minlength="3" />
                    <div></div>
                    <span>Apellido Paterno</span>
                </div>
                <div class="m-input m-input--light m-input--small">
                    <input class="m-input--light m-input--small" data-validate="text" type="text" maxlength="60" name="patient_last_name_two_<?php echo $count; ?>" autocomplete="off" id="name" minlength="3" />
                    <div></div>
                    <span>Apellido Materno</span>
                </div>
                <div class="m-input m-input--light m-input--small">
                    <input class="m-input--light m-input--small" data-validate="text" type="text" maxlength="60" name="patient_name_<?php echo $count; ?>" autocomplete="off" id="name" minlength="3" />
                    <div></div>
                    <span>Nombres</span>
                </div>
                <div class="m-input m-input--light m-input--small">
                    <input class="m-input--light m-input--small" data-validate="email" type="email" maxlength="60" name="patient_email_<?php echo $count; ?>" autocomplete="off" id="name" minlength="3" />
                    <div></div>
                    <span>Correo electrónico</span>
                </div>
                <div class="m-input m-input--light m-input--small">
                    <input class="m-input--light m-input--small" data-validate="phone" type="tel" maxlength="9" name="patient_phone_<?php echo $count; ?>" autocomplete="off" id="name" minlength="9" />
                    <div></div>
                    <span>Celular</span>
                </div>
                <div class="m-box-table-tm m-box-table--fixed-tm">
                  <div class="m-type-document-wrapper">
                    <div class="m-input m-input--select m-input--light m-input--small">
                      <select class="m-input--light m-input--small" data-patient="<?php echo $count; ?>" id="patient_typedocument_<?php echo $count; ?>" name="patient_typedocument_<?php echo $count; ?>" select-type="type_document">
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Carné de extranjería">Carné de extranjería</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <div class="m-input m-input--light m-input--small">
                      <input class="m-input--light m-input--small" data-validate="number" type="text" maxlength="8" name="patient_doc_<?php echo $count; ?>" autocomplete="off" id="doc" minlength="8" />
                        <div></div>
                        <span>Documento</span>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              $count++;
              endfor;
            endforeach;
            ?>
          </div>

          <p class="m-description" style="color:#4e5057; font-size:12px; margin-top:30px;">La fecha y horario seleccionado pueden ser cambiado por Labcorp con previa coordinación. Todos los campos son obligatorios.</p>

          <a id="button-step-one" style="margin-top:25px;" class="m-button m-modal__scene--js m--light m--icon m-button--disabled" href="javascript:void(0)" title="Guardar y continuar" data-scene-in="appointment__step_two" data-scene-out="appointment__step_one"><span>Guardar y continuar</span>
            <picture>
              <source srcset="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png, <?= get_bloginfo('template_directory') ?>/img/arrow-right@2x.png 2x" type="image/png">
              <img src="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png">
            </picture>
          </a>
        </div>
      </section>
    </div>
  </section>
  <section class="m-modal__scene" id="appointment__step_two">
    <div class="m-container">
      <section class="m-purchase">
        <div class="m-steps">
          <div class="m-steps__content">
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">1</div>
              </div>
              <p class="m-steps__step__text">Reservar Cita</p>
            </div>
            <div class="m-steps__step m-active">
              <div class="m-steps__step__number">
                <div class="m-number">2</div>
              </div>
              <p class="m-steps__step__text">Resumen de compra</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">3</div>
              </div>
              <p class="m-steps__step__text">Datos personales</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">4</div>
              </div>
              <p class="m-steps__step__text">Método de pago</p>
            </div>
          </div>
        </div>
        <div class="m-step__title"><span class="m-step__title__number">2</span>
          <h2 class="m-step__title__text">Resumen de compra</h2>
        </div>
        <div class="m-table__head">
          <span></span><span>Producto</span><span>Precio</span><span>Cantidad</span><span>Total</span>
        </div>
        <div class="m-purchase__card">
            <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                ?>
              <div class="m-purchase__card__row">
                <div class="m-purchase__card__content">
                  <div class="m-purchase__card__data">
                    <h3><?php echo apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key); ?></h3>
                    <p>Fecha de la reserva:
                      <span class="label-cart-date">18 octubre, 2020</span></p>
                    <p>Horario de la reserva:
                      <span class="label-cart-time">8:00 a 9:00 A.M</span></p>
                  </div>
                  <div class="m-purchase__card__price">
                    <span><?php echo $_product->get_price_html() ?></span></div>
                  <div class="m-purchase__card__amount">
                    <span><?php echo apply_filters('woocommerce_checkout_cart_item_quantity', sprintf('%s', $cart_item['quantity']), $cart_item, $cart_item_key); ?></span>
                  </div>
                  <div class="m-purchase__card__price m-total">
                    <span><?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?></span>
                  </div>
                </div>
              </div>
            <?php } ?>
        </div>
        <div class="m-purchase__price">
        <?php /*<p>Total de compra</p>*/?>
          <div class="m-purchase__price__subtotal">
            <p>Subtotal</p><span><?php wc_cart_totals_subtotal_html(); ?></span>
          </div>
          <?php /*<div class="m-purchase__price__total">
            <p>Total</p><span><?php wc_cart_totals_order_total_html(); ?></span>
          </div>*/?>
          <a class="m-button m-modal__scene--js m--light m--icon" href="javascript:void(0)" title="Guardar y continuar" data-scene-in="appointment__step_three" data-scene-out="appointment__step_two"><span>Guardar y continuar</span>
            <picture>
              <source srcset="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png, <?= get_bloginfo('template_directory') ?>/img/arrow-right@2x.png 2x" type="image/png">
              <img src="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png">
            </picture>
          </a>
        </div>

        <p class="m-description" style="color:#4e5057; font-size:12px; margin-top:30px;">El subtotal no incluye el recargo a domicilio.</p>
      </section>
    </div>
  </section>
  <section class="m-modal__scene" id="appointment__step_three">
    <div class="m-container">
      <section class="m-personal-data">
        <div class="m-steps">
          <div class="m-steps__content">
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">1</div>
              </div>
              <p class="m-steps__step__text">Reservar Cita</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">2</div>
              </div>
              <p class="m-steps__step__text">Resumen de compra</p>
            </div>
            <div class="m-steps__step m-active">
              <div class="m-steps__step__number">
                <div class="m-number">3</div>
              </div>
              <p class="m-steps__step__text">Datos personales</p>
            </div>
            <div class="m-steps__step">
              <div class="m-steps__step__number">
                <div class="m-number">4</div>
              </div>
              <p class="m-steps__step__text">Método de pago</p>
            </div>
          </div>
        </div>
        <div class="m-personal-data__container">
          <div class="m-personal-data__form">
              <?php do_action('woocommerce_checkout_before_customer_details'); ?>
            <div class="m-step__title">
              <span class="m-step__title__number">3</span>
              <h2 class="m-step__title__text">Datos personales</h2>
            </div>
              <?php do_action('woocommerce_checkout_billing'); ?>
            <p>Selección de comprobante de pago:</p>
              <?php do_action('woocommerce_checkout_shipping'); ?>
            <div class="m-input m-input--radio m-input--light m-input--blue">
              <input class="m-input--light m-input--blue" id="checkbox-personal" type="checkbox" name="checkbox-personal" value="
                He leído y acepto las &lt;span class='m-modal__button' data-modal='politics'&gt;Políticas de privacidad&lt;/span&gt;
                ">
              <div></div>
              <label for="checkbox-personal">
                He leído y acepto las
                <span class="m-modal__button" data-modal="politics">Políticas de privacidad</span>

              </label>
            </div>
              <?php do_action('woocommerce_checkout_after_customer_details'); ?>
            <a id="button-step-three" class="m-button m-modal__scene--js m--light m--icon m-button--disabled" href="javascript:void(0)" title="Guardar y continuar" data-scene-in="appointment__step_four" data-scene-out="appointment__step_three"><span>Guardar y continuar</span>
              <picture>
                <source srcset="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png, <?= get_bloginfo('template_directory') ?>/img/arrow-right@2x.png 2x" type="image/png">
                <img src="<?= get_bloginfo('template_directory') ?>/img/arrow-right.png">
              </picture>
            </a>
          </div>
          <aside>
              <?php
              get_template_part('template-parts/cart/mini', 'cart');
              ?>
          </aside>
        </div>
      </section>
    </div>
  </section>
  <section class="m-modal__scene" id="appointment__step_four">
    <div class="m-container">
      <section class="m-personal-data">
        <div class="m-steps">
          <div class="m-steps__content">
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">1</div>
              </div>
              <p class="m-steps__step__text">Reservar Cita</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">2</div>
              </div>
              <p class="m-steps__step__text">Resumen de compra</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">3</div>
              </div>
              <p class="m-steps__step__text">Datos personales</p>
            </div>
            <div class="m-steps__step m-active">
              <div class="m-steps__step__number">
                <div class="m-number">4</div>
              </div>
              <p class="m-steps__step__text">Método de pago</p>
            </div>
          </div>
        </div>
        <div class="m-personal-data__container">
          <div class="m-personal-data__form">
            <div class="m-step__title">
              <span class="m-step__title__number">4</span>
              <h2 class="m-step__title__text">Método de pago</h2>
            </div>
              <?php
              woocommerce_checkout_payment();
              ?>
          </div>
          <aside>
              <?php
              get_template_part('template-parts/cart/mini', 'cart');
              ?>
          </aside>
        </div>
      </section>
    </div>
  </section>
  <section class="m-modal__scene" id="appointment__step_five">
    <div class="m-container">
      <section class="m-appointment-done">
        <div class="m-steps">
          <div class="m-steps__content">
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">1</div>
              </div>
              <p class="m-steps__step__text">Reservar Cita</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">2</div>
              </div>
              <p class="m-steps__step__text">Resumen de compra</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">3</div>
              </div>
              <p class="m-steps__step__text">Datos personales</p>
            </div>
            <div class="m-steps__step m-done">
              <div class="m-steps__step__number">
                <div class="m-number">4</div>
              </div>
              <p class="m-steps__step__text">Método de pago</p>
            </div>
          </div>
        </div>
        <div class="m-appointment-done__container">
          <div class="m-appointment-done__image">
            <picture>
              <source srcset="<?= get_bloginfo('template_directory') ?>/img/icon-appointment-done.png, <?= get_bloginfo('template_directory') ?>/img/icon-appointment-done@2x.png 2x" type="image/png">
              <img src="<?= get_bloginfo('template_directory') ?>/img/icon-appointment-done.png">
            </picture>
          </div>
          <h2 title="¡Se agendó tu cita con éxito!">¡Se agendó tu cita con éxito!</h2>
          <p>Gracias por preferir Labcorp</p>
          <div class="m-appointment-done__table">
            <table>
              <tr>
                <td>Número de orden</td>
                <td>10256</td>
              </tr>
              <tr>
                <td>Fecha de solicitud</td>
                <td>26/08/2020</td>
              </tr>
              <tr>
                <td>Producto</td>
                <td>Prueba molecular</td>
              </tr>
              <tr>
                <td>Fecha</td>
                <td>18 de octubre de 8:00 a 9:00 A.M</td>
              </tr>
              <tr>
                <td>Cantidad</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Precio</td>
                <td>S/000.oo</td>
              </tr>
              <tr>
                <td>Método de pago:</td>
                <td>Visa</td>
              </tr>
              <tr>
                <td><b>Subtotal:</b></td>
                <td><b>S/XXX.00</b></td>
              </tr>
              <tr>
                <td><b>Total:</b></td>
                <td><b>S/XXX.00</b></td>
              </tr>
            </table>
          </div>
          <p class="small">Te hemos enviado un correo a j******”@gmail.com con el comprobante de tu compra.</p>
        </div>
      </section>
    </div>
  </section>


    <?php do_action('woocommerce_checkout_after_order_review'); ?>

</form>

<script>
var id_products = []

<?php
  $count = 0;

  foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
  ?>
    id_products[<?php echo $count; ?>] = <?php echo $product_id; ?>;
<?php
    $count++;
  endforeach;
?>
</script>

<script>
  var clickCheckDate = setInterval(() => {
    // validating checks
    if (document.querySelectorAll('input[type=radio][name=date]').length) {
      clearInterval(clickCheckDate)
      clickCheckDate = null

      // iterating
      document.querySelectorAll('input[type=radio][name=date]').forEach(($input) => {
        $input.addEventListener('change', () => {
          $('.m-cards-users').slideDown()
        })
      })

      //
      validating_shipping()
    }
  }, 1000)

  // validating step
  var timerStepOne = setInterval(() => {
    // validating
    if (validating_step_one()) {
      document.querySelector('#button-step-one').classList.remove('m-button--disabled')
    } else {
      document.querySelector('#button-step-one').classList.add('m-button--disabled')
    }
  }, 1000)

  // 
  document.querySelector('#button-step-one').addEventListener('click', () => {
    if (validating_step_one()) {
      // clear interval
      clearInterval(timerStepOne)
      timerStepOne = null

      // set data
      var dataPatientes = get_data_patients()
      $('input#data_patients').attr('value', dataPatientes)
      $('input#data_patients').val(dataPatientes)

      // scroll to top
      $('body,html').scrollTop(0)
    }
  })

  // validating inputs to step one
  function validating_step_one() {
    var flag = true

    // iterating
    document.querySelectorAll('.m-cards-users input').forEach(($input) => {
      if (!$input.value) {
        flag = false
      }

      if ($input.classList.contains('error')) {
        flag = false
      }
    })

    return flag
  }

  function get_data_patients() {
    let
      count = 1,
      dataPatients = {patients:{}}

    // iterating patients
    document.querySelectorAll('.m-card-user').forEach($card => {
      var
        newPatient = `patient_${count}`,
        currentPatient = {
          producto: $card.querySelector('.m-product').textContent,
          apellido_paterno: $card.querySelector(`input[name="patient_last_name_${count}"]`).value,
          apellido_materno: $card.querySelector(`input[name="patient_last_name_two_${count}"]`).value,
          nombre: $card.querySelector(`input[name="patient_name_${count}"]`).value,
          correo: $card.querySelector(`input[name="patient_email_${count}"]`).value,
          celular: $card.querySelector(`input[name="patient_phone_${count}"]`).value,
          type_document: $card.querySelector(`select[name="patient_typedocument_${count}"]`).value,
          documento: $card.querySelector(`input[name="patient_doc_${count}"]`).value
        }

      // add patient
      dataPatients.patients[newPatient] = currentPatient

      count++
    })

    // return
    return JSON.stringify(dataPatients)
  }

  // validating
  function validating_shipping() {
    setInterval(() => {
      if (
        document.querySelector('input[name="billing_first_name"]').value &&
        document.querySelector('input[name="billing_last_name"]').value &&
        document.querySelector('input[name="billing_address_1"]').value &&
        document.querySelector('select[name="billing_city_select"]').value &&
        document.querySelector('input[name="billing_doc"]').value &&
        // document.querySelector('select[name="billing_state"]').value &&
        //(document.querySelector('input[name="billing_postcode"]') && document.querySelector('input[name="billing_postcode"]').value) &&
        document.querySelector('input[name="billing_phone"]').value &&
        document.querySelector('input[name="billing_email"]').value &&
        document.querySelector('input[name="invoice_type"]') &&
        (document.querySelector('input[name="invoice_type"]:checked') && document.querySelector('input[name="invoice_type"]:checked').value) &&
        (document.querySelector('input[name="company_name"]') && document.querySelector('input[name="company_name"]').value) &&
        (document.querySelector('input[name="company_ruc"]') && document.querySelector('input[name="company_ruc"]').value) &&
        document.querySelector('input[name="checkbox-personal"]:checked')
      ) {
        document.querySelector('#button-step-three').classList.remove('m-button--disabled')
      } else {
        document.querySelector('#button-step-three').classList.add('m-button--disabled')
      }
    }, 1000)
  }

  document.addEventListener("DOMContentLoaded",function(){
    maskInputs()
    validateInputs()
    changeTypeDocument()
  })

  function validate($input) {
    var
      value = parseInt($input.val().length),
      minlength = parseInt($input.attr('minlength'))

    if (value < minlength) {
      $input.addClass('error')
    } else {
      $input.removeClass('error')
    }
  }

  function validateEmail($input) {
    var
      value = $input.val()

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
      $input.removeClass('error')
    }
    else {
      $input.addClass('error')
    }
  }

  function validateInputs() {
    $('input:not(.m-input-calendar)').each(function() {
      var
        $element = $(this)

      // key event
      $element.keypress(() => {
        validate($element)
      })

      // focus event
      $element.focus(function() {
        validate($element)
      })

      // focus event
      $element.focusout(function() {
        validate($element)
      })
    })

    $('input[data-validate="email"]').each(function(){
      var
        $element = $(this)

      // key event
      $element.keypress(() => {
        validateEmail($element)
      })

      // focus event
      $element.focus(function() {
        validateEmail($element)
      })

      // focus event
      $element.focusout(function() {
        validateEmail($element)
      })
    })
  }

  function maskInputs() {
    // text
    $('input[data-validate="text"]').each(function(index) {
      var
        $element = $(this),
        maxlength = parseInt($element.attr('maxlength'))

      $element.mask('Z'.repeat(maxlength), {
        translation: {
            'Z': {
                pattern: /[A-Za-zÑñÁáÉéÍíÓóÚú\s]/,
                optional: false,
                recursive: true
            }
        }
      })
    })
    
    // number
    $('input[data-validate="number"]').each(function(index) {
      var
        $element = $(this)

      $element.mask('9#')
    })

    // phone
    $('input[data-validate="phone"]').each(function(index) {
      var
        $element = $(this)

      $element.mask('Z' + '0'.repeat(8), {
        translation: {
            'Z': {
                pattern: /[9]/,
                optional: false,
                recursive: true
            }
        }
      })
    })

    // email
    $('input[data-validate="email"]').each(function(index) {
      var
        $element = $(this),
        maxlength = parseInt($element.attr('maxlength'))

      $element.mask('Z'.repeat(maxlength), {
        translation: {
            'Z': {
                pattern: /[\w@\-.+]/,
                optional: false,
                recursive: true
            }
        }
      })
    })
  }

  function changeTypeDocument() {
    $('select[select-type="type_document"]').each(function() {
      var
        $element = $(this),
        numPatient = $(this).attr('data-patient'),
        $document = $(`input[name="patient_doc_${numPatient}"]`)

      $element.change(function() {
        switch ($(this).val()) {
          case 'Pasaporte':
            $document.attr('maxlength', 12)
            $document.mask('Z'.repeat(12), {
              translation: {
                  'Z': {
                      pattern: /[a-zA-Z0-9]/,
                      optional: false,
                      recursive: true
                  }
              }
            })

            break

          case 'Carné de extranjería':
            $document.attr('maxlength', 12)
            $document.mask('Z'.repeat(12), {
              translation: {
                  'Z': {
                      pattern: /[a-zA-Z0-9]/,
                      optional: false,
                      recursive: true
                  }
              }
            })

            break

          default:
            $document.attr('maxlength', 8)
            $document.mask('9'.repeat(8))

            break
        }
      })
    })
  }
</script>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>