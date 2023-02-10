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
$image = $args['image'];
?>
<section id="image" class="js-ae <?php echo $spacing; ?>"data-threshold=".3">
	<div class="row">
		<div class="start:w-full column">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</section>
