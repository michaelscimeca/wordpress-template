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
$two_up = $args['two_up'];


?>
<section id="two-up" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $two_up['header_section'],'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <?php foreach ($two_up['two_up'] as $value):  ?>
      <div class="column start:w-full lg:w-1/2 standard-content js-ae <?php gg_contentLogic($value); ?>">
        <img src="<?php echo $value['img']['url']; ?>" alt="<?php echo $value['img']['alt']; ?>">
        <?php if(!empty($value['above_headline'])): ?><div class="above-headline"><?php echo $value['above_headline']; ?></div> <?php endif; ?>
        <?php echo $value['headline']; ?>
        <?php if(!empty($value['paragraph'])): ?><?php echo $value['paragraph']; ?><?php endif; ?>
        <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['buttons']]); ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
