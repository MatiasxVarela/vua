<?php
get_header();

global $post;
?>

<div class="Mnk-container Mnk-padding-top-60 Mnk-padding-top-70-451 Mnk-padding-top-90-768 Mnk-padding-top-55-1024">
  <div class="Mnk-breadcrumbs Mnk-none Mnk-block-451">
    <ul class="Mnk-breadcrumbs_list">
      <li><a href="<?php bloginfo('url'); ?>/">Inicio</a></li>
      <li class="item-current"><a href="<?php bloginfo('url'); ?>/?s=chocolates">Búsqueda</a></li>
    </ul>
  </div>
</div>

<div class="Mnk-border -top">
  <div class="Mnk-container Mnk-padding-top-30 Mnk-padding-bottom-30 Mnk-padding-top-50-451 Mnk-padding-bottom-50-451">
    <main class="Mnk-box-table-992 -fixed-992">
      <div class="Mnk-padding-right-60-992">
        <h1 class="Mnk-align-center Mnk-align-left-768 Mnk-uppercase Mnk-light" title="Búsqueda">Búsqueda</h1>
        <?php if (have_posts()) : ?>
			<h3 class="Mnk-margin-bottom-15 Mnk-light" title="Resultaos para: <?php printf(get_search_query()); ?>">Resultados para: <?php printf(get_search_query()); ?></h3>
		<?php else : ?>
			<h3 class="Mnk-margin-bottom-15 Mnk-light" title="No hay resultados">No hay resultados para: <?php printf(get_search_query()); ?></h3>
			<p class="Mnk-light">Lo sentimos, no ha encontrado nada, por favor vuelva a intentarlo</p>
		<?php endif; ?>

        <div class="Mnk-margin-left--20 Mnk-margin-right--20 Mnk-margin-left--30-451 Mnk-margin-right--30-451 Mnk-margin-left-768 Mnk-margin-right-768 Mnk-padding-bottom-30">
			<?php 
				if (have_posts()) :
					while ( have_posts() ) : the_post();

					$title = (strlen (get_the_title()) <= 75 ) ? get_the_title() : mb_substr(get_the_title(), 0, 75) . '...';
					$extract = mnk_get_excerpt(150);

					switch ($post->post_type) {
						case 'productos':
							$type = '(Producto)';
							$icon = 'flaticon-full-items-inside-a-shopping-bag';
							break;

						case 'post':
							$type = '(Artículo)';
							$icon = 'flaticon-man-reading';
							break;

						case 'page':
							$type = '(Página)';
							$icon = 'flaticon-report';
							break;
						
						default:
							$type = '';
							break;
					}
			?>
			<article class="Mnk-height-full Mnk-padding-10-0 Mnk-border -bottom">
				<a class="Mnk-figure Mnk-relative Mnk-table Mnk-height-full Mnk-width-full Mnk-box-background-hover Mnk-box-color-white-hover" href="<?php the_permalink(); ?>">
					<div class="Mnk-table_cell -middle Mnk-width-90 Mnk-width-150-451">
						<div class="Mnk-figure_img -icon -icon-blog -small Mnk-align-center Mnk-font-50 Mnk-font-70-451"><span class="<?php echo $icon; ?>"></span></div>
					</div>
					<div class="Mnk-table_cell Mnk-height-150-451">
						<div class="Mnk-padding-15 Mnk-padding-20-15-451">
							<h2 class="Mnk-margin-bottom-5 Mnk-font-14 Mnk-font-16-451" title="<?php echo $title; ?>"><?php echo $title; ?></h2>
							<p class="Mnk-margin-bottom Mnk-margin-bottom-15-451 Mnk-font-14 Mnk-color-light-black"><?php the_date ('d/m/Y'); ?> - <small><?php echo $type; ?></small></p>
							<div class="Mnk-none Mnk-block-451 Mnk-last-margin-bottom Mnk-font-14 Mnk-color-light-black">
								<p><?php echo ($extract) ? $extract . '...' : ''; ?></p>
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
			?>

			<?php mnk_get_pagination ('Mnk-paginator','Mnk-paginator Mnk-padding-top-30 Mnk-padding-top-60-768', 2, $post_recientes); ?>


        </div>
      </div>

      <?php get_sidebar (); ?>
      
    </main>
  </div>


<?php
/**
 * Get the featured products
 */
$featured_category_id = 11;
$product_taxonomy = 'categoria-productos';
$product_category = get_term ($featured_category_id, $product_taxonomy);

if ($product_category->count > 3) :
?>
<div class="Mnk-padding-30-0 Mnk-padding-50-0-451 Mnk-background-light-gray">
	<section class="Mnk-container">
		<div class="Mnk-title Mnk-margin-bottom-20 Mnk-margin-bottom-30-451 Mnk-align-center">
			<h2 class="Mnk-title_text Mnk-h1 Mnk-margin-bottom Mnk-padding-0-20 Mnk-background-light-gray Mnk-light " title="Nuestra colección">Nuestra colección</h2>
		</div>
		<?php
		/**
		 *
		 * Validate if Mnk Slider plugin exists
		 *
		 */
		if (shortcode_exists ('mnk_products')) {
			/**
			 * Print Mnk Slider plugin
			 */
			echo do_shortcode ('[mnk_products type_module="external_page" category_id="' . $featured_category_id  . '"]');
		}
		?>
	</section>
</div>
<?php endif; ?>

<?php get_footer(); ?>
