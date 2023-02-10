<?php
/**
* Module Template
*
* @package normcore
* @since NormCore 4.0
*/
?>
<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$video_data = $args['video_data'][0]; ?>
<div id="js-video-list-module-container" class="js-ae <?php echo $spacing; ?>">
  <button id="js-close-btn">x</button>
  <div id="js-video-container"></div>
</div>
