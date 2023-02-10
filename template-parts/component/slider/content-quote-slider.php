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
$quote_slider = $args['quote_slider'];
?>
<section id="js-quote-slider" class="swiper js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<div class="swiper-wrapper">
		<?php foreach ($quote_slider as $value): ?>
			<div class="slide-container swiper-slide">
				<blockquote>
					<?php if(!empty($value['headline'])): ?><h4><?php echo $value['headline']; ?></h4><?php endif;?>
					<?php if(!empty($value['paragraph'])): ?><p><?php echo gg_character_limit($value['paragraph'],300); ?></p><?php endif;?>
					<?php if(!empty($value['name'])): ?><div class="name"><?php echo $value['name']; ?></div><?php endif;?>
				</blockquote>
			</div>
		<?php endforeach; ?>
	</div>
</section>
