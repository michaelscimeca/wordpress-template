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
$image_slider_gallery_thumbnails = $args['image_slider_gallery_thumbnails'];
?>
<section id="image-slider-gallery-thumbnail" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<div class="swiper js-image-thumbnail">
				<div class="swiper-wrapper">
					<?php foreach ($image_slider_gallery_thumbnails as $value):  ?>
						<?php if(!empty($value['image'])): ?>
							<div class="swiper-slide">
								<img src="<?php echo $value['image']; ?>" />
							</div>
						<?php else: ?>
							<div class="swiper-slide">
								<div data-vimeo-id="<?php echo $value['viemo_id']; ?>" data-vimeo-width="640" id="handstick"></div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
			<div class="swiper js-thumbnail">
				<div class="swiper-wrapper">
					<?php foreach ($image_slider_gallery_thumbnails as $value):  ?>
						<?php if(!empty($value['image'])): ?>
							<div class="swiper-slide">
								<img src="<?php echo $value['image']; ?>" />
							</div>
						<?php else: ?>
							<div class="swiper-slide video">
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</section>
