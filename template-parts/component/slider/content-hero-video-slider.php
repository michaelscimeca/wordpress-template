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
$spacing = gg_getSpacingValues( $section_spacing );
$hero_video_slider = $args[ 'hero_video_slider' ];
?>
<section id='js-hero-video-slider' class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold='.3'>
    <div class='swiper'>
        <div class='swiper-wrapper'>

            <?php foreach ( $hero_video_slider[ 'slider_video_list' ] as $value ): ?>
            <div class='slide-container swiper-slide'>
                <div class='legible'>
                    <div id='js-player' data-vimeo-id="<?php echo $value['video_id']; ?>" data-vimeo-defer></div>
                </div>

                <?php if ( $hero_video_slider[ 'content_choice' ]  !== 'Single Content' ): ?>
                <div class='content-container'>
                    <div class='row align-center'>
                        <div
                            class="start:w-10/12 column txt-logic standard-content <?php if(empty($hero_video_slider[ 'button' ][ 'buttons' ])): echo 'no-button'; endif; ?> <?php if(empty($value['paragraph'])): echo 'no-paragraph'; endif; ?>">
                            <?php if ( !empty( $value[ 'above_headline' ] ) ): ?><div class='above-headline'><?php echo $value[ 'above_headline' ];
?></div> <?php endif;
?>
                            <?php echo $value[ 'headline' ];
?>
                            <?php echo $value[ 'paragraph' ];
?>
                            <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', [ 'buttons' =>  $hero_video_slider[ 'button' ][ 'buttons' ] ] );
?>
                        </div>
                    </div>
                </div>
                <?php endif;
?>

            </div>
            <?php endforeach;
?>
        </div>
    </div>
    <?php if ( $hero_video_slider[ 'content_choice' ] === 'Single Content' ): ?>
    <div class='content-container single-content'>
        <div class='row align-center'>
            <div
                class="start:w-10/12 column txt-logic standard-content <?php if(empty($hero_video_slider[ 'button' ][ 'buttons' ])): echo 'no-button'; endif; ?> <?php if(empty($hero_video_slider[ 'paragraph' ])): echo 'no-paragraph'; endif; ?>">
                <?php if ( !empty( $hero_video_slider[ 'above_headline' ] ) ): ?><div class='above-headline'><?php echo $hero_video_slider[ 'above_headline' ];
?></div> <?php endif;
?>
                <?php echo $hero_video_slider[ 'headline' ];
?>
                <?php echo $hero_video_slider[ 'paragraph' ];
?>
                <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', [ 'buttons' =>  $hero_video_slider[ 'button' ][ 'buttons' ] ] );
?>
            </div>
        </div>
    </div>
    <?php endif;
?>

</section>