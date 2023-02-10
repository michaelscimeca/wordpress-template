<?php
/**
* Header Section Template
*
* @package normcore
* @since NormCore 4.0
*/
?>
<?php
$header_layout = $args['header_layout'];
$header_style = $args['header_column'];
$header_content = $args['header_content'];
?>
<?php if(!empty($header_content['headline'])): ?>
  <header class="row <?php echo $header_layout; ?> <?php echo strtolower($header_content['header_layout']); ?>">
    <div class="<?php echo $header_style; ?> column">
      <div class="txt-logic <?php gg_contentLogic($header_content); ?>">
      	<?php if(!empty($header_content['above_headline'])): ?><div class="above-headline"><?php echo $header_content['above_headline']; ?></div> <?php endif; ?>
        <?php echo $header_content['headline']; ?>
      	<?php if(!empty($header_content['paragraph'])): ?> <?php echo $header_content['paragraph']; ?><?php endif; ?>
      </div>
      	<?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $header_content['buttons']]); ?>
    </div>
  </header>
<?php endif; ?>
