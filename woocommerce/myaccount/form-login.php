<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
do_action( 'woocommerce_before_customer_login_form' ); ?>

<section class="m-modal__scene js--active"  id="login">
  <div class="m-container">
<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set m-login__content m-login" id="customer_login">

  <div class="m-login__content m-sign-up">

  <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

    <?php do_action( 'woocommerce_register_form_start' ); ?>
    <h2 class="m-title">Regístrate</h2>
    <p class="m-small">Se enviará una contraseña a tu dirección de correo electrónico</p>

    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
      </p>
    <?php endif; ?>

    <div class="m-input">
      <input class="m-input--light m-input--small" type="email" maxlength="60"  autocomplete="off" minlength="4" name="email" id="reg_email" placeholder="Correo electrónico" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
    </div>

    <div>
      <input class="m-input--light m-input--radio--square" id="checkbox-register" type="checkbox" name="checkbox-register" value="
      Acepto las &lt;span class='m-modal__button' data-modal='politics'&gt;Políticas de privacidad&lt;/span&gt; y
      &lt;span class='m-modal__button' data-modal='terms_conditions'&gt;Tratamiento de datos.&lt;/span&gt;
      " required>
      <label for="checkbox-register">
        Acepto los <span class="m-modal__button m-link" data-modal="politics">Términos y condiciones</span>.
      </label>
    </div>

      <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
      <button type="submit" class="m-button m-button--green" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>


    <?php do_action( 'woocommerce_register_form_end' ); ?>

  </form>

  </div>
  <div class="m-login__content">

<?php endif; ?>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
      <h2 class="m-title">Inicia sesión</h2>

      <div class="m-input">
        <input class="m-input" maxlength="60" name="username" autocomplete="off" minlength="4" name="username" id="username" autocomplete="username" placeholder="Correo electrónico" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
      </div>
      <div class="m-input">
        <input class="m-input" type="password" maxlength="20" name="password" autocomplete="off" id="password" minlength="4" placeholder="Contraseña">
      </div>

        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="m-link m-forgot"><span><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></span></a>

			<?php do_action( 'woocommerce_login_form' ); ?>
      <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
        
      <button type="submit" class="m-button m-button--green" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">ingresar</button>
      
      <div class="m-remind">
        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
        <label for="rememberme">Recuérdame</label>
      </div>
 
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

</div>
<?php endif; ?>
</div>
</section>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>


<style>
  .m-page__custom-account .m-container form {text-align: center; border: none; padding:0; margin: 0 auto;}
</style>