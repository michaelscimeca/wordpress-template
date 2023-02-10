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
$single_column_text = $args[ "single-column-text" ];
?>
<section id="single-column-text" class="js-ae <?php echo $spacing; ?>">
    <div class="row">
       <div class="start:w-full md:w-8/12 column">
          <?php echo $single_column_text; ?>
        </div>
    </div>
</section>
