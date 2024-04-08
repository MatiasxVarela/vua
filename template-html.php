<?php if (!defined('ABSPATH')) die('No direct access allowed');

/*

Template Name: Template html

*/

?>

<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>  


	<?php the_content(); ?>

    <?php the_field('acf_template_html'); ?>

    <?php endwhile; // end of the loop. ?> 

<?php get_footer() ?>

<style>
	/*
	.m-modal.js--open {
		background-color:red !important;
		visibility:hidden !important;
		display:none !important;
	}
	*/
</style>