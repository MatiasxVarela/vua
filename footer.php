<?php if (HAS_FOOTER) : ?>
  <footer class="m-footer">
    <div class="m-container">
        <div class="m-container__content">
            <div class="m-container__content__top">
                <div class="m-rrss">
                    <?php if (INSTAGRAM) : ?>
                    <a href="<?php echo INSTAGRAM; ?>" target="_blank">
                        <picture>
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-instagram.png, <?php bloginfo ('template_directory'); ?>/img/icon-instagram@2x.png 2x" media="(min-width: 768px)" type="image/png" />
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-instagram-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-instagram-mobile@2x.png 2x" type="image/png" />
                            <img src="<?php bloginfo ('template_directory'); ?>/img/icon-instagram-mobile.png" alt="instagram" />
                        </picture>
                    </a>
                    <?php endif; ?>

                    <?php if (FACEBOOK) : ?>
                      <a href="<?php echo FACEBOOK; ?>" target="_blank">
                        <picture>
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-facebook.png, <?php bloginfo ('template_directory'); ?>/img/icon-facebook@2x.png 2x" media="(min-width: icon-facebookpx)" type="image/png" />
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-facebook-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-facebook-mobile@2x.png 2x" type="image/png" />
                            <img src="<?php bloginfo ('template_directory'); ?>/img/icon-facebook-mobile.png" alt="768" />
                        </picture>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="m-cart">
                    <?php if (WHATSAPP) : ?>
                    <a href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>">
                        <picture>
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-whatsapp-2.png, <?php bloginfo ('template_directory'); ?>/img/icon-whatsapp-2@2x.png 2x" media="(min-width: 768px)" type="image/png" />
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-whatsapp-mobile-2.png, <?php bloginfo ('template_directory'); ?>/img/icon-whatsapp-mobile-2@2x.png 2x" type="image/png" />
                            <img src="<?php bloginfo ('template_directory'); ?>/img/icon-whatsapp-mobile-2.png" alt="carrito de compra" />
                        </picture>
                    </a>
                    <?php endif; ?>

                    <a href="<?php echo URL_CART; ?>">
                        <picture>
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-cart-2.png, <?php bloginfo ('template_directory'); ?>/img/icon-cart-2@2x.png 2x" media="(min-width: 768px)" type="image/png" />
                            <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-cart-mobile-2.png, <?php bloginfo ('template_directory'); ?>/img/icon-cart-mobile-2@2x.png 2x" type="image/png" />
                            <img src="<?php bloginfo ('template_directory'); ?>/img/icon-cart-mobile-2.png" alt="carrito de compra" />
                        </picture>
                    </a>
                </div>
            </div>
            <div class="m-container__content__bottom">
                <div class="m-doubts">
                  <?php
                      // Print footer menu
                      wp_nav_menu (array ('menu' => 'Menú Footer', 'menu_class' => '', 'container' => 'false', 'depth' => 3));
                  ?>
                </div>
                <div class="m-contact">
                  <?php if (PHONE) : ?>
                    <a href="tel:<?php echo PHONE; ?>">Teléfono</a>
                  <?php endif; ?>

                  <?php if (EMAIL) : ?>
                    <a href="mailto:<?php echo EMAIL; ?>">Mail</a>
                  <?php endif; ?>

                  <?php if (WHATSAPP) : ?>
                    <a href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>" target="_blank">Whatsapp</a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>

<div class="m-social-network">
    <?php if (WHATSAPP) : ?>
    <a href="https://api.whatsapp.com/send?phone=+51<?php echo WHATSAPP; ?>&text=<?php echo WHATSAPP_TEXT; ?>" target="_blank">
        <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-width: 20px; max-height: 20px;">
            <path
                d="M200.98 27.0001C212.44 26.9901 224.73 28.2401 235.9 30.5201C272.9 38.0801 304.33 55.8401 329.83 83.7501C356.51 112.96 371.42 147.49 374.77 186.81C376.3 204.68 375.16 222.57 370.78 240.09C357.95 291.47 328.21 329.85 281.53 354.77C255.02 368.92 226.52 375.54 196.43 373.93C185.41 373.34 174.32 372.1 163.5 369.94C144.34 366.12 126.51 358.54 110.05 347.97C107.08 346.06 104.5 345.85 101.19 346.94C82.1501 353.19 63.0301 359.24 43.9401 365.34C42.8101 365.7 41.6501 365.97 40.0601 366.4C40.5401 364.8 40.8401 363.72 41.1901 362.67C47.1801 344.73 53.0301 326.73 59.2701 308.88C60.8001 304.5 60.4801 301.35 57.8101 297.42C47.6601 282.47 39.7301 266.03 34.7401 248.65C32.2001 239.83 30.4201 230.8 29.3801 221.68C26.9201 200.11 27.6601 178.68 33.4701 157.57C47.8101 105.44 79.2601 67.2601 127.93 43.6101C150.21 32.7801 174.95 27.2201 199.71 27.0001C200.13 27.0001 200.56 27.0001 200.98 27.0001ZM137.83 105.79C130.57 105.41 123.77 106.72 118.23 111.78C106.48 122.51 100.67 136.01 99.9601 151.79C99.3101 166.3 103.87 179.52 110.74 191.97C120.5 209.62 133.02 225.3 146.53 240.19C172.71 269.03 205.19 287.16 242.73 296.67C254.69 299.7 266.48 299.84 277.98 294.85C301 284.87 305.73 274.08 307.39 253.56C307.69 249.81 306.46 246.67 302.74 244.91C289.44 238.58 276.22 232.08 262.84 225.91C256.68 223.07 252.39 224.49 248.27 229.94C244.85 234.46 241.6 239.11 238.12 243.58C232.44 250.86 229.13 251.58 220.55 248C193.56 236.76 173.05 217.99 157.44 193.58C151.91 184.93 152.23 183.64 159.14 175.96C162.69 172.02 165.97 167.81 169.11 163.53C171.02 160.93 171.25 157.82 169.98 154.77C164.01 140.45 158.03 126.12 151.99 111.83C150.2 107.58 146.73 105.79 142.23 105.8C140.77 105.79 139.3 105.79 137.83 105.79Z"
                fill="#4CAF50"
            ></path>
        </svg>
    </a>
    <?php endif; ?>

    <?php if (INSTAGRAM) : ?>
    <a href="<?php echo INSTAGRAM; ?>" target="_blank">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path
                    d="M19 4.75071C19 7.91691 19 11.0845 19 14.2507C18.9873 14.3042 18.969 14.3563 18.962 14.4111C18.8958 14.9205 18.7678 15.4159 18.551 15.8802C17.822 17.438 16.6285 18.4414 14.9537 18.8579C14.7215 18.9156 14.485 18.9536 14.2514 19C11.0847 19 7.91805 19 4.75139 19C4.5825 18.9691 4.41361 18.9409 4.24472 18.9071C1.75783 18.4076 0.00560932 16.2715 0.0027945 13.7315C-2.03138e-05 10.9114 -0.00142772 8.09281 0.00560932 5.27279C0.00701672 4.93506 0.0323501 4.5917 0.094276 4.2596C0.478498 2.19524 2.10124 0.54319 4.17013 0.116808C4.53605 0.0408196 4.91746 0.00704687 5.29183 0.00563967C8.0982 -0.00280352 10.9046 0.00282527 13.7124 1.08744e-05C14.4639 -0.00139632 15.1887 0.133695 15.8699 0.448907C17.4349 1.17221 18.4384 2.36973 18.8578 4.04712C18.9155 4.2793 18.9521 4.51571 19 4.75071ZM1.70435 9.50142C1.70154 9.50142 1.69872 9.50142 1.69591 9.50142C1.69591 10.8805 1.69731 12.2595 1.6945 13.6386C1.6945 14.0607 1.74094 14.4745 1.87324 14.8783C2.32502 16.2518 3.65924 17.3198 5.3242 17.31C8.10665 17.2931 10.8905 17.3128 13.6729 17.2973C14.0741 17.2945 14.4906 17.2354 14.8721 17.1172C16.2569 16.6866 17.3167 15.3427 17.3069 13.6752C17.29 10.8917 17.3097 8.1097 17.2942 5.32626C17.2914 4.92521 17.2323 4.50868 17.1141 4.12733C16.682 2.73842 15.3337 1.68302 13.6729 1.69287C10.8905 1.70976 8.10665 1.69991 5.3242 1.69569C4.72746 1.69428 4.15324 1.79982 3.62828 2.08548C2.44887 2.72857 1.75361 3.71642 1.71279 5.06874C1.66917 6.54349 1.70435 8.02245 1.70435 9.50142Z"
                    fill="#D0A8E8"
                />
                <path
                    d="M9.50413 4.60254C12.2049 4.60395 14.4047 6.81184 14.3977 9.51226C14.3907 12.2056 12.1909 14.3995 9.49709 14.3966C6.79628 14.3952 4.5965 12.1887 4.60353 9.48693C4.60916 6.79496 6.81035 4.60113 9.50413 4.60254ZM9.49287 12.6996C11.2662 12.7052 12.6975 11.2797 12.6989 9.50381C12.7018 7.73637 11.2887 6.3151 9.5168 6.30244C7.74628 6.28836 6.31072 7.71104 6.30227 9.48833C6.29242 11.2614 7.71531 12.6939 9.49287 12.6996Z"
                    fill="#D0A8E8"
                />
                <path
                    d="M14.6102 5.6459C13.9276 5.65012 13.3675 5.0999 13.3618 4.42022C13.3576 3.74618 13.9121 3.1833 14.5933 3.17204C15.259 3.16078 15.8346 3.72788 15.8417 4.40334C15.8501 5.0802 15.2914 5.64167 14.6102 5.6459Z"
                    fill="#D0A8E8"
                />
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="19" height="19" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </a>
    <?php endif; ?>

    <?php if (FACEBOOK) : ?>
    <a href="<?php echo FACEBOOK; ?>" target="_blank">
        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2.94837 16.5764C2.94213 14.2748 2.93589 11.9723 2.92965 9.67066C2.92787 9.08529 2.92876 9.08529 2.2495 9.08529C1.67007 9.08529 1.08976 9.06968 0.511227 9.08998C0.115437 9.10402 -0.00847062 8.96354 0.00044358 8.63105C0.0191634 7.90285 0.0173806 7.17388 0.001335 6.44568C-0.00579636 6.13193 0.109197 6.00471 0.487159 6.01485C1.2725 6.03593 2.05962 6.0211 2.90291 6.0211C2.91271 5.83534 2.92163 5.673 2.93054 5.51066C2.98492 4.57875 2.92787 3.62812 3.12041 2.71807C3.45648 1.12275 4.91395 0.0784621 6.76097 0.0105597C7.70677 -0.0245623 8.65702 0.0378767 9.60549 0.0534865C9.87738 0.0581694 10.004 0.160413 10.0004 0.41095C9.99059 1.10012 9.9888 1.79007 10.0004 2.47924C10.0048 2.7571 9.85509 2.84217 9.56538 2.84061C8.98596 2.83671 8.40653 2.83202 7.828 2.8531C7.02751 2.88197 6.61924 3.18012 6.56753 3.85993C6.51494 4.5569 6.55595 5.25934 6.55595 5.99768C6.73779 6.00627 6.89558 6.02032 7.05336 6.02032C7.84048 6.02266 8.6285 6.03046 9.41562 6.01719C9.73921 6.01173 9.88272 6.08978 9.8328 6.39573C9.70266 7.19261 9.58588 7.99105 9.47535 8.79027C9.44236 9.03066 9.28102 9.08451 9.04568 9.08373C8.37712 9.08217 7.70766 9.10012 7.03999 9.07827C6.65757 9.06578 6.53009 9.16412 6.53366 9.51534C6.55238 11.7007 6.54347 13.8861 6.54168 16.0707C6.54168 16.2392 6.52385 16.4078 6.51405 16.5756C5.32579 16.5764 4.13752 16.5764 2.94837 16.5764Z"
                fill="#D0A8E8"
            />
        </svg>
    </a>
    <?php endif; ?>
</div>


<?php if (is_page ('conversemos')) : ?>
    <div class="m-modal">
      <div class="m-modal__content m-modal__animation m-background" id="modal-thank-you">
        <div>
          <div class="m-modal__container">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you.png, <?php bloginfo ('template_directory'); ?>/img/icon-thank-you@2x.png 2x" media="(min-width: 1024pxpx)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile.png" alt="Success">
            </picture>
            <h2 title="¡Gracias por escribirnos!">¡Gracias por escribirnos!</h2>
            <p>Nuestro equipo se pondrá en contacto contigo.</p><span class="m-modal__close--js m-modal__close"></span>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>

<?php if (is_page_template ('page-giftcard.php')) :?>
    <div class="m-modal">
      <div class="m-modal__content m-modal__animation m-background" id="modal-add-cart">
        <div>
          <div class="m-modal__container">
            <span class="m-modal__close--js m-modal__close"></span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you.png, <?php bloginfo ('template_directory'); ?>/img/icon-thank-you@2x.png 2x" media="(min-width: 1024pxpx)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-thank-you-mobile.png" alt="Success">
            </picture>
            <h2 title="Tu giftcard se agregó al carrito.">Tu giftcard se agregó al carrito.</h2>
            <a class="m-button m-button--black" href="<?php bloginfo('url'); ?>/carrito/" title="Ir al carrito"><span>Ir al carrito</span></a>
            <a class="m-link m-modal__close--js" href="javascript:void(0)" title="Seguir comprando"><span>Seguir comprando</span></a>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>

<?php if (1>2) :?>
<!--
<div class="m-modal">
    <div class="m-modal__content m-modal__animation m-discount-modal" id="discount-modal">
        <div>
            <div class="m-modal__scene" id="form_discount">
                <div class="m-modal__container">
                    <span class="m-modal__close--js m-modal__close"></span>
                    <div>
                        <h3 title="Únete y recibe 15% de descuento"><span>Únete y recibe</span> 15% de descuento</h3>
                        <form id="form-discount">
                            <label for="email">Correo Electrónico</label>
                            <input class="m-input" id="email" type="email" name="email" />
                            <label>SEXO</label>
                            <div class="m-radios">
                                <label for="woman"> <input id="woman" type="radio" name="sex" value="Mujer" /><span>Mujer</span> </label>
                                <label for="man"> <input id="man" type="radio" name="sex" value="Hombre" /><span>Hombre</span> </label>
                                <label for="other"> <input id="other" type="radio" name="sex" value="Otro" /><span>Otro</span> </label>
                            </div>
                            <label> <input id="suscribe" type="checkbox" /><span>Me gustaria recibir noticias sobre productos y promociones de Vuá. </span> </label>
                            <button class="m-button">Suscribirse</button>
                        </form>
                    </div>
                    <picture>
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/bg-suscribete-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bg-suscribete-desktop@2x.png 2x" media="(min-width: 768px)" type="image/png" />
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/bg-suscribete.png, <?php bloginfo ('template_directory'); ?>/img/bg-suscribete@2x.png 2x" type="image/png" />
                        <img src="<?php bloginfo ('template_directory'); ?>/img/bg-suscribete.png" />
                    </picture>
                </div>
            </div>
            <div class="m-modal__scene" id="thanks_discount">
                <div class="m-modal__container m-thank-you">
                    <span class="m-modal__close--js m-modal__close"></span>
                    <h4>¡Gracias por registrarte!</h4>
                    <p>Se enviará una contraseña a tu dirección de correo electrónico</p>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php endif; ?>


<?php wp_footer(); ?>

<script type='text/javascript' src='<?php bloginfo ('template_directory'); ?>/js/vua.js?ver=2' id='labcorp-js'></script>
</body>
</html>