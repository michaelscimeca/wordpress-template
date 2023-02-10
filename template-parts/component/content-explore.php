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
$explore = $args['explore'];
?>
<section id="js-explore" class="js-ae <?php echo $spacing; ?>" data-scroll-section>
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', [
		'header_content' => $header_section,
		'header_layout' => 'post-headline',
		'header_column' => 'start:w-full lg:w-8/12'
	]); ?>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach( $explore as $postData ): ?>
				<?php $link = get_permalink($postData->ID) ?>
				<?php	$flexible_content = get_field('general_post_template', $postData->ID); ?>
				<?php foreach( $flexible_content as $row ): ?>
					<?php foreach( $row as $post ):  ?>
						<div class="swiper-slide js-ae">
							<a href="<?php echo $link; ?>">
								<div class="image-aspect">
									<img src="<?php echo $post['hero_image']['background_image']['url'] ?>"/>
								</div>
								<div class="standard-card-content js-ae">
									<time class="date-posted">
										<?php echo date('M jS, Y g:i a', strtotime($postData->post_date)); ?>
									</time>
									<?php echo $post['hero_image']['headline']; ?>
									<?php echo $post['hero_image']['paragraph']; ?>
									<?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $post['hero_image']['buttons']]); ?>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
				<?php	wp_reset_postdata(); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
