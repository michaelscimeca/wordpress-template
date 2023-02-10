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
$marquee_text = $args[ 'marquee-text' ];
?>
<section id="marquee" class="js-ae <?php echo $spacing; ?>" data-scroll-section>
    <div class="scroll-text-container">
        <div class="js-scroll-text">
            <?php foreach ( $marquee_text as $value ): ?>
            <span class='mrq-text'><?php echo $value[ 'text' ];?></span>
            <?php endforeach;?>
        </div>
    </div>
</section>
