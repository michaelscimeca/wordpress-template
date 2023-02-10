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
$sticky_right_slideup = $args['sticky_slideup_right'];

?>

<section id="fix-bg-slide" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".1">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'medium-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column sticky-container">
			<div class="column-left">
				<?php foreach ($sticky_right_slideup['section'] as $value): ?>
					<div class="cont-fix-image-mobile">
						<?php if($sticky_right_slideup['add_fixed_background_image'] === 'No'):  ?>
							<div id='stars'></div>
							<div id='stars2'></div>
							<div id='stars3'></div>

							<div class="bg">
								<div class="box"><?php echo $value['right_content']['content']; ?></div>
							</div>
						<?php else: ?>
							<div class="bg" style="background-image: url('<?php echo $value['right_content']['fix_background_image']; ?>')">
								<div class="box"><?php echo $value['right_content']['content']; ?></div>
							</div>
						<?php endif; ?>
					</div>
					<div class="content-section left-content txt-logic standard-content <?php gg_contentLogic($value['content_component']); ?>">
						<?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $value['content_component']]); ?>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="column-right">
				<?php foreach ($sticky_right_slideup['section'] as $value): ?>
					<div class="content-section right-content">
						<div class="box"><?php echo $value['right_content']['content']; ?></div>
					</div>
				<?php endforeach; ?>
				<div class="cont-fix-image">
					<?php if($sticky_right_slideup['add_fixed_background_image'] === 'No'): ?>
						<div id='stars'></div>
						<div id='stars2'></div>
						<div id='stars3'></div>
					<?php else: ?>
						<div class="bg" style="background-image: url('<?php echo $sticky_right_slideup['fix_background_image']; ?>')"></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
