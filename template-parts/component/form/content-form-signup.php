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
$form_id = $args['form_id'];
?>
<section id="signup-form" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<?php echo do_shortcode("[ninja_form id=$form_id;]"); ?>
		</div>
	</div>
</section>
