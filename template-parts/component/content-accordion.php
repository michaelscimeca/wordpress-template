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
$spacing = gg_getSpacingValues( $section_spacing );
$header_section = $args[ 'header_section' ];
$accordion_list = $args[ 'accordion_list' ];
$index = 0;
?>
<section id="accordion" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold='0.3'>
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', [ 'header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12' ] ); ?>
  <div class="row">
    <div class="start:w-full column">
      <ul id="js-accordion-list-container">
        <?php if(!empty( $accordion_list)): ?>
          <?php foreach ( $accordion_list as $value ): ?>
            <li data-index="<?php echo $index; ?>">
              <div class="question-container">
                <h4><?php echo $value[ 'question' ]; ?></h4>
                <div class="question-btn"></div>
              </div>
              <div class="js-answer-container"><?php echo $value[ 'answer' ];?></div>
            </li>
            <?php $index++; ?>
          <?php endforeach; ?>
        <? endif; ?>
      </ul>
    </div>
  </div>
</section>
