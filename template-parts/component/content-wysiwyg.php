<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$wysiwyg = $args['wysiwyg'];
?>
<section id="wysiwyg" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php if(!empty($header_section['headline'])): ?>
		<header class="row standard-headline <?php echo strtolower($header_section['header_layout']); ?>">
			<div class="start:w-full column">
				<?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section,'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
			</div>
		</header>
	<?php endif; ?>
  <div class="row">
    <div class="start:w-full lg:w-8/12 column">
      <div class="wysiwyg-content-standard">
        <?php echo $wysiwyg; ?>
      </div>
    </div>
  </div>
</section>
