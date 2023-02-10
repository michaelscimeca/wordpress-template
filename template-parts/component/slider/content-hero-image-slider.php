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
$hero_image_slider = $args['hero_image_slider'];
?>
<section id="hero-image-slider" class="js-ae <?php echo $spacing; ?>" data-scroll-section>
  <div id="js-home-image-slider" class="swiper">
    <div class="swiper-wrapper">
      <?php foreach ($hero_image_slider['hero_image_slider']['slider_images_list'] as $value): ?>

        <div class="slide-container swiper-slide">
          <div class="bg-image" style="background-image: url('<?php echo $value['hero_image'] ;?>')"></div>
          <?php if($hero_image_slider['content_choice']  !== 'Single Content'): ?>
              <div class="content-container">
                <div class="row align-center">
                  <div class="start:w-10/12 column txt-logic standard-content <?php if(empty($value['button']['buttons'])): echo 'no-button'; endif; ?> <?php if(empty($value['paragraph'])): echo 'no-paragraph'; endif; ?>">
                    <?php if(!empty($hero_image_slider['above_headline'])): ?><div class="above-headline"><?php echo $hero_image_slider['above_headline']; ?></div> <?php endif; ?>
                    <?php echo $value['headline']; ?>
                    <?php echo $value['paragraph']; ?>
                    <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['button']['buttons']]); ?>
                  </div>
                </div>
              </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
  <?php if($hero_image_slider['content_choice'] === 'Single Content'): ?>
    <div class="content-container single-content standard-card-content">
      <div class="row align-center">
        <div class="start:w-10/12 column <?php if(empty($hero_image_slider['button']['buttons'])): echo 'no-button'; endif; ?> <?php if(empty($hero_image_slider['paragraph'])): echo 'no-paragraph'; endif; ?>">
          <?php if(!empty($hero_image_slider['above_headline'])): ?><div class="above-headline"><?php echo $hero_image_slider['above_headline']; ?></div> <?php endif; ?>
          <?php echo $hero_image_slider['headline']; ?>
          <?php echo $hero_image_slider['paragraph']; ?>
          <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $hero_image_slider['button']['buttons']]); ?>
        </div>
      </div>
    </div>
  <?php endif;?>
</section>
