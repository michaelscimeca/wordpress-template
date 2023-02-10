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
$form_id = $args['form_id'];
?>
<section id="form" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<div class="row">
		<div class="start:w-full column">
			<?php echo do_shortcode("[ninja_form id=$form_id;]"); ?>
		</div>
	</div>
</section>
