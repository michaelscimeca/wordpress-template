<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php $content = $args[ 'content' ];?>

<?php if ( !empty( $content[ 'above_headline' ] ) ): ?><div class="above-headline"><?php echo $content[ 'above_headline' ];?></div> <?php endif;?>
<?php echo $content[ 'headline' ];?>
<?php echo $content[ 'paragraph' ];?>

<?php get_template_part( 'template-parts/component/comp/content', 'btn-component', [ 'buttons' => $content[ 'buttons' ] ] );
?>
