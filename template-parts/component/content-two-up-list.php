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
$two_up_list = $args['two_up_list']; ?>
<section id="two-up-list" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $two_up_list['header_section'], 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="column start:w-full js-ae">
      <ul>
        <?php foreach ($two_up_list['two_up_list_section'] as $value): ?>
          <li>
            <?php echo $value['paragraph']; ?>
            <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['buttons']]); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
