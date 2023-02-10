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
$hero_video = $args['hero_video'];

?>
<section id="js-hero-video" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<div id="player" data-vimeo-id="<?php echo $hero_video['video_id']; ?>" data-vimeo-defer></div>
	<div class="content-container">
		<div class="row">
			<div class="start:w-9/12 md:w-11/12 column txt-logic standard-content <?php gg_contentLogic($hero_video); ?>">
				<?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $hero_video['content_component']]); ?>
			</div>
		</div>
	</div>
</section>
