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
$hero_text = $args['hero_text'];

?>
<section id="hero-text" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <div class="row">
    <div class="start:w-full lg:w-8/12 column txt-logic standard-content <?php gg_contentLogic($hero_text); ?>">
      <?php get_template_part( 'template-parts/component/comp/content', 'content-component', ['content' => $hero_text]); ?>
      <?php get_template_part( 'template-parts/component/util/content', 'magnetic-example', [ 'single-column-text' => get_sub_field( 'single_column_content' ),'section_spacing' => get_sub_field( 'section_spacing' ) ] ); ?>
    </div>
  </div>
</section>
