
<?php
/**
 * Mnk Header function
 */
get_header ();

if (have_posts ()) : ?>

	<section class="Mnk-container_fluid Mnk-padding-top-30">
		<h2 class="Mnk-title_section">articulos</h2>

		<div class="Mnk-category_box Mnk-box-inline-block-768 Mnk-margin-left--25-768 Mnk-margin-right--25-768">

			<?php
			$cont = 1;

			while (have_posts ()) : the_post ();
				$images = get_field ('images');
			?>
				<div class="Mnk-post_category-<?php echo $cont; ?> Mnk-padding-0-25-768">
					<article class="Mnk-post_link Mnk-figure Mnk-padding-bottom-30 Mnk-padding-bottom-80-768">
						<div class="Mnk-table -fixed Mnk-width-full">
							<div class="Mnk-table_footer Mnk-align-center Mnk-align-left-768">
								<div class="Mnk-last-margin-bottom">
									<h3 class="Mnk-title-clear"><a class="Mnk-color-black-hover" href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h3>
									<p><?php echo mnk_get_excerpt (50, '...'); ?></p>
								</div>
							</div>

							<a class="Mnk-table_header" href="<?php the_permalink (); ?>">
								<div class="Mnk-figure_img">
									<div class="Mnk-figure_src" style="background-image: url(<?php echo $images['mobile']; ?>)"></div>
									<span class="Mnk-figure_text"><?php the_title (); ?></span>
								</div>
							</a>
						</div>
					</article>
				</div>
			<?php
			$cont++;
			endwhile;
			wp_reset_query();
			?>

		</div>

		<div class="Mnk-pagination_box">
			<?php mnk_get_pagination ('Mnk-paginator','Mnk-paginator', 2, $wp_query); ?>
		</div>
	</section>

<?php

endif;

get_footer ();
?>
