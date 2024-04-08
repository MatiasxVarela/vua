<?php
/**
 *
 * Template Name: Página Personalización de formula
 * by Monki
 *
 */
get_header (); 

if (have_posts ()) :
  while ( have_posts() ) : the_post();
?>

<style>
  .m-modal__scene .m-formula__fragance__box--image {position: relative;}
  .m-modal__scene .m-formula__fragance__box--image span {
    left:0;
    right:0;
    color: #fff;
    bottom: -9px;
    margin: auto;
    width: 105px;
    font-size: 10px;
    font-weight: 700;
    position: absolute;
    border-radius: 4px;
    padding: 3px 8px 2px;
    display: inline-block;
    background-color: #b4d1f3;
    text-transform: uppercase;
    font-family: Roboto,sans-serif;

    animation-duration: 2s;
    animation-name: bounce_mnk;
    animation-direction: alternate;
    animation-iteration-count: infinite;
  }

  .m-modal__scene .m-formula__fragance__box--image span.m--two {
    background-color: #bbedc7;
    animation-delay: 1s;
  }

  .m-bottles__buttons a.m--gray {
    background-color: #67839C;
  }

  @keyframes bounce_mnk {
    0% {
      transform: translateY(0);
    }
    10% {
      transform: translateY(-1px);
    }
    20% {
      transform: translateY(0);
    }
    30% {
      transform: translateY(-1px);
    }
    40% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(0);
    }
    60% {
      transform: translateY(0);
    }
    70% {
      transform: translateY(-1px);
    }
    80% {
      transform: translateY(0);
    }
    90% {
      transform: translateY(-1px);
    }
    100% {
      transform: translateY(0);
    }
  }
</style>

<div class="m-flow" id="formula-steps">

  <section class="m-modal__scene js--active" id="formula__step_zero">
    <div class="m-container"> 
      <div class="m-formula">
        <p class="m-small">Una nueva experiencia capilar</p>
        <h2 class="m-title">Vuá es un shampoo único diseñado especialmente para ti.</h2>
        <div>
          <a class="m-button m-modal__scene--js" href="javascript:void(0)" title="Crea tu fórmula" data-scene-in="formula__step_one" data-scene-out="formula__step_zero"><span>Crea tu fórmula</span></a>
          <div class="m-square m--shadow m--one m--white"></div>
          <div class="m-square m--shadow m--two m--white m--line"></div>
          <div class="m-square m--shadow m--three m--white m--line"></div>
          <div class="m-square m--shadow m--four m--white m--line"></div>
          <div class="m-square m--shadow m--five m--white m--line"></div>
          <div class="m-square m--shadow m--six m--white"></div>
          <div class="m-square m--shadow m--seven m--white m--line m--back"></div>
          <div class="m-square m--shadow m--eight m--white m--line"></div>
          <div class="m-square m--shadow m--nine m--white"></div>
          <div class="m-square m--shadow m--ten m--white m--line"></div>
          <div class="m-square m--shadow m--eleven m--white m--line"></div>
          <div class="m-square m--shadow m--twelve m--white"></div>
          <div class="m-square m--shadow m--thirteen m--white"></div>
          <div class="m-square m--shadow m--fourteen m--white"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="m-modal__scene" id="formula__step_one">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">¿Tu cabello ha recibido algún tipo de tratamiento?</p>
        <p class="m-small">(Es decir,  ¿en los últimos 3 meses, te has teñido, laceado, hecho la queratina, etc.?)</p>
        
        <a class="m-button m-scene-option" href="javascript:void(0)" title="Sí" data-scene-in="formula__step_two" data-scene-out="formula__step_one" data-step="1" data-value="Sí"><span>Sí</span></a>
        <a class="m-button m-scene-option" href="javascript:void(0)" title="No" data-scene-in="formula__step_two" data-scene-out="formula__step_one" data-step="1" data-value="No"><span>No</span></a>
      </div>

      <?php /* ?>
      <div class="m-buttons m-single">
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_two" data-scene-out="formula__step_one" data-step="1"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
      </div>
      <?php */ ?>
    </div>
  </section>

  <section class="m-modal__scene" id="formula__step_two">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">Tu cuero cabelludo es:</p>
        <div class="m-formula__content"> 
          <div class="m-formula__option">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-seco.png, <?php bloginfo ('template_directory'); ?>/img/icon-seco@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-seco-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-seco-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-seco-mobile.png" alt="icono tipo seco">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Seco" data-step="2" data-value="Seco"><span>Seco</span></a>
          </div>
          <div class="m-formula__option">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-normal.png, <?php bloginfo ('template_directory'); ?>/img/icon-normal@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-normal-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-normal-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-normal-mobile.png" alt="icono tipo normal">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Normal" data-step="2" data-value="Normal"><span>Normal</span></a>
          </div>
          <div class="m-formula__option">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-graso.png, <?php bloginfo ('template_directory'); ?>/img/icon-graso@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-graso-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-graso-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-graso-mobile.png" alt="icono tipo graso">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Graso" data-step="2" data-value="Graso"><span>Graso</span></a>
          </div>
        </div>
        <p class="m-more">Conoce tu tipo de cuero cabelludo <a class="m-modal__button" href="javascript:void(0)" data-modal="hair_scalp">aquí</a></p>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_one" data-scene-out="formula__step_two">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_three" data-scene-out="formula__step_two" data-step="2"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_three">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">Naturalmente, <span>¿Cuál es tu tipo de cabello?</span></p>
        <div class="m-formula__content"> 
          <div class="m-formula__option"> 
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-crespo.png, <?php bloginfo ('template_directory'); ?>/img/icon-crespo@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-crespo-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-crespo-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-crespo-mobile.png" alt="icono tipo crespo">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Crespo" data-step="3" data-value="Crespo"><span>Crespo</span></a>
          </div>
          <div class="m-formula__option"> 
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-ondulado.png, <?php bloginfo ('template_directory'); ?>/img/icon-ondulado@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-ondulado-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-ondulado-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-ondulado-mobile.png" alt="icono tipo ondulado">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Ondulado" data-step="3" data-value="Ondulado"><span>Ondulado</span></a>
          </div>
          <div class="m-formula__option"> 
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-lacio.png, <?php bloginfo ('template_directory'); ?>/img/icon-lacio@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-lacio-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-lacio-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-lacio-mobile.png" alt="icono tipo lacio">
            </picture><a class="m-button m-scene-option" href="javascript:void(0)" title="Lacio" data-step="3" data-value="Lacio"><span>Lacio</span></a>
          </div>
        </div>
        <p class="m-more">Conoce tu tipo de cabello <a class="m-modal__button" href="javascript:void(0)" data-modal="hair_type">aquí</a></p>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_two" data-scene-out="formula__step_three">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_four" data-scene-out="formula__step_three" data-step="3"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_four">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">¿Qué quieres lograr con tu cabello?</p>
        <p class="m-small">Selecciona hasta 3 objetivos</p>
        <div class="m-formula__options">
          
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Hidratación profunda" data-step="4" data-max-options="3" data-value="Hidratación profunda"><span>Hidratación profunda</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Fortalecimiento" data-step="4" data-max-options="3" data-value="Fortalecimiento"><span>Fortalecimiento</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Anti frizz" data-step="4" data-max-options="3" data-value="Anti frizz"><span>Anti frizz</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Prevención caída" data-step="4" data-max-options="3" data-value="Prevención caída"><span>Prevención caída</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Brillo extremo" data-step="4" data-max-options="3" data-value="Brillo extremo"><span>Brillo extremo</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Alisado" data-step="4" data-max-options="3" data-value="Alisado"><span>Alisado</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Protección del color" data-step="4" data-max-options="3" data-value="Protección del color"><span>Protección del color</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Volumen" data-step="4" data-max-options="3" data-value="Volumen"><span>Volumen</span></a>
          <a class="m-button m-scene-option" href="javascript:void(0)" title="Anticaspa" data-step="4" data-max-options="3" data-value="Anticaspa"><span>Anticaspa</span></a>
        </div>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_three" data-scene-out="formula__step_four">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_five" data-scene-out="formula__step_four" data-step="4"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_five">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">Elige la fragancia de tu Shampoo y Acondicionador</p>
        <div class="m-formula__fragances">
        
          <?php /*
          <div class="m-formula__fragance">
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-invernal-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-invernal-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-invernal-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-invernal-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-invernal-mob.png" alt="Brisa Invernal">
                </picture>
                <span>Edición limitada</span>
              </div>
              <a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Brisa Invernal"><span>Brisa Invernal</span></a>
            </div>
          </div>
          

          <div class="m-formula__fragance">
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-wild-citrus-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-wild-citrus-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-wild-citrus-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-wild-citrus-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-wild-citrus-mob.png" alt="Wild Citrus">
                </picture>
                <span class="m--two">Edición limitada</span>
              </div>
              <a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Wild Citrus"><span>Wild Citrus</span></a>
            </div>
          </div>*/?>

          <div class="m-formula__fragance">
              <div class="m-formula__fragance__specifications">
                <h4>Floral, verde y acuoso</h4>
                <h5>Notas altas</h5>
                <ul>
                    <li>_ Pera</li>
                    <li>_ Acuoso</li>
                    <li>_ Verde guisante</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-1.png, <?php bloginfo ('template_directory'); ?>/img/sweet-pear-1@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-1.png" />
                </picture>
                <h5>Notas medias</h5>
                <ul>
                    <li>_ Iris</li>
                    <li>_ Rosa</li>
                    <li>_ Muget</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-2.png, <?php bloginfo ('template_directory'); ?>/img/sweet-pear-2@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-2.png" />
                </picture>
                <h5>Notas base</h5>
                <ul>
                    <li>_ Musk</li>
                    <li>_ Melocotón</li>
                    <li>_ Jazmín</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-3.png, <?php bloginfo ('template_directory'); ?>/img/sweet-pear-3@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-3.png" />
                </picture>
            </div>
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-desk.png, <?php bloginfo ('template_directory'); ?>/img/sweet-pear-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-mob.png, <?php bloginfo ('template_directory'); ?>/img/sweet-pear-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/sweet-pear-mob.png" alt="Sweet Pear">
                </picture>
                <!--span class="m--two">Edición limitada</span-->
              </div>
              <a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Sweet Pear"><span>Sweet Pear</span></a>
            </div>
          </div>

          <?php /* ?>
          <div class="m-formula__fragance">
            <div class="m-formula__fragance__specifications">
                <h4>Cítrica y Herbal</h4>
                <h5>Notas altas</h5>
                <ul>
                    <li>_ Hierba Luisa</li>
                    <li>_ Limón</li>
                    <li>_ Lima</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-1.png, <?php bloginfo ('template_directory'); ?>/img/hierba-luisa-1@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-1.png" />
                </picture>
                <h5>Notas medias</h5>
                <ul>
                    <li>_ Flor de Azahar</li>
                    <li>_ Manzanilla</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-2.png, <?php bloginfo ('template_directory'); ?>/img/hierba-luisa-2@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-2.png" />
                </picture>
                <h5>Notas base</h5>
                <ul>
                    <li>_ almizcle</li>
                    <li>_ blanco</li>
                    <li>_ cedro</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-3.png, <?php bloginfo ('template_directory'); ?>/img/hierba-luisa-3@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/hierba-luisa-3.png" />
                </picture>
            </div>
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-atrevida-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-atrevida-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-atrevida-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-atrevida-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-atrevida-mob.png" alt="Hierba luisa atrevida">
                </picture>
              </div>
              <a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Hierba luisa atrevida"><span>Hierba luisa atrevida</span></a>
            </div>
          </div>
          <?php */ ?>

          <div class="m-formula__fragance">
            <div class="m-formula__fragance__specifications">
                <h4>Floral y dulce</h4>
                <h5>Notas altas</h5>
                <ul>
                    <li>_ Leche</li>
                    <li>_ Fresco</li>
                    <li>_ Frutal</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/coco-1.png, <?php bloginfo ('template_directory'); ?>/img/coco-1@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/coco-1.png" />
                </picture>
                <h5>Notas medias</h5>
                <ul>
                    <li>_ Floral</li>
                    <li>_ Coco</li>
                    <li>_ Especiado</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/coco-2.png, <?php bloginfo ('template_directory'); ?>/img/coco-2@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/coco-2.png" />
                </picture>
                <h5>Notas base</h5>
                <ul>
                    <li>_ Azúcar</li>
                    <li>_ Vainilla</li>
                    <li>_ Ámbar</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/coco-3.png, <?php bloginfo ('template_directory'); ?>/img/coco-3@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/coco-3.png" />
                </picture>
            </div>
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-coco-tropical-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-coco-tropical-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-coco-tropical-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-coco-tropical-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-coco-tropical-mob.png" alt="Coco Tropical">
                </picture>
              </div><a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Coco Tropical"><span>Coco Tropical</span></a>
            </div>
          </div>
          <?php /* ?>
          <!--div class="m-formula__fragance">
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-fresas-de-fiesta-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-fresas-de-fiesta-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-fresas-de-fiesta-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-fresas-de-fiesta-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-fresas-de-fiesta-mob.png" alt="Fresas de fiesta">
                </picture>
              </div><a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Fresas de fiesta"><span>Fresas de fiesta</span></a>
            </div>
          </div-->
          <?php */ ?>
          <div class="m-formula__fragance">
            <div class="m-formula__fragance__specifications">
                <h4>Frutal</h4>
                <h5>Notas altas</h5>
                <ul>
                    <li>_ Mandarina</li>
                    <li>_ Naranja</li>
                    <li>_ Pomelo rosado</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/manzana-1.png, <?php bloginfo ('template_directory'); ?>/img/manzana-1@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/manzana-1.png" />
                </picture>
                <h5>Notas medias</h5>
                <ul>
                    <li>_ Manzana</li>
                    <li>_ Kiwi</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/manzana-2.png, <?php bloginfo ('template_directory'); ?>/img/manzana-2@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/manzana-2.png" />
                </picture>
                <h5>Notas base</h5>
                <ul>
                    <li>_ Almizcle</li>
                    <li>_ Madera</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/manzana-3.png, <?php bloginfo ('template_directory'); ?>/img/manzana-3@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/manzana-3.png" />
                </picture>
            </div>
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-reverde-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-manzana-reverde-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-reverde-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-manzana-reverde-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-reverde-mob.png" alt="Manzana reverde">
                </picture>
              </div><a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Manzana reverde"><span>Manzana reverde</span></a>
            </div>
          </div>
          <div class="m-formula__fragance">
            <div class="m-formula__fragance__specifications">
                <h4>Fresco y floral</h4>
                <h5>Notas altas</h5>
                <ul>
                    <li>_ Lavanda</li>
                    <li>_ Cidra</li>
                    <li>_ Mandarina</li>
                    <li>_ Salvia</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/brisa-1.png, <?php bloginfo ('template_directory'); ?>/img/brisa-1@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/brisa-1.png" />
                </picture>
                <h5>Notas medias</h5>
                <ul>
                    <li>_ Violeta</li>
                    <li>_ Ruibarbo</li>
                    <li>_ Flor de eucalipto</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/brisa-2.png, <?php bloginfo ('template_directory'); ?>/img/brisa-2@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/brisa-2.png" />
                </picture>
                <h5>Notas base</h5>
                <ul>
                    <li>_ Almizcle</li>
                    <li>_ Durazno</li>
                </ul>
                <picture>
                    <source srcset="<?php bloginfo ('template_directory'); ?>/img/brisa-3.png, <?php bloginfo ('template_directory'); ?>/img/brisa-3@2x.png 2x" type="image/png" />
                    <img src="<?php bloginfo ('template_directory'); ?>/img/brisa-3.png" />
                </picture>
            </div>
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mob.png" alt="Brisa marina">
                </picture>
              </div><a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Brisa marina"><span>Brisa marina</span></a>
            </div>
          </div>
          <div class="m-formula__fragance">
            <div class="m-formula__fragance__box">
              <div class="m-formula__fragance__box--image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-desk.png, <?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-desk@2x.png 2x" media="(min-width: 768px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mob.png, <?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mob@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mob.png" alt="Sin fragancia">
                </picture>
              </div><a class="m-button m-scene-option" href="javascript:void(0)" data-step="5" data-value="Sin fragancia"><span>Sin fragancia</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_four" data-scene-out="formula__step_five">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_seven" data-scene-out="formula__step_five" data-step="5"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_six">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Crea tu fórmula</h2>
        <p class="m-question">Elige la fragancia de tu Acondicionador</p>
        <div class="m-formula__fragances">
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa.png, <?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-hierba-luisa-mobile.png" alt="hierba luisa">
            </picture><span>hierba luisa</span>
          </div>
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-coco.png, <?php bloginfo ('template_directory'); ?>/img/fragance-coco@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-coco-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-coco-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-coco-mobile.png" alt="coco">
            </picture><span>coco</span>
          </div>
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-champagne.png, <?php bloginfo ('template_directory'); ?>/img/fragance-champagne@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-champagne-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-champagne-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-champagne-mobile.png" alt="champagne">
            </picture><span>champagne</span>
          </div>
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-verde.png, <?php bloginfo ('template_directory'); ?>/img/fragance-manzana-verde@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-verde-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-manzana-verde-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-manzana-verde-mobile.png" alt="manzana verde">
            </picture><span>manzana verde</span>
          </div>
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-brisa-marina-mobile.png" alt="brisa marina">
            </picture><span>brisa marina</span>
          </div>
          <div class="m-formula__fragance">
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia.png, <?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia@2x.png 2x" media="(min-width: 768px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mobile.png, <?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/fragance-sin-fragancia-mobile.png" alt="sin fragancia">
            </picture><span>sin fragancia</span>
          </div>
        </div>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_four" data-scene-out="formula__step_six">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Continuar" data-scene-in="formula__step_seven" data-scene-out="formula__step_six"><span>Continuar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_seven">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title m-grid-title">Crea tu fórmula</h2>
        <p class="m-question m-grid-text">Elige el color de tu Shampoo</p>
        <div class="m-bottles">
          <div class="m-bottles__images">
            <picture class="js--active" data-color="white">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-white-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-white-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-white.png, <?php bloginfo ('template_directory'); ?>/img/bottle-white@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-white.png" alt="producto shampoo">
            </picture>
            <picture data-color="light-blue">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-light-blue-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-light-blue-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-light-blue.png, <?php bloginfo ('template_directory'); ?>/img/bottle-light-blue@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-light-blue.png" alt="producto shampoo">
            </picture>
            <picture data-color="pink">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-pink-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-pink-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-pink.png, <?php bloginfo ('template_directory'); ?>/img/bottle-pink@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-pink.png" alt="producto shampoo">
            </picture>
            <picture data-color="orange">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-orange-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-orange-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-orange.png, <?php bloginfo ('template_directory'); ?>/img/bottle-orange@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-orange.png" alt="producto shampoo">
            </picture>
            <picture data-color="green">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-green-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-green-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-green.png, <?php bloginfo ('template_directory'); ?>/img/bottle-green@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-green.png" alt="producto shampoo">
            </picture>
            <picture data-color="purple">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-purple-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-purple-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-purple.png, <?php bloginfo ('template_directory'); ?>/img/bottle-purple@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-purple.png" alt="producto shampoo">
            </picture>
            <picture data-color="yellow">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-yellow-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-yellow-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-yellow.png, <?php bloginfo ('template_directory'); ?>/img/bottle-yellow@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-yellow.png" alt="producto shampoo">
            </picture>
            <picture data-color="gray">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-gray-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-gray-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-gray.png, <?php bloginfo ('template_directory'); ?>/img/bottle-gray@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-gray.png" alt="producto shampoo">
            </picture>
          </div>
          <div class="m-bottles__buttons">
          <p class="m-question">Elige el color de tu Shampoo</p>
          <a class="m--white m-scene-option js--active" href="javascript:void(0)" data-step="7" data-value="white" data-product="shampoo"><span>white</span></a>
          <a class="m--light-blue m-scene-option" href="javascript:void(0)" data-step="7" data-value="light-blue" data-product="shampoo"><span>light-blue</span></a>
          <a class="m--pink m-scene-option" href="javascript:void(0)" data-step="7" data-value="pink" data-product="shampoo"><span>pink</span></a>
          <a class="m--orange m-scene-option" href="javascript:void(0)" data-step="7" data-value="orange" data-product="shampoo"><span>orange</span></a>
          <a class="m--green m-scene-option" href="javascript:void(0)" data-step="7" data-value="green" data-product="shampoo"><span>green</span></a>
          <a class="m--purple m-scene-option" href="javascript:void(0)" data-step="7" data-value="purple" data-product="shampoo"><span>purple</span></a>
          <a class="m--yellow m-scene-option" href="javascript:void(0)" data-step="7" data-value="yellow" data-product="shampoo"><span>yellow</span></a>
          <!--a class="m--gray m-scene-option" href="javascript:void(0)" data-step="7" data-value="gray" data-product="shampoo"><span>gray</span></a-->
          </div>
        </div>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_five" data-scene-out="formula__step_seven">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Listo" data-scene-in="formula__step_eight" data-scene-out="formula__step_seven" data-step="7"><span>Listo</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_eight">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title m-grid-title">Crea tu fórmula</h2>
        <p class="m-question m-grid-text">Elige el color de tu Acondicionador</p>
        <div class="m-bottles">
          <div class="m-bottles__images">
            <picture class="js--active" data-color="white">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-white-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-white-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-white.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-white@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-white.png" alt="producto shampoo">
            </picture>
            <picture data-color="light-blue">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-light-blue-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-light-blue-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-light-blue.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-light-blue@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-light-blue.png" alt="producto shampoo">
            </picture>
            <picture data-color="pink">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-pink-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-pink-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-pink.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-pink@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-pink.png" alt="producto shampoo">
            </picture>
            <picture data-color="orange">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-orange-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-orange-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-orange.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-orange@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-orange.png" alt="producto shampoo">
            </picture>
            <picture data-color="green">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-green-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-green-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-green.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-green@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-green.png" alt="producto shampoo">
            </picture>
            <picture data-color="purple">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-purple-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-purple-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-purple.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-purple@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-purple.png" alt="producto shampoo">
            </picture>
            <picture data-color="yellow">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-yellow-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-yellow-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-yellow.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-yellow@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-yellow.png" alt="producto shampoo">
            </picture>
            <picture data-color="gray">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-gray-desktop.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-gray-desktop@2x.png 2x" media="(min-width: 1024px)" type="image/png">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-gray.png, <?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-gray@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/bottle-acondicionador-gray.png" alt="producto shampoo">
            </picture>
          </div>
          <div class="m-bottles__buttons">
          <p class="m-question">Elige el color de tu Acondicionador</p>
          <a class="m--white m-scene-option" href="javascript:void(0)" data-step="8" data-value="white" data-product="acondicionador"><span>white</span></a>
          <a class="m--light-blue m-scene-option" href="javascript:void(0)" data-step="8" data-value="light-blue" data-product="acondicionador"><span>light-blue</span></a>
          <a class="m--pink m-scene-option" href="javascript:void(0)" data-step="8" data-value="pink" data-product="acondicionador"><span>pink</span></a>
          <a class="m--orange m-scene-option" href="javascript:void(0)" data-step="8" data-value="orange" data-product="acondicionador"><span>orange</span></a>
          <a class="m--green m-scene-option" href="javascript:void(0)" data-step="8" data-value="green" data-product="acondicionador"><span>green</span></a>
          <a class="m--purple m-scene-option" href="javascript:void(0)" data-step="8" data-value="purple" data-product="acondicionador"><span>purple</span></a>
          <a class="m--yellow m-scene-option" href="javascript:void(0)" data-step="8" data-value="yellow" data-product="acondicionador"><span>yellow</span></a>
          <!--a class="m--gray m-scene-option" href="javascript:void(0)" data-step="8" data-value="gray" data-product="acondicionador"><span>gray</span></a-->
          </div>
        </div>
      </div>
      <div class="m-buttons">
          <a class="m-link m--icon m-modal__scene--js" href="javascript:void(0)" title="Regresar" data-scene-in="formula__step_seven" data-scene-out="formula__step_eight">
            <picture class="m-before">
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture><span>Regresar</span>
          </a>
          <a class="m-link m--icon m-scene-button" href="javascript:void(0)" title="Finalizar" data-scene-in="formula__step_ten" data-scene-out="formula__step_eight" data-step="8"><span>Finalizar</span>
            <picture>
              <source srcset="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png, <?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/arrow-right-mobile.png">
            </picture>
          </a>
        </div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_nine">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Un Shampoo para ti</h2>
        <picture class="m-formula__picture"><img src="<?php bloginfo ('template_directory'); ?>/img/shampoo-vua.jpg" alt=""></picture>
        <p class="m-formula__text">Para alcanzar tu objetivo una fórmula especializada, y hecha a la medida de tus necesidades es lo que hará la diferencia en la manera en la que tu pelo se vea y se sienta. Te ayudará a recuperar las propiedades naturales de tu cabello para que esté mucho más sano y con mucho más brillo.</p>
        <div class="m-formula__properties">
          <div class="m-formula__properties__container">
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-one.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-one@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-one-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-one-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-property-one-mobile.png" alt="Shampoo orgánico">
              </picture><span>Shampoo orgánico</span>
            </div>
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-two.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-two@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-two-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-two-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-property-two-mobile.png" alt="Sin sales, sin sulfatos, sin parabenos">
              </picture><span>Sin sales, sin sulfatos, sin parabenos</span>
            </div>
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-four.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-four@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-four-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-four-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-property-four-mobile.png" alt="Tenso activos de origen natural">
              </picture><span>Tenso activos de origen natural</span>
            </div>
            <!--div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-three.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-three@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-three-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-three-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-property-three-mobile.png" alt="Clínicamente comprobado">
              </picture><span>Clínicamente comprobado</span>
            </div-->
          </div>
          <div class="m-formula__properties__container">
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-five.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-five@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-property-five-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-property-five-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-property-five-mobile.png" alt="Ingredientes e insumos nativos">
              </picture><span>Ingredientes e insumos nativos</span>
            </div>
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-cruelty-free.png, <?php bloginfo ('template_directory'); ?>/img/icon-cruelty-free@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-cruelty-free-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-cruelty-free-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-cruelty-free-mobile.png" alt="Cruelty free">
              </picture><span>Cruelty free</span>
            </div>
            <div class="m-formula__properties__property">                               
              <picture>
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-vegan.png, <?php bloginfo ('template_directory'); ?>/img/icon-vegan@2x.png 2x" media="(min-width: 768px)" type="image/png">
                <source srcset="<?php bloginfo ('template_directory'); ?>/img/icon-vegan-mobile.png, <?php bloginfo ('template_directory'); ?>/img/icon-vegan-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/icon-vegan-mobile.png" alt="Vegano">
              </picture><span>Vegano</span>
            </div>
          </div>
        </div>
      </div>
      <div class="m-formula__buttons"><a class="m-button m-modal__scene--js" href="javascript:void(0)" title="Comprar" data-scene-in="formula__step_ten" data-scene-out="formula__step_eight"><span>Comprar</span></a></div>
    </div>
  </section>
  <section class="m-modal__scene" id="formula__step_ten">
    <div class="m-container"> 
      <div class="m-formula">
        <h2 class="m-title">Elige una opción</h2>
        <div class="m-formula__cards">
          <?php
            $index = 0;
            $prefix_array = ['shampoo', 'acondicionador', 'pack', 'pack', 'pack'];
            $products = get_posts (array (
              'post_type' => 'product',
              'numberposts' => -1,
              'post_status' => 'publish',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => 'giftcard',
                    'operator' => 'NOT IN',
                )
            ),
            ));
          ?>

          <?php foreach ($products as $product):
            $product_item = wc_get_product ($product->ID);

            if ($product_item) :
          ?>
            <div class="m-formula__cards__card">
              <div class="m-formula__cards__card__content" id="<?php echo $product->post_title; ?>">
                <?php if ($prefix_array[$index] !== 'pack') : ?>
                  <div class="card-products">
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-white">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-light-blue">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-pink">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-orange">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-green">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-purple">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-yellow">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png" alt="producto">
                    </picture>
                    <picture class="<?php echo $prefix_array[$index]; ?>-product <?php echo $prefix_array[$index]; ?>-bottle-gray">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray-desktop.png" media="(min-width: 1024px)" type="image/png">
                      <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png" alt="producto">
                    </picture>
                  </div>
                <?php else : ?>
                  <?php
                  $n = ($product->post_title === 'Pack Shampoo + Shampoo') ? 2 : 1;
                  $n2 = ($product->post_title === 'Pack Acondicionador + Acondicionador') ? 2 : 1;
                  ?>

                  <?php if ($product->post_title !== 'Pack Acondicionador + Acondicionador') : ?>
                    <?php for ($i=0; $i < $n; $i++) { ?>
                    <div class="card-products">
                      <picture class="shampoo-product shampoo-bottle-white">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-light-blue">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-pink">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-orange">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-green">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-purple">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-yellow">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png" alt="producto">
                      </picture>
                      <picture class="shampoo-product shampoo-bottle-gray">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray.png" alt="producto">
                      </picture>
                    </div>
                    <?php } ?>
                  <?php endif; ?>

                  <?php if ($product->post_title !== 'Pack Shampoo + Shampoo') : ?>
                    <?php for ($i=0; $i < $n2; $i++) { ?>
                    <div class="card-products">
                      <picture class="acondicionador-product acondicionador-bottle-white">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-white.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-light-blue">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-light-blue.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-pink">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-pink.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-orange">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-orange.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-green">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-green.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-purple">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-purple.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-yellow">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-yellow.png" alt="producto">
                      </picture>
                      <picture class="acondicionador-product acondicionador-bottle-gray">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray-desktop.png" media="(min-width: 1024px)" type="image/png">
                        <source srcset="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray.png, <?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/vertical-bottle-gray.png" alt="producto">
                      </picture>
                    </div>
                    <?php } ?>
                  <?php endif; ?>
                  

                <?php endif; ?>
                <div class="m-formula__cards__card__content__description">
                  <p><?php echo $product->post_title ?></p>
                  <p><?php echo $product_item->get_attribute('Contenido'); ?></p>
                  <p class="m-price">S/<?php echo $product_item->get_price(); ?></p>
                </div>
              </div>

              <form action="?add-to-cart=<?= $product->ID ?>" class="cart" method="post" enctype="multipart/form-data">
                <button type="submit" data-quantity="1"  data-name-product="<?php echo $product->post_title ?>" data-product_id="<?= $product->ID ?>" class="m-button button m-add-to-product alt ajax_add_to_cart add_to_cart_button product_type_simple">
                  <span>Agregar al carrito</span>
                </button>
              </form>
            </div>
          <?php 
              $index++;
            endif;
          endforeach; ?>
        </div>
      </div>
    </div>
  </section>


  <div class="m-modal">
    <div class="m-modal__content m-modal__animation m-hair-conditions" id="hair_scalp">
      <div>
        <div class="m-modal__container"><span class="m-modal__close--js m-modal__close"></span>
          <h2 title="¿Cuál es tu cuero cabelludo?">¿Cuál es tu cuero cabelludo?</h2>
          <div class="m-modal__hairconditions">
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-dry.png, <?php bloginfo ('template_directory'); ?>/img/hair-dry@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-dry-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-dry-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-dry-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>seco</h4>
                <ul> 
                  <li>- Tiene un aspecto apagado.</li>
                  <li>- Es áspero al tacto.</li>
                  <li>- Se enreda fácilmente y es difícil de peinar.</li>
                  <li>- Presenta puntas abiertas o bifurcadas.</li>
                  <li>- Suele tener electricidad estática.</li>
                </ul>
              </div>
            </div>
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-normal.png, <?php bloginfo ('template_directory'); ?>/img/hair-normal@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-normal-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-normal-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-normal-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>normal</h4>
                <ul> 
                  <li>- Se mantiene bien el peinado.</li>
                  <li>- Casi siempre presenta un buen aspecto.</li>
                  <li>- Al tacto no es graso ni seco.</li>
                  <li>- Tiene un aspecto brillante y sano.</li>
                </ul>
              </div>
            </div>
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-oily.png, <?php bloginfo ('template_directory'); ?>/img/hair-oily@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-oily-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-oily-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-oily-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>graso</h4>
                <ul> 
                  <li>- Después del lavado, la grasa aparece enseguida.</li>
                  <li>- No presenta el brillo.</li>
                  <li>- Se ve sin firmeza y no tiene volumen.</li>
                  <li>- Se pega al cuero cabelludo y tiende a que se adhiera con mayor facilidad el polvo.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="m-modal">
    <div class="m-modal__content m-modal__animation m-hair-conditions" id="hair_type">
      <div>
        <div class="m-modal__container"><span class="m-modal__close--js m-modal__close"></span>
          <h2 title="¿Cuál es tu tipo de cabello?">¿Cuál es tu tipo de cabello?</h2>
          <div class="m-modal__hairconditions">
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-curly.png, <?php bloginfo ('template_directory'); ?>/img/hair-curly@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-curly-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-curly-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-curly-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>Crespo</h4>
                <p>Presenta bucles que comienzan en el cuero cabelludo en dirección hacia abajo hasta llegar a las puntas. Los rizos son abiertos, hidratados y con brillo. Suelen tener poca definición y son propensos al frizz.</p>
              </div>
            </div>
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-wavy.png, <?php bloginfo ('template_directory'); ?>/img/hair-wavy@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-wavy-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-wavy-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-wavy-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>Ondulado</h4>
                <p>Se trata de cabellos que forman la letra S en todo lo largo de los rizos o de las ondas. Su forma siempre inicia próximo al cuero cabelludo y mantienen la misma forma sin importar el corte que presente.</p>
              </div>
            </div>
            <div class="m-modal__hairconditions__item">
              <div class="m-modal__hairconditions__image">
                <picture>
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-straight.png, <?php bloginfo ('template_directory'); ?>/img/hair-straight@2x.png 2x" media="(min-width: 1024px)" type="image/png">
                  <source srcset="<?php bloginfo ('template_directory'); ?>/img/hair-straight-mobile.png, <?php bloginfo ('template_directory'); ?>/img/hair-straight-mobile@2x.png 2x" type="image/png"><img src="<?php bloginfo ('template_directory'); ?>/img/hair-straight-mobile.png" alt="">
                </picture>
              </div>
              <div class="m-modal__hairconditions__text">
                <h4>Lacio</h4>
                <p>Por lo general es más brillante y plano. No se le forman ondas naturalmente y tampoco es fácil que mantenga un peinado por mucho tiempo, pues tiende a regresar a su forma natural.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="m-modal">
        <div class="m-modal__content m-modal__animation" id="modal-add-cart">
          <div>
            <div class="m-modal__container"><span class="m-modal__close--js m-modal__close"></span>
              <h2 title="Tu producto se agregó al carrito.">Tu producto se agregó al carrito.</h2>
              <p>¿Qué quieres hacer ahora?</p><a class="m-button m-button--black" href="<?php echo URL_CART; ?>" title="Ir al carrito"><span>Ir al carrito</span></a>
              <a class="m-link m-modal__close--js" href="javascript:void(0)" title="Seguir comprando"><span>Seguir comprando</span>
              </a>
            </div>
          </div>
        </div>
      </div>
</div>

<style>
  #formula__step_ten .m-formula__cards__card .card-products picture img {max-height: 185px;}
</style>

<script type="text/javascript">
    (function($){
        $('body').on('added_to_cart', function () {
          // reset all buttons
          resetAllButtons()

          // show modal
          show_modal()
        })

        // reset all buttons
        function resetAllButtons() {
          const $buttons = document.querySelectorAll('.m-formula__cards button.m-add-to-product')

          $buttons.forEach($button => {
            $button.classList.remove('loading')
          })
        }

        // show modal
        function show_modal() {
          const $modal = document.querySelector('#modal-add-cart')

          $modal.parentElement.classList.add('js--open')
        }
    })(jQuery)
</script>

<?php
  endwhile;
endif;
get_footer(); ?>