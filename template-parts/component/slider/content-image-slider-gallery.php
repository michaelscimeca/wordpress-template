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
$image_slider_gallery = $args['image_slider_gallery']; ?>
<section id="js-image-slider-gallery" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php foreach ($image_slider_gallery as $value):  ?>
						<div class="swiper-slide">
							<div class="image-aspect">
								<div class="bg-image" style="background-image: url('<?php echo $value['image']['url'] ;?>')">
									<?php if(!empty($value['headline'])): ?><div class="caption"><?php echo $value['headline']; ?></div> <?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>
