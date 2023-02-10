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
$spacing = gg_getSpacingValues( $section_spacing );
$text_image = $args[ 'text_image_section' ];
?>
<section id="text-image" class="js-ae <?php echo $text_image['layout_position']; ?> <?php echo $text_image['content_position']; ?> <?php echo $spacing; ?>"
    data-scroll-section data-threshold='.3'>
    <div class="row">
        <div class="column start:w-full lg:w-1/2 standard-content js-ae cont <?php gg_contentLogic($value['content_component']); ?>">
            <?php get_template_part( 'template-parts/component/comp/content', 'content-component', [ 'content' => $text_image[ 'content_component' ] ] ); ?>
        </div>
        <div class="column start:w-full lg:w-1/2">
            <div class="image-aspect">
                <img src="<?php echo $text_image['img']['url']; ?>" alt="<?php echo $text_image['img']['alt']; ?>">
            </div>
        </div>
    </div>
</section>
