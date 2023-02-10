<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php
$section_spacing = $args['section_spacing'];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$post_type_grid = $args['post_type_grid'];
$index = 0;
?>
<section id="grid-of-post" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <div class="row">
    <div class="start:w-full column">
      <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>

      <ul id="grid-cont">
        <?php foreach( $post_type_grid as $postData ):
          $flexible_content = get_field('general_post_template', $postData->ID); ?>
          <li data-index="<?php echo $index; ?>">
            <a href="<?php echo $postData->post_type . '/' . $postData->post_name; ?>">
              <?php foreach( $flexible_content as $row ): ?>
                <?php foreach( $row as $post ):  ?>
                  <div class="image-aspect">
                    <img src="<?php echo $post['hero_image']['background_image']['url'] ?>"/>
                  </div>
                  <div class="standard-card-content js-ae">
                    <time class="date-posted">
                      <?php echo date('M jS, Y g:i a', strtotime($postData->post_date)); ?>
                    </time>
                    <?php echo $post['hero_image']['headline']; ?>
                    <?php echo $post['hero_image']['paragraph']; ?>
                    <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $post['hero_image']['buttons']]); ?>
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>
            </a>
          </li>
          <?php $index++; ?>
        <?php endforeach; ?>
        <?php	wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</section>
