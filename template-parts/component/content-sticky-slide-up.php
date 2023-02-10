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
$header_section = $args['header_section'];
$spacing = gg_getSpacingValues($section_spacing);
$sticky_sliders = $args['sticky_sliders'];

?>
<section id="sticky-slide-up" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".1">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'medium-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<?php foreach( $sticky_sliders as $value ): ?>
				<div class="services-cards">
					<div class="left-side">
						<img src="<?php echo $value['sticky_slide']['image']; ?>" alt="<?php $value['sticky_slide']['alt']; ?>">
					</div>
					<div class="right-side">
						<div class="side-content txt-logic standard-content <?php gg_contentLogic($value['sticky_slide']['content_component']); ?>">
							<?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $value['sticky_slide']['content_component']]); ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
