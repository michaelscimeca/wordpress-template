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
$price_cards = $args['price_cards'];
?>
<section id="price-cards" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
	<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section,'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>

	<div class="row">
		<div class="column start:w-full js-ae">
			<ul class="price-card-container">
				<?php foreach ($price_cards as $value):  ?>
					<?php foreach ($value as $data):  ?>
						<li>
							<div class="card-box">
								<div class="price-name basic"></div>
								<div class="content">
									<p><?php echo $data['headline']; ?></p>
								</div>
								<ul class="list">
									<li>
										<div class="title">title</div>
										<div class="option">
											<span>
												<i class="fa fa-check-circle" aria-hidden="true"></i>
											</span>
										</div>
									</li>
									<li>
										<div class="title">Title</div>
										<div class="option">
											<span>
												<i class="fa fa-check-circle" aria-hidden="true"></i>
											</span>
										</div>
									</li>
									<li>
										<div class="title">Title</div>
										<div class="option">
											<span>
												<i class="fa fa-check-circle" aria-hidden="true"></i>
											</span>
										</div>
									</li>
								</ul>
								<?php if(!empty($data['buttons'])): ?>
									<?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $data['buttons']]); ?>
								<?php endif; ?>
							</div>
						</li>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
