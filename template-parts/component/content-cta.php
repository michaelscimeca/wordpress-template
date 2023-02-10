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
$cta_section = $args['cta_section'];

?>
<section id="cta" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <div class="row">
    <div class="start:w-full column txt-logic standard-content <?php gg_contentLogic($cta_section); ?>">
        <?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $cta_section]); ?>
    </div>
  </div>
</section>
