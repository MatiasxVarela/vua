<?php
global $post;

if (have_rows('modules')) :
	while (have_rows('modules')) : the_row();


			/**
			 *
			 */
			if (get_row_layout() == 'main_banner') :
?>
				<div class="m-page__section m-page__section--gray m-hero" style="background-image: url(http://ligo-colombia.monki.pe/wp-content/uploads/2020/07/background-hero.jpg)">
					<div class="m-page__section__overlay"></div>
					<div class="m-container">
						<div class="m-circles"><span class="m-circle m--line" id="circle-one"></span><span class="m-circle m--square m--line m--white m--diagonal m--small" id="circle-two"></span><span class="m-circle m--square m--white m--diagonal m--small" id="circle-three"></span><span class="m-circle m--line" id="circle-four"></span><span class="m-circle m--small m--purple" id="circle-five"></span><span class="m-circle m--line m--purple" id="circle-six"></span><span class="m-circle m--line m--white m--big" id="circle-seven"></span><span class="m-circle m--small m--purple" id="circle-eight"></span><span class="m-circle m--hiper-big m--purple m--transparent" id="circle-nine"></span></div>

						<div class="m-hero__images">
							<?php
								the_image_source (get_sub_field ('image_one'), 'image-hero-one');
								the_image_source (get_sub_field ('image_three'), 'image-hero-two');
								the_image_source (get_sub_field ('image_four'), 'image-hero-three');
								the_image_source (get_sub_field ('image_two'), 'image-hero-four');
							?>
						</div>

						<span><?php the_sub_field ('headboard'); ?></span>
						<h2 title="<?php the_sub_field ('main_title'); ?>"><?php the_sub_field ('main_title'); ?></h2>
						<p><?php the_sub_field ('description'); ?></p>

						<?php
							$link_1 = get_sub_field ('link');
							$link_1_target = ($link_1 && $link_1['target']) ? $link_1['target'] : '_self';
							$anchor_1 = ($link_1 && strrpos ($link_1['url'], '#') > -1) ? 'm-anchor' : '';
							$link_video_1 = ($link_1 && (strrpos ($link_1['url'], 'youtube') > -1 || strrpos ($link_1['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
						?>

						<?php if ($link_1) : ?>
						<a class="m-hero__button m-button-do m-hover <?php echo $anchor_1 . ' ' . $link_video_1; ?>" href="<?php echo $link_1['url']; ?>" title="<?php echo $link_1['title']; ?>" target="<?php echo $link_1_target; ?>">
							<div class="m-button-do__icon">
								<span class="m-icon-svg">
									<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.48057 1.25402C2.14187 0.915325 1.59273 0.915325 1.25403 1.25402C0.915326 1.59272 0.915325 2.14187 1.25402 2.48057L8 9.22654L14.746 2.48057C15.0847 2.14187 15.0847 1.59272 14.746 1.25402C14.4073 0.915325 13.8581 0.915325 13.5194 1.25403L8 6.77346L2.48057 1.25402Z" stroke="#8317D9" stroke-width="2"/>
									</svg>
								</span>
							</div>
							<span><?php echo $link_1['title']; ?></span>
						</a>
						<?php endif; ?>

						<?php
							$link_2 = get_sub_field ('video_link');
							$link_2_target = ($link_2 && $link_2['target']) ? $link_2['target'] : '_self';
							$anchor_2 = ($link_2 && strrpos ($link_2['url'], '#') > -1) ? 'm-anchor' : '';
							$link_video_2 = ($link_2 && (strrpos ($link_2['url'], 'youtube') > -1 || strrpos ($link_2['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
						?>

						<?php if ($link_2) : ?>
						<a class="m-hero__button m-button-video m-hover <?php echo $anchor_2 . ' ' . $link_video_2; ?>" href="<?php echo $link_2['url']; ?>" title="<?php echo $link_2['title']; ?>" target="<?php echo $link_2_target; ?>">
							<div class="m-video__icon">
								<i></i>
							</div>
							<span><?php echo $link_2['title']; ?></span>
						</a>
						<?php endif; ?>

						<a class="m-icon-svg m-arrow-down m-anchor" href="#m-impact-solutions">
							<?php echo file_get_contents (get_template_directory () . '/img/icon-arrow-down-purple.svg'); ?>
						</a>
					</div>
				</div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'enterprise_solutions') :
			?>
				<div class="m-page__section m-impact-solutions" id="m-impact-solutions">
					<div class="m-container">
						<h2 class="m-page__section__title" title="Soluciones de alto impacto empresarial"><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('subtitle'); ?></p>
					</div>
					<div class="glide" id="m-impact-solutions-slider">
						<div class="glide__track m-impact-solutions__slider" data-glide-el="track">
						<ul class="glide__slides">

							<?php
							if( have_rows('solutions') ):
								while ( have_rows('solutions') ) : the_row();
							?>
								<li class="glide__slide">
								<div class="m-impact-solutions__slider__box" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
									<?php
										the_picture_source (array (
											'array_image' => get_sub_field ('card_images')
										));
									?>

									<div class="m-impact-solutions__slider__box__text">
										<p><?php the_sub_field('solution_title'); ?></p>
										<span><?php the_sub_field('solution_description'); ?></span>
									</div>
									<div class="m-impact-solutions__slider__box__link">
										<a class="m-hover" href="<?php the_sub_field('solution_link'); ?>" title="<?php the_sub_field('solution_title'); ?>">
											Ver producto
											<span>
											<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
											</svg>
											</span>
										</a>
									</div>
								</div>
								</li>
							<?php
								endwhile;
							else :
							endif;
							?>

						</ul>
						</div>
						<div class="glide__arrows" data-glide-el="controls">
						<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;">
							<span class="m-icon-svg">
							<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
							</svg>
							</span>
						</button>
						<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
							<span class="m-icon-svg">
							<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
							</svg>
							</span>
						</button>
						</div>
					</div>
				</div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'why_ligopay') :
			?>
				<div class="m-page__section m-page__section--gray m-why-ligo">
					<div class="m-container">
						<h2 class="m-page__section__title" title="<?php the_sub_field ('title'); ?>"><?php the_sub_field ('title'); ?></h2>
						<p><?php the_sub_field ('subtitle'); ?></p>
						<div class="m-box-table-tm m-box-table--middle-tm">

						<?php
							if( have_rows('characteristics') ):
								while ( have_rows('characteristics') ) : the_row();
						?>
							<div class="m-why-ligo__box m-table__cell-tm m-box-table--middle" title="<?php the_sub_field ('characteristic_title'); ?>">  
								<?php the_image_source (get_sub_field ('images')); ?>

								<span><?php the_sub_field ('characteristic_title'); ?></span>
								<span><?php the_sub_field ('description'); ?></span>
							</div>
						<?php
								endwhile;
							else :
							endif;
						?>

						</div>

						<?php
							$link = get_sub_field ('section_link');
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="m-button m-button--icon" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
							<span><?php echo $link['title']; ?></span>

							<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
							</svg>
						</a>
					</div>
				</div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'online_experience') :
			?>
				<div class="m-page__section m-online-experience">
					<div class="m-container">
						<h2 class="m-page__section__title" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h2>
						<div class="m-online-experience__list m-box-inline-block-ls m-box-inline-block--middle-ls">
						
						<?php
							if( have_rows('benefits') ):
								while ( have_rows('benefits') ) : the_row();
						?>
								<div class="m-online-experience__list__item m-table m-inline-block-ls">
								<div class="m-box-table m-box-table--middle m-box-table--auto">
									<div class="m-online-experience__list__item__icon">
										<?php the_image_source (get_sub_field ('icon')); ?>
									</div>
									<p class="m-online-experience__list__item__text"><?php the_sub_field('benefit'); ?></p>
								</div>
								</div>
						<?php
								endwhile;
							else :
							endif;
						?> 

						</div>
						<a class="m-video m-video--auto m-online-experience__video" href="<?php the_sub_field('video_link'); ?>">
							<picture>
								<img class="m-lazy-js" data-src="<?php the_sub_field('imagen'); ?>">
							</picture>

							<div class="m-video__icon"><i></i></div>

							<div class="m-online-experience__video__patterns m-online-experience__video__patterns--circle"></div>
							<div class="m-online-experience__video__patterns m-online-experience__video__patterns--ring"></div>
	
							<div class="m-none m-block-ts m-circle m--small m--light-blue"></div>
							<div class="m-none m-block-ts m-circle m--line m--medium m--purple"></div>
							<div class="m-none m-block-ts m-circle m--big m--purple"></div>
							<div class="m-none m-block-ts m-circle m--line m--super-big m--light-gray"></div>
						</a>

						<div class="m-none m-block-ts m-circle m--big m--light-gray-darken"></div>
					</div>
				</div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'management_website') :
			?>
				<div class="m-page__section m-page__section--gray m-partners">
					<div class="m-container">
						<div class="m-partners__grid m-box-table-ls m-box-table--middle-ls">

						<div class="m-partners__grid__left m-none m-table__cell-ls">
							<picture class="pm-partners_picture">
								<img class="m-lazy-js" data-src="<?php the_sub_field('image'); ?>">
								<div class="m-none m-block-ls m-circle m--small m--purple"></div>
								<div class="m-none m-block-ls m-circle m--small m--light-blue"></div>
								<div class="m-none m-block-ls m-circle m--medium m--line m--purple"></div>
								<div class="m-none m-block-ls m-circle m--mega-big m--light-gray-lighten"></div>
							</picture>
						</div>

						<div class="m-partners__grid__right">
							<p class="m-page__section__subtitle"><?php the_sub_field('higher_title'); ?></p>
							<h2 class="m-page__section__title" title="<?php the_sub_field('main_title'); ?>"><?php the_sub_field('main_title'); ?></h2>

							<div class="m-none-ls">
								<picture class="pm-partners_picture">
									<img class="m-lazy-js" data-src="<?php the_sub_field('image'); ?>">
								</picture>
							</div>

							<div class="m-slider-not-slider" id="m-features-slider">
								<div class="m-slider-not-slider__track" data-glide-el="">
									<div class="m-slider-not-slider__slides">
									
									<?php
										if( have_rows('characteristics') ):
											while ( have_rows('characteristics') ) : the_row();
									?>
											<div class="m-slider-not-slider__slide">
												<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
													<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
														<span class="m-inline-block m-inline-block--top">
															<?php the_image_source (get_sub_field ('characteristic_icon')); ?>
														</span>
													</div>

													<div class="m-slider-not-slider__feature__text">
														<p><strong><?php the_sub_field('characteristic_title'); ?></strong></p>
														<p><?php the_sub_field('characteristic_description'); ?></p>
													</div>
												</div>
											</div>
									<?php
											endwhile;
										else :
										endif;
									?>
									</div>
								</div>
								<div class="m-none-ls">
									<div class="glide__arrows" data-glide-el="controls">
									<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;">
										<span class="m-icon-svg">
										<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/>
										</svg>
										</span>
									</button>
									<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
										<span class="m-icon-svg">
											<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/>
											</svg>
										</span>
									</button>
									</div>
								</div>

								<div class="m-none-ls">
									<div class="glide__bullets" data-glide-el="controls[nav]">
									<button class="glide__bullet" data-glide-dir="=0"></button>
									<button class="glide__bullet" data-glide-dir="=1"></button>
									</div>
								</div>

							</div>
							<div class="m-partners__button">
								<?php
									$link = get_sub_field ('section_link');
									$link_target = $link['target'] ? $link['target'] : '_self';
									$anchor = ($link && strrpos ($link['url'], '#') > -1) ? 'm-anchor' : '';
									$link_video = ($link && (strrpos ($link['url'], 'youtube') > -1 || strrpos ($link['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
								?>

								<?php if ($link) : ?>
								<a href="<?php echo $link['url']; ?>" class="m-button m-button--icon <?php echo $anchor . ' ' . $link_video; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>"> 
									<span><?php echo $link['title']; ?></span>
									<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
									</svg>
								</a>
								<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'app_section') :
			?>
				<div class="m-page__section m-ligo-app">
					<div class="m-container">
						<div class="m-partners__grid m-box-table-ls m-box-table--middle-ls">
						<div class="m-ligo-app__grid__left">
							<p class="m-page__section__subtitle"><?php the_sub_field('higher_title'); ?></p>
							<h2 class="m-page__section__title" title="<?php the_sub_field('main_title'); ?>"><?php the_sub_field('main_title'); ?>
							</h2>
							<div class="m-none-ls m-ligo-app__picture-mobile">
							<picture class="m-ligo-app__picture">
								<source data-srcset=" img/app-mobile-ligo-col-mob.png  1x, img/app-mobile-ligo-col-mob@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" img/app-mobile-ligo-col-mob.png " alt="">
								<div class="m-circle m--line m--big"></div>
								<div class="m-circle m--purple m--small"></div>
								<div class="m-circle m--hiper-big m--light-gray"></div>
								<div class="m-circle m--light-blue"></div>
							</picture>
							</div>
							<div class="m-slider-not-slider" id="m-app-slider">
							<div class="m-slider-not-slider__track" data-glide-el="">
								<div class="m-slider-not-slider__slides">

									<?php
									if( have_rows('characteristics') ):
										while ( have_rows('characteristics') ) : the_row();
									?>
										<div class="m-slider-not-slider__slide">
											<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
											<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
												<span class="m-inline-block m-inline-block--top">
													<?php the_image_source (get_sub_field ('characteristic_icon')); ?>
												</span>
											</div>
											<div class="m-slider-not-slider__feature__text">
												<p><strong><?php the_sub_field('characteristic_title'); ?></strong></p>
												<p><?php the_sub_field('characteristic_description'); ?></p>
											</div>
											</div>
										</div>
									<?php
										endwhile;
									else :
									endif;
									?>

								</div>
							</div>
							<div class="m-none-ls">
								<div class="glide__arrows" data-glide-el="controls">
								<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;">
									<span class="m-icon-svg">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/>
									</svg>
									</span>
								</button>
								<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
									<span class="m-icon-svg">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/>
									</svg>
									</span>
								</button>
								</div>
							</div>
							<div class="m-none-ls">
								<div class="glide__bullets" data-glide-el="controls[nav]">
									<button class="glide__bullet" data-glide-dir="=0"></button>
									<button class="glide__bullet" data-glide-dir="=1"></button>
								</div>
							</div>
							</div>

							<div class="m-ligo-app__apps"><span>Disponible en: </span>
								<?php if (APP_STORE) : ?>
								<a class="m-hover" href="<?php echo APP_STORE; ?>" title="Descargar app en Apple Store">
									<picture>
									<source srcset="<?php bloginfo('template_directory'); ?>/img/icon-apple-big.png, <?php bloginfo('template_directory'); ?>/img/icon-apple-big@2x.png 2x" type="image/png">
										<img src="<?php bloginfo('template_directory'); ?>/img/icon-apple-big.png" alt="icon-apple-big">
									</picture>
								</a>
								<?php endif; ?>
								<?php if (APP_GOOGLE_PLAY) : ?>
								<a class="m-hover" href="<?php echo APP_GOOGLE_PLAY; ?>" title="Descargar app en Google Play">
									<picture>
									<source srcset="<?php bloginfo('template_directory'); ?>/img/icon-google-play-big.png, <?php bloginfo('template_directory'); ?>/img/icon-google-play-big@2x.png 2x" type="image/png">
										<img src="<?php bloginfo('template_directory'); ?>/img/icon-google-play-big.png" alt="icon-google-play-big">
									</picture>
								</a>
								<?php endif; ?>
							</div>
						</div>

						<div class="m-ligo-app__grid__right m-none m-table__cell-ls">
							<div class="m-ligo-app__picture-desktop">
								<?php 
									$circles = '<div class="m-circle m--line m--big"></div><div class="m-circle m--purple m--small"></div><div class="m-circle m--mega-big m--light-gray"></div><div class="m-circle m--light-blue"></div>';

									the_image_source (get_sub_field ('images'), '', '', '', '', $circles); ?>
							</div>
						</div>

						</div>
					</div>
				</div>

			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'full_banner') :
			?>
				<div class="m-page__section m-page__section--gray m-meet-us" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
					<p><?php the_sub_field('higher_title'); ?></p>
					<h3 title="<?php the_sub_field('main_title'); ?>"><?php the_sub_field('main_title'); ?></h3>

					<?php
						$link = get_sub_field ('button');
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="m-button m-button--icon" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
						<span><?php echo $link['title']; ?></span>
						<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
						</svg>
					</a>
					<div class="m-page__section__overlay"></div>
				</div>
			<?php
			endif;



			/**
			 *
			 */
			if (get_row_layout() == 'opinions') :
			?>
				<div class="m-page__section m-page__section--gray m-testimonies">
					<div class="m-container">
						<h2 class="m-page__section__title"><?php the_sub_field('title'); ?></h2>
						<div class="m-testimonies__bubble">
						<div class="m-testimonies__bubble__text">
							<svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 3.01245C0 4.57261 0.390042 6.18257 1.17012 7.84232C1.95021 9.51867 3.02075 10.9046 4.38174 12L7.02075 10.2075C6.20747 9.07884 5.60166 7.93361 5.20332 6.77178C4.80498 5.62656 4.60581 4.39834 4.60581 3.08714V0H0V3.01245ZM7.86722 3.01245C7.86722 4.57261 8.25726 6.18257 9.03734 7.84232C9.81743 9.51867 10.888 10.9046 12.249 12L14.888 10.2075C14.0747 9.07884 13.4689 7.93361 13.0705 6.77178C12.6722 5.62656 12.473 4.39834 12.473 3.08714V0H7.86722V3.01245Z" fill="#43FF8E"/>
							</svg>

							<?php
							if( have_rows('opinions') ):
								while ( have_rows('opinions') ) : the_row();
							?>
								<p><?php the_sub_field('commentary'); ?></p>
							<?php
								endwhile;
							else :
							endif;
							?>

							<svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.8877 3.01245C14.8877 4.57261 14.4977 6.18257 13.7176 7.84232C12.9375 9.51867 11.8669 10.9046 10.506 12L7.86695 10.2075C8.68023 9.07884 9.28604 7.93361 9.68438 6.77178C10.0827 5.62656 10.2819 4.39834 10.2819 3.08714V0H14.8877V3.01245ZM7.02048 3.01245C7.02048 4.57261 6.63043 6.18257 5.85035 7.84232C5.07027 9.51867 3.99973 10.9046 2.63873 12L-0.000271797 10.2075C0.813006 9.07884 1.41882 7.93361 1.81716 6.77178C2.2155 5.62656 2.41467 4.39834 2.41467 3.08714V0H7.02048V3.01245Z" fill="#43FF8E"/>
							</svg>
						</div>

						<?php
							if( have_rows('opinions') ):
								while ( have_rows('opinions') ) : the_row();
						?>
							<?php
								$link = get_sub_field ('commentary_link');
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="m-link m-link--icon" href="<?php echo $link['url']; ?>" target="<?php echo $link_target; ?>"> <span>Ver historia</span>
								<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.25402 13.5194C0.915325 13.8581 0.915325 14.4073 1.25402 14.746C1.59272 15.0847 2.14187 15.0847 2.48057 14.746L9.22654 8L2.48057 1.25402C2.14187 0.915325 1.59272 0.915325 1.25402 1.25402C0.915325 1.59272 0.915325 2.14187 1.25403 2.48057L6.77346 8L1.25402 13.5194Z" fill="#8317D9" stroke="#8317D9" stroke-width="2"/>
								</svg>
							</a>
						<?php
								endwhile;
							endif;
						?>

						</div>

						<div class="glide m-testimonies__slider" id="m-testimonies-slider">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
							
							<?php
								$count = 0;

								if( have_rows('opinions') ):
									while ( have_rows('opinions') ) : the_row();
							?>
								<li class="glide__slide">
									<div class="m-testimonies__slider__item" data-glide-index="<?php echo $count; ?>">
										<?php the_image_source (get_sub_field ('images')); ?>
									</div>
								</li>
							<?php
									$count++;
									endwhile;
								endif;
							?>

							</ul>
						</div>

						<div class="glide__arrows m--blue" data-glide-el="controls">
							<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> 
							<span class="m-icon-svg">
								<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
								</svg>
							</span>
							</button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
							<span class="m-icon-svg">
								<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
								</svg>
							</span>
							</button>
						</div>

						</div>

						<?php
							$link = get_sub_field ('section_link');
							$link_target = $link['target'] ? $link['target'] : '_self';
							$anchor = ($link && strrpos ($link['url'], '#') > -1) ? 'm-anchor' : '';
							$link_video = ($link && (strrpos ($link['url'], 'youtube') > -1 || strrpos ($link['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
						?>

						<?php if ($link) : ?>
						<a href="<?php echo $link['url']; ?>" class="m-button <?php echo $anchor . ' ' . $link_video; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
							<span><?php echo $link['title']; ?></span>
						</a>
						<?php endif; ?>
					</div>
				</div>
			<?php
			endif;



			/**
			 *
			 */
			if (get_row_layout() == 'tabs_solutions') :
			?>
				<div class="m-page__section m-problems">
					<div class="m-container">
						<h2 class="m-page__section__title" title="Una solución para cada problema"><?php the_sub_field('title'); ?></h2>

						<input class="panel-1-ctrl m-tabs_inputs" id="panel-1-ctrl" type="radio" name="tab-radios" checked="checked">
						<?php if (get_sub_field ('is_visible_2') === 'yes') : ?>
							<input class="panel-2-ctrl m-tabs_inputs" id="panel-2-ctrl" type="radio" name="tab-radios">
						<?php endif; ?>
						<?php if (get_sub_field ('is_visible_3') === 'yes') : ?>
							<input class="panel-3-ctrl m-tabs_inputs" id="panel-3-ctrl" type="radio" name="tab-radios">
						<?php endif; ?>
						<?php if (get_sub_field ('is_visible_4') === 'yes') : ?>
							<input class="panel-4-ctrl m-tabs_inputs" id="panel-4-ctrl" type="radio" name="tab-radios">
						<?php endif; ?>
						<?php if (get_sub_field ('is_visible_5') === 'yes') : ?>
							<input class="panel-5-ctrl m-tabs_inputs" id="panel-5-ctrl" type="radio" name="tab-radios">
						<?php endif; ?>

						<ul class="m-tabs m-problems__tabs" id="m-problems-tabs-list">
							<li class="li-for-panel-1" id="li-for-panel-1">
								<label class="m-tabs__label" for="panel-1-ctrl"><span>
									<picture>
									<source data-srcset=" <?php bloginfo('template_directory'); ?>/img/icon-hand-money.png  1x, <?php bloginfo('template_directory'); ?>/img/icon-hand-money@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" <?php bloginfo('template_directory'); ?>/img/icon-hand-money.png " alt="<?php the_sub_field('incentives_name'); ?>">
									</picture></span><span><?php the_sub_field('incentives_name'); ?></span></label>
							</li>
							<?php if (get_sub_field ('is_visible_2') === 'yes') : ?>
							<li class="li-for-panel-2" id="li-for-panel-2">
								<label class="m-tabs__label" for="panel-2-ctrl"><span>
									<picture>
									<source data-srcset=" <?php bloginfo('template_directory'); ?>/img/icon-suitecase-dollar.png  1x, <?php bloginfo('template_directory'); ?>/img/icon-suitecase-dollar@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" <?php bloginfo('template_directory'); ?>/img/icon-suitecase-dollar.png " alt="<?php the_sub_field('viatics_name'); ?>">
									</picture></span><span><?php the_sub_field('viatics_name'); ?></span></label>
							</li>
							<?php endif; ?>
							<?php if (get_sub_field ('is_visible_3') === 'yes') : ?>
							<li class="li-for-panel-3" id="li-for-panel-3">
								<label class="m-tabs__label" for="panel-3-ctrl"><span>
									<picture>
									<source data-srcset=" <?php bloginfo('template_directory'); ?>/img/icon-giftcard.png  1x, <?php bloginfo('template_directory'); ?>/img/icon-giftcard@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" <?php bloginfo('template_directory'); ?>/img/icon-giftcard.png " alt="<?php the_sub_field('giftcard_name'); ?>">
									</picture></span><span><?php the_sub_field('giftcard_name'); ?></span></label>
							</li>
							<?php endif; ?>
							<?php if (get_sub_field ('is_visible_4') === 'yes') : ?>
							<li class="li-for-panel-4" id="li-for-panel-4">
								<label class="m-tabs__label" for="panel-4-ctrl"><span>
									<picture>
									<source data-srcset=" <?php bloginfo('template_directory'); ?>/img/icon-card-alternate.png  1x, <?php bloginfo('template_directory'); ?>/img/icon-card-alternate@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" <?php bloginfo('template_directory'); ?>/img/icon-card-alternate.png " alt="<?php the_sub_field('wages_name'); ?>">
									</picture></span><span><?php the_sub_field('wages_name'); ?></span></label>
							</li>
							<?php endif; ?>
							<?php if (get_sub_field ('is_visible_5') === 'yes') : ?>
							<li class="li-for-panel-5" id="li-for-panel-5">
								<label class="m-tabs__label" for="panel-5-ctrl"><span>
									<picture>
									<source data-srcset=" <?php bloginfo('template_directory'); ?>/img/icon-hard-box.png  1x, <?php bloginfo('template_directory'); ?>/img/icon-hard-box@2x.png  2x" type="image/png"><img class="m-lazy-js" data-src=" <?php bloginfo('template_directory'); ?>/img/icon-hard-box.png " alt="<?php the_sub_field('disbursement_name'); ?>">
									</picture></span><span><?php the_sub_field('disbursement_name'); ?></span></label>
							</li>
							<?php endif; ?>
						</ul>

						<main class="m-tabs__panels" id="m-problems-panels">
						<div class="container">

							<section class="panel panel-1" id="panel-1">
								<div class="m-problems__grid m-box-table-ls m-box-table--middle-ls">
								<div class="m-problems__grid__left">
								<h4 title="Tarjeta de incentivos"><?php the_sub_field ('incentives_name'); ?></h4>
								<p><?php the_sub_field ('incentives_description'); ?></p>
								<div class="m-none-ls">
									<?php
										the_picture_source (array (
											'array_image' => get_sub_field ('image_1'),
											'picture_class' => 'm-problems__picture'
										));
									?>
								</div>
								<div class="m-slider-not-slider m-solution-slider">
									<div class="m-slider-not-slider__track" data-glide-el="">
									<div class="m-slider-not-slider__slides">
										<?php
										if( have_rows('incentives_features') ):
											while ( have_rows('incentives_features') ) : the_row();
										?>
											<div class="m-slider-not-slider__slide">
												<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
												<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
													<span class="m-inline-block m-inline-block--top">
													<picture>
														<img class="m-lazy-js" data-src="<?php bloginfo('template_directory'); ?>/img/icon-close-green.png " alt="<?php the_sub_field ('features_name'); ?>">
													</picture>
													</span>
												</div>
												<div class="m-slider-not-slider__feature__text">
													<p><strong><?php the_sub_field ('features_name'); ?></strong></p>
													<p><?php the_sub_field ('features_description'); ?></p>
												</div>
												</div>
											</div>
										<?php
											endwhile;
										else :
										endif;
										?>
									</div>
									</div>
									<div class="m-none-ls">
									<div class="glide__arrows" data-glide-el="controls">
										<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> <span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
										<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
									</div>
									</div>
									<div class="m-none-ls">
									<div class="glide__bullets" data-glide-el="controls[nav]"><button class="glide__bullet" data-glide-dir="=0"></button><button class="glide__bullet" data-glide-dir="=1"></button></div>
									</div>
								</div>

								<?php
									$button_1 = get_sub_field ('button_1_1');
									$target_1 = $button_1['target'] ? $button_1['target'] : '_self';

									$button_2 = get_sub_field ('button_1_2');
									$target_2 = $button_2['target'] ? $button_2['target'] : '_self';
								?>
								<a class="m-button m-button--outline m-button--icon" href="<?php echo $button_1['url']; ?>" title="<?php echo $button_1['title']; ?>" target="<?php echo $target_1; ?>"> 
									<span><?php echo $button_1['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
								</a>
								<a class="m-button m-button--icon m-button--green" href="<?php echo $button_2['url']; ?>" title="<?php echo $button_2['title']; ?>" target="<?php echo $target_2; ?>">
									<span><?php echo $button_2['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
								</a>
								</div>
								<div class="m-problems__grid__right m-none m-table__cell-ls">
								
								<?php the_image_source (get_sub_field ('image_1')); ?>
								</div>
								</div>
							</section>

							<?php if (get_sub_field ('is_visible_2') === 'yes') : ?>
							<section class="panel panel-2" id="panel-2">
								<div class="m-problems__grid m-box-table-ls m-box-table--middle-ls">
									<div class="m-problems__grid__left">
									<h4 title="Tarjeta de incentivos"><?php the_sub_field('viatics_name'); ?></h4>
									<p><?php the_sub_field('viatics_description'); ?></p>
									<div class="m-none-ls">
										<picture class="m-problems__picture">
										<source data-srcset=" img/card-circle.png  1x, img/card-circle@2x.png  2x" type="image/png">
										<img class="m-lazy-js" data-src=" img/card-circle.png " alt="<?php the_sub_field('viatics_name'); ?>">
										</picture>
									</div>
									<div class="m-slider-not-slider m-solution-slider">
										<div class="m-slider-not-slider__track" data-glide-el="">
										<div class="m-slider-not-slider__slides">
											<?php
											if( have_rows('viatics_features') ):
												while ( have_rows('viatics_features') ) : the_row();
											?>
												<div class="m-slider-not-slider__slide">
													<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
													<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
														<span class="m-inline-block m-inline-block--top">
														<picture>
															<img class="m-lazy-js" data-src="<?php bloginfo('template_directory'); ?>/img/icon-close-green.png " alt="<?php the_sub_field('features_name'); ?>">
														</picture>
														</span>
													</div>
													<div class="m-slider-not-slider__feature__text">
														<p><strong><?php the_sub_field('features_name'); ?></strong></p>
														<p><?php the_sub_field('features_description'); ?></p>
													</div>
													</div>
												</div>
											<?php
												endwhile;
											else :
											endif;
											?>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__arrows" data-glide-el="controls">
											<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> <span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
											<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__bullets" data-glide-el="controls[nav]"><button class="glide__bullet" data-glide-dir="=0"></button><button class="glide__bullet" data-glide-dir="=1"></button></div>
										</div>
									</div>

									<?php
										$button_1 = get_sub_field ('button_2_1');
										$target_1 = $button_1['target'] ? $button_1['target'] : '_self';

										$button_2 = get_sub_field ('button_2_2');
										$target_2 = $button_2['target'] ? $button_2['target'] : '_self';
									?>
									<a class="m-button m-button--outline m-button--icon" href="<?php echo $button_1['url']; ?>" title="<?php echo $button_1['title']; ?>" target="<?php echo $target_1; ?>"> 
										<span><?php echo $button_1['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									<a class="m-button m-button--icon m-button--green" href="<?php echo $button_2['url']; ?>" title="<?php echo $button_2['title']; ?>" target="<?php echo $target_2; ?>">
										<span><?php echo $button_2['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									</div>
									<div class="m-problems__grid__right m-none m-table__cell-ls">
									
									<?php the_image_source (get_sub_field ('image_2')); ?>
									</div>
								</div>
							</section>
							<?php endif; ?>

							<?php if (get_sub_field ('is_visible_3') === 'yes') : ?>
							<section class="panel panel-3" id="panel-3">
								<div class="m-problems__grid m-box-table-ls m-box-table--middle-ls">
									<div class="m-problems__grid__left">
									<h4 title="Tarjeta de incentivos"><?php the_sub_field('giftcard_name'); ?></h4>
									<p><?php the_sub_field('giftcard_description'); ?></p>
									<div class="m-none-ls">
										<picture class="m-problems__picture">
										<source data-srcset=" img/card-circle.png  1x, img/card-circle@2x.png  2x" type="image/png">
										<img class="m-lazy-js" data-src=" img/card-circle.png " alt="<?php the_sub_field('giftcard_name'); ?>">
										</picture>
									</div>
									<div class="m-slider-not-slider m-solution-slider">
										<div class="m-slider-not-slider__track" data-glide-el="">
										<div class="m-slider-not-slider__slides">
											<?php
											if( have_rows('giftcard_features') ):
												while ( have_rows('giftcard_features') ) : the_row();
											?>
												<div class="m-slider-not-slider__slide">
													<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
													<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
														<span class="m-inline-block m-inline-block--top">
														<picture>
															<img class="m-lazy-js" data-src="<?php bloginfo('template_directory'); ?>/img/icon-close-green.png " alt="<?php the_sub_field('features_name'); ?>">
														</picture>
														</span>
													</div>
													<div class="m-slider-not-slider__feature__text">
														<p><strong><?php the_sub_field('features_name'); ?></strong></p>
														<p><?php the_sub_field('features_description'); ?></p>
													</div>
													</div>
												</div>
											<?php
												endwhile;
											else :
											endif;
											?>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__arrows" data-glide-el="controls">
											<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> <span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
											<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__bullets" data-glide-el="controls[nav]"><button class="glide__bullet" data-glide-dir="=0"></button><button class="glide__bullet" data-glide-dir="=1"></button></div>
										</div>
									</div>

									<?php
										$button_1 = get_sub_field ('button_3_1');
										$target_1 = $button_1['target'] ? $button_1['target'] : '_self';

										$button_2 = get_sub_field ('button_3_2');
										$target_2 = $button_2['target'] ? $button_2['target'] : '_self';
									?>
									<a class="m-button m-button--outline m-button--icon" href="<?php echo $button_1['url']; ?>" title="<?php echo $button_1['title']; ?>" target="<?php echo $target_1; ?>"> 
										<span><?php echo $button_1['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									<a class="m-button m-button--icon m-button--green" href="<?php echo $button_2['url']; ?>" title="<?php echo $button_2['title']; ?>" target="<?php echo $target_2; ?>">
										<span><?php echo $button_2['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									</div>
									<div class="m-problems__grid__right m-none m-table__cell-ls">
									
									<?php the_image_source (get_sub_field ('image_3')); ?>
									</div>
								</div>
							</section>
							<?php endif; ?>

							<?php if (get_sub_field ('is_visible_4') === 'yes') : ?>
							<section class="panel panel-4" id="panel-4">
								<div class="m-problems__grid m-box-table-ls m-box-table--middle-ls">
									<div class="m-problems__grid__left">
									<h4 title="Tarjeta de incentivos"><?php the_sub_field('wages_name'); ?></h4>
									<p><?php the_sub_field('wages_description'); ?></p>
									<div class="m-none-ls">
										<picture class="m-problems__picture">
										<source data-srcset=" img/card-circle.png  1x, img/card-circle@2x.png  2x" type="image/png">
										<img class="m-lazy-js" data-src=" img/card-circle.png " alt="<?php the_sub_field('wages_name'); ?>">
										</picture>
									</div>
									<div class="m-slider-not-slider m-solution-slider">
										<div class="m-slider-not-slider__track" data-glide-el="">
										<div class="m-slider-not-slider__slides">
											<?php
											if( have_rows('wages_features') ):
												while ( have_rows('wages_features') ) : the_row();
											?>
												<div class="m-slider-not-slider__slide">
													<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
													<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
														<span class="m-inline-block m-inline-block--top">
														<picture>
															<img class="m-lazy-js" data-src="<?php bloginfo('template_directory'); ?>/img/icon-close-green.png " alt="<?php the_sub_field('features_name'); ?>">
														</picture>
														</span>
													</div>
													<div class="m-slider-not-slider__feature__text">
														<p><strong><?php the_sub_field('features_name'); ?></strong></p>
														<p><?php the_sub_field('features_description'); ?></p>
													</div>
													</div>
												</div>
											<?php
												endwhile;
											else :
											endif;
											?>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__arrows" data-glide-el="controls">
											<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> <span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
											<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__bullets" data-glide-el="controls[nav]"><button class="glide__bullet" data-glide-dir="=0"></button><button class="glide__bullet" data-glide-dir="=1"></button></div>
										</div>
									</div>
									
									<?php
										$button_1 = get_sub_field ('button_4_1');
										$target_1 = $button_1['target'] ? $button_1['target'] : '_self';

										$button_2 = get_sub_field ('button_4_2');
										$target_2 = $button_2['target'] ? $button_2['target'] : '_self';
									?>
									<a class="m-button m-button--outline m-button--icon" href="<?php echo $button_1['url']; ?>" title="<?php echo $button_1['title']; ?>" target="<?php echo $target_1; ?>"> 
										<span><?php echo $button_1['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									<a class="m-button m-button--icon m-button--green" href="<?php echo $button_2['url']; ?>" title="<?php echo $button_2['title']; ?>" target="<?php echo $target_2; ?>">
										<span><?php echo $button_2['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									</div>
									<div class="m-problems__grid__right m-none m-table__cell-ls">
									
									<?php the_image_source (get_sub_field ('image_4')); ?>
									</div>
								</div>
							</section>
							<?php endif; ?>

							<?php if (get_sub_field ('is_visible_5') === 'yes') : ?>
							<section class="panel panel-5" id="panel-5">
								<div class="m-problems__grid m-box-table-ls m-box-table--middle-ls">
									<div class="m-problems__grid__left">
									<h4 title="Tarjeta de incentivos"><?php the_sub_field('disbursement_name'); ?></h4>
									<p><?php the_sub_field('disbursement_description'); ?></p>
									<div class="m-none-ls">
										<picture class="m-problems__picture">
										<source data-srcset=" img/card-circle.png  1x, img/card-circle@2x.png  2x" type="image/png">
										<img class="m-lazy-js" data-src=" img/card-circle.png " alt="<?php the_sub_field('disbursement_name'); ?>">
										</picture>
									</div>
									<div class="m-slider-not-slider m-solution-slider">
										<div class="m-slider-not-slider__track" data-glide-el="">
										<div class="m-slider-not-slider__slides">
											<?php
											if( have_rows('disbursement_features') ):
												while ( have_rows('disbursement_features') ) : the_row();
											?>
												<div class="m-slider-not-slider__slide">
													<div class="m-slider-not-slider__feature m-box-table-ls m-box-table--fixed-ls">
													<div class="m-slider-not-slider__feature__icon m-none m-table__cell-ls">
														<span class="m-inline-block m-inline-block--top">
														<picture>
															<img class="m-lazy-js" data-src="<?php bloginfo('template_directory'); ?>/img/icon-close-green.png " alt="<?php the_sub_field('features_name'); ?>">
														</picture>
														</span>
													</div>
													<div class="m-slider-not-slider__feature__text">
														<p><strong><?php the_sub_field('features_name'); ?></strong></p>
														<p><?php the_sub_field('features_description'); ?></p>
													</div>
													</div>
												</div>
											<?php
												endwhile;
											else :
											endif;
											?>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__arrows" data-glide-el="controls">
											<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"> <span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
											<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><span class="m-icon-svg"><svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg></span></button>
										</div>
										</div>
										<div class="m-none-ls">
										<div class="glide__bullets" data-glide-el="controls[nav]"><button class="glide__bullet" data-glide-dir="=0"></button><button class="glide__bullet" data-glide-dir="=1"></button></div>
										</div>
									</div>
									
									<?php
										$button_1 = get_sub_field ('button_5_1');
										$target_1 = $button_1['target'] ? $button_1['target'] : '_self';

										$button_2 = get_sub_field ('button_5_2');
										$target_2 = $button_2['target'] ? $button_2['target'] : '_self';
									?>
									<a class="m-button m-button--outline m-button--icon" href="<?php echo $button_1['url']; ?>" title="<?php echo $button_1['title']; ?>" target="<?php echo $target_1; ?>"> 
										<span><?php echo $button_1['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									<a class="m-button m-button--icon m-button--green" href="<?php echo $button_2['url']; ?>" title="<?php echo $button_2['title']; ?>" target="<?php echo $target_2; ?>">
										<span><?php echo $button_2['title']; ?></span><svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/></svg>
									</a>
									</div>
									<div class="m-problems__grid__right m-none m-table__cell-ls">
									
									<?php the_image_source (get_sub_field ('image_5')); ?>
									</div>
								</div>
							</section>
							<?php endif; ?>

						</div>
						</main>
					</div>
				</div>
			<?php
			endif;

			/**
			 *
			 */
			if (get_row_layout() == 'text_quote_description') :
				?>
					<div class="m-section m-page__about__what-do-we-do">
						<div class="m-container">
							<h2 class="m-h1 m-title--center" title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h2>
							<blockquote><?php the_sub_field('quote'); ?></blockquote>
							<hr class="m-hr--extra-large m-hr--round">
							<div class="m-page__about__what-do-we-do__grid m-box-table-tm m-box-table--fixed-tm">
								<?php if (get_sub_field('alternate_text_1') || get_sub_field('alternate_description_1')) : ?>
									<div class="m-page__about__what-do-we-do__col m-page__about__what-do-we-do__col--left">
										<h4 class="m-color-light-black" title="<?php the_sub_field('alternate_text_1'); ?>"><?php the_sub_field('alternate_text_1'); ?></h4>
										<?php the_sub_field('alternate_description_1'); ?>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('alternate_text_2') || get_sub_field('alternate_description_2')) : ?>
									<div class="m-page__about__what-do-we-do__col m-page__about__what-do-we-do__col--right">
										<h4 class="m-color-light-black" title="<?php the_sub_field('alternate_text_2'); ?>"><?php the_sub_field('alternate_text_2'); ?></h4>
										<?php the_sub_field('alternate_description_2'); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'parallax_image') :
				?>
					<div class="m-page__about__team" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
			<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'faqs_home') :
				?>
					<div class="m-faqs">
						<div class="m-container">
							<div class="m-faqs__grid m-box-table-tm m-box-table--middle-tm m-box-table--fixed-tm">
							<div class="m-faqs__grid__left">
								<p><?php the_sub_field('higher_title'); ?></p>
								<h2 title="<?php the_sub_field('main_title'); ?>"><?php the_sub_field('main_title'); ?>
								</h2>
							</div>
							<div class="m-faqs__grid__right">
								<div class="m-accordion" id="e-pago-recibos__considerations__agent">
								
								<?php
									if( have_rows('questions') ):
										while ( have_rows('questions') ) : the_row();
								?>
									<div class="m-accordion__box">
										<div class="m-accordion__toggle">
										<h3 class="m-accordion__toggle__title" title="<?php the_sub_field('question'); ?>"><?php the_sub_field('question'); ?>
										</h3>
										</div>
										<div class="m-accordion__content m-content-editor">
										<?php the_sub_field('reply'); ?>
										</div>
									</div>
								<?php
										endwhile;
									else :
									endif;
								?>          

								</div>
								<?php
									$link = get_sub_field('section_button');
									
									if($link): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link_1['target'] ? $link_1['target'] : '_self';
								?>
								<a class="m-button m-button--outline" href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>" target="<?php echo $link_target; ?>"> 
									<span><?php echo esc_html( $link_title ); ?></span>
								</a>
								<?php endif; ?>
							</div>
							</div>
						</div>
					</div>
				<?php
				endif;


			/**
			 *
			 */
			if (get_row_layout() == 'product_banner') :
				?>
					<div class="m-page__section m-page__section--gray m-hero-product" style="background-image: url(<?php the_sub_field('image_background'); ?>)">
						<div class="m-page__section__overlay"></div>
						<div class="m-container">
							<div class="m-hero-product__image">
								<?php
									the_picture_source (array (
										'array_image' => get_sub_field ('image_mobile'),
										'array_image_desktop' => get_sub_field ('image_desktop'),
										'media_query' => 'min-width: 1280px'
									));
								?>
							</div>
							<div class="m-hero-product__text">
							<?php
								$link = get_sub_field ('banner_link');
								$link_target = $link['target'] ? $link['target'] : '_self';
								$anchor = ($link && strrpos ($link['url'], '#') > -1) ? 'm-anchor' : '';
								$link_video = ($link && (strrpos ($link['url'], 'youtube') > -1 || strrpos ($link['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
							?>

							<?php if ($link) : ?>
							<a class="m-hero__button m-button-video m-hover <?php echo $anchor . ' ' . $link_video; ?>" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
								<div class="m-video__icon"><i></i></div><span><?php echo $link['title']; ?></span>
							</a>
							<?php endif; ?>

							<h2 title="Tarjeta de incentivos"><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('description'); ?></p>
							</div>
						</div>
					</div>
				<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'featured_stories') :
				?>
					<div class="m-page__section m-history">
						<h2 class="m-page__section__title" title="<?php the_sub_field('section_title'); ?><"><?php the_sub_field('section_title'); ?></h2>
						<div class="m-container">
							<div class="m-box-table-tm m-box-table--middle-tm">

							<?php
								if( have_rows('stories') ):
									while ( have_rows('stories') ) : the_row();
							?>
								<div class="m-why-ligo__box m-table__cell-tm m-box-table--middle m-history__content__categories__cards">
									<div class="m-history__grid__box">
									<div class="m-history__article">
										<?php
											$link = get_sub_field ('history_link');
											$link_target = ($link && $link['target']) ? $link['target'] : '_self';
										?>

										<?php if ($link) : ?>
											<a class="m-history__article__box" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
										<?php else: ?>
											<div class="m-history__article__box">
										<?php endif; ?>
											<div class="m-table__footer">
												<div class="m-history__article__content">
												<h3 class="m-history__article__title" title="<?php the_sub_field('titulo'); ?>"><?php the_sub_field('titulo'); ?></h3>
												<div class="m-content-editor m-history__article__summary">
													<p><?php the_sub_field('description'); ?></p>

													<?php if ($link) : ?>
													<span> <?php echo $link['title']; ?>
														<svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M1.49845 13.7414C1.15546 14.0844 1.15546 14.6405 1.49845 14.9834C1.84144 15.3264 2.39754 15.3264 2.74053 14.9834L9.57197 8.15201L2.74053 1.32057C2.39754 0.977576 1.84144 0.977576 1.49845 1.32057C1.15546 1.66356 1.15546 2.21966 1.49845 2.56265L7.08781 8.15201L1.49845 13.7414Z" fill="#8317D9" stroke="#8317D9" stroke-width="2"/>
														</svg>
													</span>
													<?php endif; ?>
												</div>
												</div>
											</div>
											<figure class="m-table__header">
												<?php the_image_source (get_sub_field ('image')); ?>
											</figure>
										<?php if ($link) : ?>
											</a>
										<?php else: ?>
											</div>
										<?php endif; ?>
									</div>
									</div>
								</div>
							<?php
									endwhile;
								else :
								endif;
							?>

							</div>
							<div class="m-history__button">
							<?php
								$link_2 = get_sub_field ('section_link');
								$link_target_2 = ($link_2 && $link_2['target']) ? $link_2['target'] : '_self';
								$anchor_2 = ($link_2 && strrpos ($link_2['url'], '#') > -1) ? 'm-anchor' : '';
								$link_video_2 = ($link_2 && (strrpos ($link_2['url'], 'youtube') > -1 || strrpos ($link_2['url'], 'vimeo') > -1)) ? 'm-video-modal' : '';
							?>

							<?php if ($link_2) : ?>
								<a href="<?php echo $link_2['url']; ?>" class="m-button m-button--outline m-button--icon <?php echo $anchor_2 . ' ' . $link_video_2; ?>" title="<?php echo $link_2['title']; ?>" target="<?php echo $link_target_2; ?>">
									<span><?php echo $link_2['title']; ?></span>
								</a>
							<?php endif; ?>
							</div>
						</div>
					</div>
				<?php
			endif;



			/**
			 *
			 */
			if (get_row_layout() == 'side_text_banner') :
				?>
					<div class="m-page__section m-questions">
						<div class="m-circle m--big m--line m--white"></div>
							<div class="m-container">
								<div class="m-questions__text">
									<h2 title="<?php the_sub_field('title'); ?>"><?php the_sub_field('title'); ?></h2>
									<?php
										$link = get_sub_field ('link');
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="m-button m-button--icon m-button--green-white" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>">
										<span><?php echo $link['title']; ?></span>
										<svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.58703 13.5194C1.24833 13.8581 1.24833 14.4073 1.58703 14.746C1.92573 15.0847 2.47487 15.0847 2.81357 14.746L9.55955 8L2.81357 1.25402C2.47487 0.915325 1.92573 0.915325 1.58703 1.25402C1.24833 1.59272 1.24833 2.14187 1.58703 2.48057L7.10647 8L1.58703 13.5194Z" fill="white" stroke="white" stroke-width="2"/>
										</svg>
									</a>
								</div>
							</div>
						<div class="m-questions__image" style="background-image: url(<?php the_sub_field('background_image'); ?>)"></div>
					</div>
				<?php
			endif;

			
			/**
			 *
			 */
			if (get_row_layout() == 'nuestras_soluciones') :
				?>
					<div class="m-page__section m-solutions">
						<div class="m-container">
							<div class="m-solutions__grid m-box-table-ls m-box-table--middle-ls m-box-table--fixed-ls">
							<div class="m-solutions__grid__left">
								<h2 title="Conoce todas nuestras soluciones"><?php the_sub_field('section_title'); ?></h2>
								<div class="m-content-editor">
									<p><?php the_sub_field('content'); ?></p>
								</div>
								<div class="m-solutions__list m-box-inline-block">
								
								<?php
									if( have_rows('solutions') ):
										while ( have_rows('solutions') ) : the_row();
								?>

									<div class="m-solutions__list__item m-box-inline-block m-box-inline-block--middle">
										<?php the_picture_source (array (
											'array_image' => get_sub_field ('icon')
										)); ?>

										<?php
											$link = get_sub_field ('solution');
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<p><a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link_target; ?>" style="color:#5a5a5a;"><?php echo $link['title']; ?></a></p>
									</div>

								<?php
										endwhile;
									else :
									endif;
								?>

								</div>
							</div>
							<div class="m-solutions__grid__right">
								<?php the_picture_source (array (
									'array_image' => get_sub_field ('section_image')
								)); ?>
							</div>
							</div>
						</div>
					</div>
				<?php
			endif;


			/**
			 *
			 */
			if (get_row_layout() == 'product_uses') :
				?>
				<div class="m-page__section m-use-it-to">
					<div class="m-container">
						<div class="m-use-it-to__list">
							<h2 class="m-page__section__title" title="<?php the_sub_field ('title'); ?>"><?php the_sub_field ('title'); ?></h2>
							<p><?php the_sub_field ('subtitle'); ?></p>
						</div>

						<div class="m-use-it-to__list">
							<div class="glide" id="m-use-it-to-slider">
								<div class="glide__track m-use-it-to__list__slider" data-glide-el="track">
									<?php if (have_rows ('list_of_uses')) : ?>
									<ul class="glide__slides">
										<?php while (have_rows ('list_of_uses')) : the_row (); ?>
											<li class="glide__slide">
												<a href="#">
													<?php the_picture_source (array (
														'array_image' => get_sub_field ('use_icon')
													)); ?>
													<p><?php the_sub_field ('use_name'); ?></p>
												</a>
											</li>
										<?php endwhile; ?>
									</ul>
									<?php endif; ?>
								</div>
								<div class="glide__arrows" data-glide-el="controls">
									<button class="glide__arrow glide__arrow--left" data-glide-dir="<">
										<span class="m-icon-svg">
											<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg>
										</span>
									</button>
									<button class="glide__arrow glide__arrow--right" data-glide-dir=">">
										<span class="m-icon-svg">
											<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.963392 0.347473L0.330643 1.03706C-0.0944703 1.50036 -0.0944703 2.25858 0.330643 2.72295L6.08443 8.99356L0.318835 15.277C-0.106278 15.7403 -0.106278 16.4986 0.318835 16.9629L0.951584 17.6525C1.3767 18.1158 2.07243 18.1158 2.49852 17.6525L8.91655 10.658C8.9628 10.6215 9.00708 10.5829 9.04841 10.5379L9.68116 9.84831C10.1063 9.38501 10.1063 8.62679 9.68116 8.16242L2.50935 0.347473C2.08423 -0.115826 1.38851 -0.115826 0.963392 0.347473Z" fill="#747474"/></svg>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			endif;


	endwhile;
endif;