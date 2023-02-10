<?php
/**
* The template used for displaying Hero Image Slider
*
* @package normcore
* @since NormCore 4.0
*/
?>
<?php
$section_spacing = $args[ 'section_spacing' ];
$header_section = $args[ 'header_section' ];
$spacing = gg_getSpacingValues( $section_spacing );
$room_view = $args[ 'room_view' ];
?>
<section id="room-view-360" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold='.3'>
    <?php get_template_part( 'template-parts/component/comp/content', 'header-component', [ 'header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12' ] ); ?>
    <div class="row">
        <div class="start:w-full column">
            <!-- <div class = 'map' data-img = "<?php the_sub_field('image'); ?>"></div> -->
            <div class="map" data-img='https://paragoncasinoresort.flywheelstaging.com/wp-content/uploads/2021/02/North-King-7-min_1-scaled.jpg'>
            </div>
        </div>
    </div>
</section>