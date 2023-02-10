<?php
/**
* The template used for displaying page content
*
* @package normcore
* @since NormCore 2.0
*/
?>
<?php
$section_spacing = $args[ 'section_spacing' ];
$infinity_scroll = $args['infinity_scroll'];
$spacing = gg_getSpacingValues($section_spacing);

 ?>
<section id="js-infinity-scroll" class="js-ae  <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php foreach ( $infinity_scroll as $value ): ?>
    <div class="item"><?php echo $value['title']; ?></div>
  <?php endforeach; ?>
</section>
