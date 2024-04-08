<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

// Set post views count using post meta
mnk_set_post_views (get_the_ID ());

//
while ( have_posts() ) : the_post();
?>
	<div class="Mnk-entry-hero_text-box Mnk-container_fluid">
		<div class="Mnk-entry-hero_text Mnk-content"><?php the_content (); ?></div>
	</div>

	<div class="Mnk-entry-hero_text-box Mnk-container_fluid">
		<?php if (have_rows ('contenido_flexible')):
			while (have_rows ('contenido_flexible')) : the_row ();

				// To gallery content
				if (get_row_layout () == 'picture_gallery') :

					$gallery = get_sub_field ('pitcures');
					$size = 'full';
				?>
					<div class="Mnk-section_content Mnk-margin-left--15-451 Mnk-margin-right--15-451 Mnk-margin-left--25-768 Mnk-margin-right--25-768">
						<div class="Mnk-gallery_js Mnk-gallery-img_js">
							<?php foreach ($gallery as $photo): ?>
								<div class="Mnk-padding-0-15-451 Mnk-padding-0-25-768">
									<a class="Mnk-figure" href="<?php echo $photo['url']; ?>">
										<figure class="Mnk-figure_img -icon-gallery">
											<img src="<?php echo $photo['url']; ?>" alt="">
										</figure>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif;


				// To text full width
				if (get_row_layout () == 'text_full_width') : ?>
					<div class="Mnk-section_content Mnk-content">
						<?php the_sub_field ('contenido'); ?>
					</div>
				<?php endif;


				// To text whith image right
				if (get_row_layout () == 'text_with_image_right') : ?>
					<div class="Mnk-section_content">
						<div class="Mnk-box-table -bottom -fixed">
							<div class="Mnk-table_footer Mnk-table_cell-768 Mnk-content_left Mnk-content">
								<?php the_sub_field ('texto'); ?>
							</div>

							<div class="Mnk-content_right">
								<figure class="Mnk-hero_figure">
									<picture>
										<img src="<?php the_sub_field ('picture'); ?>" alt="">
									</picture>
								</figure>
							</div>
						</div>
					</div>
				<?php endif;
			endwhile;
		endif; ?>

		<?php
			// Validating Prev and Next post
			$prev_post = get_previous_post ();
			$next_post = get_next_post ();
		?>
		<div class="Mnk-pagination_box Mnk-section_content">
			<div class="Mnk-box-table -middle -fixed">
				<?php if (!empty ($prev_post)) : ?>
					<a class="Mnk-box-underline-hover Mnk-align-left Mnk-color-hover" href="<?php echo esc_url (get_permalink ($prev_post->ID)); ?>">
						<span class="Mnk-underline-hover">Previously</span>
					</a>
				<?php endif; ?>

				<?php if (!empty ($next_post)) : ?>
					<a class="Mnk-box-underline-hover Mnk-align-right Mnk-color-hover" href="<?php echo esc_url (get_permalink ($next_post->ID)); ?>">
						<span class="Mnk-underline-hover">Next</span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php
	/**
	 * Recommended blog posts
	 */
	global $post;
	$mnk_posts = new WP_Query (array ('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($post->ID)));

	// Validating if there are 3 blog posts
	if (count ($mnk_posts->posts) > 2) :
	?>
	<div class="Mnk-entry-hero_text-box Mnk-container_fluid">
		<h2 class="Mnk-title_section" title="recomendados">recomendados</h2>

		<div class="Mnk-section_content Mnk-margin-left--15-451 Mnk-margin-right--15-451">
			<div class="Mnk-gallery_js">
				<?php
				while ($mnk_posts->have_posts ()) : $mnk_posts->the_post ();
					$images = get_field ('images');
				?>
				<div class="Mnk-padding-0-15-451">
					<a class="Mnk-figure" href="<?php the_permalink (); ?>">
						<figure class="Mnk-figure_img"><img src="<?php echo $images['desktop']; ?>" alt="<?php the_title (); ?>">
							<figcapion class="Mnk-figure_text"><?php the_title (); ?></figcapion>
						</figure>
					</a>
				</div>
				<?php
				endwhile
				?>
			</div>
		</div>
	</div>
	<?php
	endif;
	wp_reset_query ();

endwhile;

get_footer ();
?>
