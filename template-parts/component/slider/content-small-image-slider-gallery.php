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
$small_image_slider_gallery = $args['small_image_slider_gallery'];
?>
<section id="js-small-image-slider-gallery" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3" data-scroll-speed="-3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<div class="swiper js-image-thumbnail">
				<div class="swiper-wrapper">
					<?php foreach ($small_image_slider_gallery as $value):  ?>
						<div class="swiper-slide">
								<div class="image-aspect">
									<div class="bg-image" style="background-image: url('<?php echo $value['image']['url'] ;?>')"></div>
								</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</section>
