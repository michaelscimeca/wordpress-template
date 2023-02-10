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
$divider = $args[ 'divider' ];
?>
<section id="divider" class="js-ae <?php echo $spacing; ?>" data-scroll-section>
  <div class="row">
    <div class="start:w-full column">
      <?php if($divider['divider_choice']): ?>
        <img src="<?php echo $divider['divider_image']; ?>" alt="divider">
      <? else: ?>
      <hr>
    <? endif;?>
  </div>
</div>
</section>
