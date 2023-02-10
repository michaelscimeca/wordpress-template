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
$spacing = gg_getSpacingValues($section_spacing);
$scroll_text = $args[ 'scroll_text' ];
?>
<section id="scroll-text" class="js-ae <?php echo $spacing; ?>">
  <div id="js-scroll-text">
     <div class="text"><?php echo $scroll_text; ?></div>
  </div>
</section>
