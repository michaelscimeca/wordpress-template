<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>
<?php
$layout = $args['layout'];
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$two_column_content = $args[ "two-column-content" ];
?>
<section id="two-column-content" class="js-ae js-bg-scroll <?php echo $spacing; ?>" data-scroll-section>
  <div class="row">
    <div class="start:w-full md:w-6/12 column">
      <?php echo $two_column_content['left_column_content']; ?>
    </div>
    <div class="start:w-full md:w-6/12 column">
      <?php if($layout === 'One Column Text & One Column Button'): ?>
        <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $two_column_content['buttons']['buttons']]); ?>
      <?php else: ?>
        <?php echo $two_column_content['right_column_content']; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
