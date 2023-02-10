<?php
/**
* The template used for displaying Hero Image Slider
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$video_slider_gallery = $args['video_slider_gallery']; ?>
<section id="js-video-slider-gallery" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php foreach ($video_slider_gallery as $value): ?>
						<div class="slide-container swiper-slide">
							<div class="video-aspect">
								<div class="video-container">
									<div id="player" class="js-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?php echo $value['video_id']; ?>"></div>
									<div class="caption"><?php echo $value['headline']; ?></div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
	</div>
</section>
