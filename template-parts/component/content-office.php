<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHwfZIFcW_UU6FtQIJHpnmGj7AD61Onw0"></script>

<!-- In order use of the Google Maps JavaScript API, you must first register a valid API key. To obtain an API key, please follow Google’s Get an API Key instructions. The Google Maps field requires the following APIs; Maps JavaScript API, Geocoding API and Places API. -->
<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$contact_section = $args['office_location'];
?>
<section id="contact" class="<?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>

  <?php foreach ($contact_section  as $value): ?>
    <div class="row office-container">
      <div class="start:w-full lg:w-3/12 column js-ae">
          <div class="location">
            <div class="office-name"><?php echo $value['offices']['office_name']; ?></div>
            <div class="office-hours">Hours: <?php echo $value['offices']['hours']; ?></div>
            <div class="office-phone">Phone: <?php echo $value['offices']['phone_number']; ?></div>
            <div class="office-email">Email: <a href="mailto:<?php echo $value['offices']['email']; ?>"><?php echo $value['offices']['email_text']; ?></a></div>
            <?php $place =
            $value['offices']['office_location']['street_number']  . ' ' .
            $value['offices']['office_location']['street_name_short'] . '<br/>' .
            $value['offices']['office_location']['city'] . ', ' .
            $value['offices']['office_location']['state_short'] .' ' .
            $value['offices']['office_location']['post_code']; ?>
            <div class="address"><?php echo $place; ?></div>
            <div class="direction-link"><a href="https://www.google.com/maps/dir//<?php echo $value['offices']['office_location']['address']; ?>" target="_blank">Directions</a></div>
          </div>
      </div>

        <div class="start:w-full lg:w-9/12 column js-ae">
          <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="<?php echo esc_attr($value['offices']['office_location']['lat']); ?>" data-lng="<?php echo esc_attr($value['offices']['office_location']['lng']); ?>"></div>
          </div>
        </div>
    </div>
  <?php endforeach; ?>

</section>
