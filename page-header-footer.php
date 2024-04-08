<?php
/**
 *
 * Template Name: Página Solo header y footer
 * by Monki
 *
 */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
		the_field ('html');
	endwhile;
endif;
get_footer(); ?>