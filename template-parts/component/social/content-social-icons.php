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
$social_icons = $args['social_icons'];
?>
<section id="social-icons" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'short-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
	<div class="row">
		<div class="start:w-full column">
			<ul>
				<?php foreach ($social_icons as $value):  ?>
					<li>
						<a href="<?php echo $value['social_logo']['link']; ?>">
							<div class="icon">
								<i class="fab	<?php echo $value['social_icon']; ?>"></i>
							</div>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
