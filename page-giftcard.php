<?php
/**
 *
 * Template Name: Página Giftcard
 * by Monki
 *
 */
get_header (); 

if (have_posts ()) :
	while ( have_posts() ) : the_post();
?>

<section class="m-contact-us">
    <div class="m-container">
        <div class="m-container__content">
            <form id="form-giftcard">
                <label for="giftcard">¿A quién le estás regalando este GiftCard? Déjanos su nombre <input class="m-input" id="giftcard" type="text" name="giftcard" /></label>
                <label for="email">Déjanos su correo para enviarle este GiftCard <input class="m-input" id="email" type="email" name="email" /></label>
                <label for="giftcard_price">
                    ¿De cuánto quieres que sea tu GiftCard?
                    <select class="m-input valid" id="giftcard_price" name="giftcard_price" aria-invalid="false">
                        <?php
                          $products = get_posts(array(
                            'post_type' => 'product',
                            'numberposts' => -1,
                            'post_status' => 'publish',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'slug',
                                    'terms' => 'giftcard',
                                    'operator' => 'IN',
                                )
                            ),
                          ));
                        ?>

                        <?php foreach ($products as $product): ?>
                          <option value="<?php echo $product->ID; ?>"><?php echo $product->post_title; ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <!--label for="message">Déjale un mensaje a la persona a la que se lo regalarás <textarea class="m-input" name="message" id="message"></textarea></label-->
                <button class="m-button m-add-to-product-gifcard">Regalar GiftCard</button>
            </form>
            <div>
                <picture>
                    <source srcset="https://www.vua.pe/wp-content/uploads/2021/12/giftcard-desktop.png, https://www.vua.pe/wp-content/uploads/2021/12/giftcard-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png" />
                    <source srcset="https://www.vua.pe/wp-content/uploads/2021/12/giftcard-mobile.png, https://www.vua.pe/wp-content/uploads/2021/12/giftcard-mobile@2x.png 2x" type="image/png" />
                    <img src="https://www.vua.pe/wp-content/uploads/2021/12/giftcard-mobile.png" alt="Shampoo de vua" />
                </picture>
                <div class="m-square m--shadow m--green m--one"></div>
                <div class="m-square m--shadow m--green m--line m--back m--two"></div>
                <div class="m-square m--shadow m--green m--line m--three"></div>
                <div class="m-square m--shadow m--green m--four"></div>
                <div class="m-square m--shadow m--green m--line m--five"></div>
                <div class="m-square m--shadow m--green m--six"></div>
                <div class="m-square m--shadow m--green m--seven"></div>
                <div class="m-square m--shadow m--green m--eight"></div>
            </div>
        </div>
    </div>
</section>


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