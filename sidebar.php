
<aside class="Mnk-width-350-992 Mnk-margin-top-50">
	<div class="Mnk-title Mnk-margin-bottom-20 Mnk-margin-bottom-30-451 Mnk-align-center">
		<h2 class="Mnk-title_text Mnk-h1 Mnk-margin-bottom Mnk-padding-0-20 Mnk-background-white Mnk-light " title="Lo último">Lo último</h2>
	</div>
	<div class="Mnk-margin-left--20 Mnk-margin-right--20 Mnk-margin-left--30-451 Mnk-margin-right--30-451 Mnk-margin-left-768 Mnk-margin-right-768 Mnk-padding-bottom-30">

		<?php
		/**
		 * Query blog posts
		 */
		global $post;
		$mnk_posts = new WP_Query (array ('post_type' => 'post', 'posts_per_page' => 4));
			/**
			 * Validating if there are  blog posts
			 */
			if (count($mnk_posts->posts) > 2) :
				/**
				 * Go through  blog posts
				 */
				while ($mnk_posts->have_posts()) : $mnk_posts->the_post();
					/**
					 * Vars
					 */
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

					if ($image === false) {
						$image[0] = get_template_directory_uri().'/img/image.jpg';
					}
		?>
				<article class="Mnk-height-full Mnk-padding-10-0">
					<a class="Mnk-figure Mnk-relative Mnk-table Mnk-height-full Mnk-width-full Mnk-box-background-hover Mnk-box-color-white-hover" href="<?php the_permalink(); ?>">
						<div class="Mnk-table_cell Mnk-width-150 Mnk-width-200-451 Mnk-width-150-768">
							<div class="Mnk-relative Mnk-table Mnk-height-full Mnk-width-full">
								<div class="Mnk-figure_img -absolute -icon -icon-blog -small">
									<div class="Mnk-figure_src Mnk-height-full" style="background-image: url('<?php echo $image[0]; ?>');"></div>
								</div>
							</div>
						</div>
						<div class="Mnk-table_cell Mnk-height-150-451">
							<div class="Mnk-padding-15 Mnk-padding-20-15-451">
								<h3 class="Mnk-margin-bottom-5 Mnk-font-14 Mnk-font-16-451" title="Preparando el día de la Madre"><?php the_title (); ?></h3>
								<p class="Mnk-margin-bottom-992 Mnk-font-14 Mnk-color-light-black"><?php the_date ('d/m/Y'); ?></p>
								<div class="Mnk-none Mnk-block-451 Mnk-none-992 Mnk-last-margin-bottom Mnk-font-14 Mnk-color-light-black">
									<p>Dicen por ahí que el chocolate es un manjar de dioses y no hay nada más cierto, por eso este delicioso producto es el detalle ideal para cualquier tipo ocasión...</p>
								</div>
							</div>
							<div>
								<div class="Mnk-last-margin-bottom Mnk-padding-0-15 Mnk-padding-bottom-15 Mnk-padding-bottom-20-451 Mnk-background-white Mnk-font-14 Mnk-color-black">
									<p><span class="Mnk-underline-dark-black">Leer más</span></p>
								</div>
							</div>
						</div>
					</a>
				</article>
		<?php
				endwhile;
			endif;

			wp_reset_query();
		?>

	</div>
</aside>