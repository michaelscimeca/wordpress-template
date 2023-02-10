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
$text_360_video = $args['text_360_video'];
?>
<section id="js-text-360" class="js-ae <?php echo $text_360_video['layout_position']; ?> <?php echo $text_360_video['content_position']; ?> <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="start:w-full lg:w-1/2 column standard-content js-ae cont <?php gg_contentLogic($text_360_video['content_component']); ?>">
      <?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $text_360_video['content_component']]); ?>
    </div>
    <div class="start:w-full lg:w-1/2 column">
      <div id="video-360" data-vimeo-id="<?php echo $text_360_video['viemo_id']; ?>" data-vimeo-width="640"></div>
    </div>
  </div>
</section>
