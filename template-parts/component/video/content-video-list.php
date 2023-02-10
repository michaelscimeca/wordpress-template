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
$video_list = $args['video_list'];
?>
<?php get_template_part( 'template-parts/component/video/content', 'video-list-module-component', ['video_data' => $video_list]); ?>
<section id="js-video-list" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section,'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="start:w-full column">
      <ul>
        <?php foreach ($video_list as $value): ?>
          <li>
            <div class="column-video-img-cont" data-video_id="<?php echo $value['video_id']; ?>" data-video_type="<?php echo strtolower($value['video_type']); ?>">
              <div class="play-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M384 256L0 32V480L384 256z"/></svg>
              </div>
              <img src="<?php echo $value['image_thumbnail']['url']; ?>" alt="<?php echo $value['image_thumbnail']['alt']; ?>">
            </div>
            <div class="column-video-content-cont content-container">
              <?php echo $value['headline']; ?>
              <?php echo $value['paragraph']; ?>
              <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['button']]); ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
