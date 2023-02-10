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
$header_section = $args['header_section'];
$logo_soup = $args['logo_list'];
?>
<?php if(is_array($logo_soup)): ?>
  <section id="logo-soup" class="js-ae <?php echo $spacing; ?>">
    <div class="row">
      <div class="start:w-full md:w-6/12 column">
        <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
      </div>

      <div class="start:w-full md:w-6/12 column">
        <ul id="clients">
          <?php foreach ($logo_soup as $value): ?>
            <li><img src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $value['logo_image']['alt']; ?>"></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
<?php endif; ?>
