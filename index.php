<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="Mnk-row-table -full Mnk-portada Mnk-padding-top-70 Mnk-padding-top-85-451 Mnk-padding-top-768">
    <div class="Mnk-background-img -cover -fixed-768 Mnk-background-before -negro -opacity-25" style="background-image: url('<?php bloginfo(template_directory) ?>/img/portada.jpg')">
        <div class="Mnk-table -full Mnk-height-full Mnk-padding-top-55 Mnk-padding-top-140-768 Mnk-padding-top-180-1200 Mnk-padding-bottom-50">
            <div class="Mnk-animation -slide-left Mnk-animation-delay-5 Mnk-table_cell -middle Mnk-relative Mnk-zindex-1">
                <div class="Mnk-container Mnk-align-center Mnk-align-left-451">
                    <div class="Mnk-max-width-480-451">
                        <h1 class="Mnk-color-celeste Mnk-font-21 Mnk-font-25-451 Mnk-font-33-992 Mnk-font-40-1200 Mnk-margin-bottom-15 Mnk-margin-bottom-25-992 Mnk-uppercase">Ayuda a las marcas y compañias a alcanzar sus metas a travéz del video</h1>
                        <hr class="Mnk-hr -space-5-992 -space-25-1200 -clear">
                        <div class="Mnk-animation -slide-top Mnk-animation-delay-7 Mnk-inline-block">
                            <a href="https://vimeo.com/191698740" class="Mnk-video_js Mnk-button Mnk-button_icon -animation -animation-12"><span>Ver reel</span><i class="_small flaticon-arrows-5">&nbsp;</i></a>
                        </div>
                    </div>
                    <div class="Mnk-animation -slide-bottom Mnk-animation-delay-9 Mnk-mouse_flotante">
                        <div class="Mnk-mouse_pulse">
                            <div class="Mnk-mouse"><div class="Mnk-mouse_wheel"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Mnk-container">
    <div class="Mnk-portada_section Mnk-padding-top-50 Mnk-padding-top-65-992 Mnk-margin-bottom-40">
        <h2 class="Mnk-animation -slide-bottom Mnk-animation-delay-5 Mnk-font-23 Mnk-font-25-451 Mnk-font-33-992 Mnk-font-40-1200 Mnk-letter-small Mnk-titular Mnk-line-height-medium Mnk-align-center Mnk-margin-bottom-20 Mnk-margin-bottom-30-451 Mnk-uppercase"><span class="Mnk-block Mnk-medium Mnk-font-14 Mnk-font-15-451 Mnk-font-17-992 Mnk-letter-medium Mnk-margin-bottom-5 Mnk-margin-bottom-10-1200 Mnk-uppercase">Creamos videos para</span>destacar</h2>
        <div class="Mnk-animation -slide-bottom Mnk-animation-delay-7 Mnk-content Mnk-light Mnk-font-17 Mnk-font-20-451 Mnk-font-22-992 Mnk-line-height-large Mnk-max-width-650 Mnk-margin-auto">
            <p style="text-align: center">Tener un proceso de trabajo claro nos permite continuar manteniendo una gran calidad en nuestros productos y cumplir con los tiempos de nuestros clientes.</p>
        </div>
    </div>
    <div class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-carousel Mnk-carousel-5 Mnk-margin-top-40-451 Mnk-margin-top-60-992">
        <section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php bloginfo('template_directory') ?>/img/servicio-explicativo.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Explicativos</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>
        <section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php bloginfo('template_directory') ?>/img/servicio-puclicitario.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Publicitarios y Comerciales</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>
        <section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php bloginfo('template_directory') ?>/img/servicio-brand.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Brand content</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>
        <section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php bloginfo('template_directory') ?>/img/servicio-corporativo.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Corporativos</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>
        <section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php bloginfo('template_directory') ?>/img/servicio-sociales.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Sociales y Educativos</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>
        <!--<section class="Mnk-align-center">
            <div class="Mnk-max-width-200-601 Mnk-margin-auto Mnk-titular_container Mnk-fade_container Mnk-icon-circular_container Mnk-row-border-celeste-hover">
                <div class="Mnk-icon-circular Mnk-icon-circular-130 -animation -animation-celeste Mnk-border-negro Mnk-border-celeste-hover Mnk-margin-bottom-20">
                    <div class="Mnk-icon-circular_contenido">
                        <img src="<?php /*bloginfo('template_directory') */?>/img/servicio-fotografia.png" alt="">
                    </div>
                </div>
                <h3 class="Mnk-titular -small -inactive-css Mnk-uppercase Mnk-font-17 Mnk-medium Mnk-table Mnk-margin-left-auto Mnk-margin-right-auto">Nuevo Servicio</h3>
                <p class="Mnk-fade_content Mnk-margin-bottom">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que.</p>
            </div>
        </section>-->
    </div>
    <div class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-3 Mnk-align-center Mnk-padding-top-40 Mnk-padding-top-20-992 Mnk-padding-bottom-50">
        <a href="" class="Mnk-button -border-plomo Mnk-button_icon -animation -animation-12"><span>Ver todos los servicios</span><i class="_small flaticon-arrows-5">&nbsp;</i></a>
    </div>
</div>
<div class="Mnk-background-plomo-claro Mnk-padding-top-50 Mnk-padding-top-70-992 Mnk-padding-bottom-30-992">
    <div class="Mnk-container">
        <h2 class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-5 Mnk-font-23 Mnk-font-25-451 Mnk-font-33-992 Mnk-font-40-1200 Mnk-letter-small Mnk-titular Mnk-line-height-medium Mnk-align-center Mnk-margin-bottom-20 Mnk-margin-bottom-30-451 Mnk-uppercase"><span class="Mnk-block Mnk-medium Mnk-font-14 Mnk-font-15-451 Mnk-font-17-992 Mnk-letter-medium Mnk-margin-bottom-5 Mnk-margin-bottom-10-1200 Mnk-uppercase">Creamos videos</span>propósito</h2>
        <div class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-5 Mnk-content Mnk-light Mnk-font-17 Mnk-font-20-451 Mnk-font-22-992 Mnk-line-height-large Mnk-max-width-650 Mnk-margin-auto">
            <p style="text-align: center">Tener un proceso de trabajo claro nos permite continuar manteniendo una gran calidad en nuestros productos y cumplir con los tiempos de nuestros clientes.</p>
        </div>
        <div class="Mnk-carousel -border-plomo Mnk-carousel-3 Mnk-margin-top-40 Mnk-margin-top-50-651 Mnk-margin-top-70-992 Mnk-margin-bottom-15 Mnk-margin-bottom-30-651 Mnk-margin-bottom-40-992">
            <section class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-3 Mnk-align-center Mnk-padding-0-15 Mnk-padding-0-25-651 Mnk-padding-0-40-768 Mnk-border-right-negro-651">
                <h3 class="Mnk-uppercase Mnk-font-16 Mnk-medium Mnk-letter-large Mnk-margin-bottom-25">Creatividad con<span class="Mnk-table Mnk-width-auto Mnk-margin-auto Mnk-background-celeste Mnk-padding-3-20 Mnk-margin-top-5">objetivos</span></h3>
                <div class="Mnk-content Mnk-last-margin-bottom">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.</p>
                </div>
            </section>
            <section class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-5 Mnk-align-center Mnk-padding-0-15 Mnk-padding-0-25-651 Mnk-padding-0-40-768 Mnk-border-right-negro-651">
                <h3 class="Mnk-uppercase Mnk-font-16 Mnk-medium Mnk-letter-large Mnk-margin-bottom-25">Presupuestos<span class="Mnk-table Mnk-width-auto Mnk-margin-auto Mnk-background-celeste Mnk-padding-3-20 Mnk-margin-top-5">flexibles</span></h3>
                <div class="Mnk-content Mnk-last-margin-bottom">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.</p>
                </div>
            </section>
            <section class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-7 Mnk-align-center Mnk-padding-0-15 Mnk-padding-0-25-651 Mnk-padding-0-40-768 Mnk-border-right-negro-651">
                <h3 class="Mnk-uppercase Mnk-font-16 Mnk-medium Mnk-letter-large Mnk-margin-bottom-25">Compromiso con<span class="Mnk-table Mnk-width-auto Mnk-margin-auto Mnk-background-celeste Mnk-padding-3-20 Mnk-margin-top-5">nuestros clientes</span></h3>
                <div class="Mnk-content Mnk-last-margin-bottom">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.</p>
                </div>
            </section>
            <!--<section class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-7 Mnk-align-center Mnk-padding-0-15 Mnk-padding-0-25-651 Mnk-padding-0-40-768 Mnk-border-right-negro-651">
                <h3 class="Mnk-uppercase Mnk-font-16 Mnk-medium Mnk-letter-large Mnk-margin-bottom-25">Nuevo<span class="Mnk-table Mnk-width-auto Mnk-margin-auto Mnk-background-celeste Mnk-padding-3-20 Mnk-margin-top-5">propósito</span></h3>
                <div class="Mnk-content Mnk-last-margin-bottom">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.</p>
                </div>
            </section>-->
        </div>
        <div class="Mnk-animation-scroll Mnk-animation Mnk-animation_js -slide-bottom Mnk-animation-delay-3 Mnk-align-center Mnk-padding-top-30 Mnk-padding-bottom-50">
            <a href="" class="Mnk-button -border-plomo Mnk-button_icon -animation -animation-12"><span>Solicita una cotización</span><i class="_small flaticon-arrows-5">&nbsp;</i></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
