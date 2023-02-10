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
$card_grid = $args['icon_card_list'];
$index = 0;
?>
<section id="icon-card-grid" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <div class="row">
    <div class="start:w-full column">
      <ul id="icon-card-grid-cont">
        <?php foreach ($card_grid as $value): ?>
          <li data-index="<?php echo $index; ?>">
            <div class="card-cont">
              <div class="image-aspect">
                <img src="<?php echo $value['card']['card_image']['url']; ?>" alt="<?php echo $value['card']['card_image']['alt']; ?>" />
              </div>
              <div class="standard-card-content js-ae">
               <?php echo $value['card']['card_headline']; ?>
                <?php echo $value['card']['card_text']; ?>
                <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['card']['buttons']]); ?>
              </div>
            </div>
          </li>
          <?php $index++; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
