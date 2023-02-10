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
$text_image_slider = $args['text_image_slider'];

?>
<section id="js-text-image-slider" class="js-ae <?php echo $text_image_slider['layout_position']; ?>  <?php echo $text_image_slider['content_position']; ?> <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="column start:w-full lg:w-1/2 standard-content js-ae cont <?php gg_contentLogic($text_image_slider['content_component']); ?>">
      <?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $text_image_slider['content_component']]); ?>
    </div>
    <div class="start:w-full lg:w-1/2 column img-cont">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (isset($text_image_slider['image_slider']) && !empty($text_image_slider['image_slider'])): ?>
            <?php foreach ($text_image_slider['image_slider'] as $value): ?>
              <div class="slide-container swiper-slide">
                <div class="image-aspect">
                  <div class="image" style="background-image: url('<?php echo $value['image_slider']['image']['url']; ?>')">
                    <?php if(!empty($value['image_slider']['text'])): ?><div class="caption"><?php echo $value['image_slider']['text']; ?></div> <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
