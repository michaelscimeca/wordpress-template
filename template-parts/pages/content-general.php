<?php
/**
* The template used for displaying page content
*
* @package normcore
* @since NormCore 4.0
*/
?>
<!-- <?php get_template_part( 'template-parts/component/grid/content', 'post-grid-card-manual', ['section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] ); ?> -->

<?php
if ( have_rows( 'general_template_layouts' ) ):
while ( have_rows( 'general_template_layouts' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'hero_video_component' ): ?>
  <?php get_template_part( 'template-parts/component/hero/content', 'hero-video', [ 'hero_video' => get_sub_field( 'hero_video' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'hero_text_component' ): ?>
  <?php get_template_part( 'template-parts/component/hero/content', 'hero-text', [ 'hero_text' => get_sub_field( 'content_component' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'hero_image_component' ): ?>
  <?php get_template_part( 'template-parts/component/hero/content', 'hero-image', [ 'hero_image' => get_sub_field( 'hero_image' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'hero_video_slider_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'hero-video-slider', [ 'hero_video_slider' => get_sub_field( 'hero_video_slider' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'hero_image_slider_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'hero-image-slider', [ 'hero_image_slider' => get_sub_field( 'hero_image_slider' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'sticky_slide_up_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'sticky-right-slideup', [ 'sticky_slideup_right' => get_sub_field( 'content_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'video_list_component' ): ?>
  <?php get_template_part( 'template-parts/component/video/content', 'video-list', [ 'video_list' => get_sub_field( 'video_list' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'social_icons_component' ): ?>
  <?php get_template_part( 'template-parts/component/social/content', 'social-icons', [ 'social_icons' => get_sub_field( 'social_icons' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'two_up_list_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'two-up-list', [ 'two_up_list' => get_sub_field( 'two_up_list_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'post_type_grid_component' ): ?>
  <?php get_template_part( 'template-parts/component/grid/content', 'grid-of-post', [ 'post_type_grid' => get_sub_field( 'post_type_grid' ), 'header_section' => get_sub_field( 'header_section' ), 'post' => get_sub_field( 'post' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'icon_card_grid_component' ): ?>
  <?php get_template_part( 'template-parts/component/grid/content', 'grid-icon-card', [ 'icon_card_list' => get_sub_field( 'icon_card_list' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'two_up_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'two-up', [ 'two_up' => get_sub_field( 'two_up_section' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'image_slider_gallery_thumbnails_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'image-slider-gallery-thumbnails', [ 'image_slider_gallery_thumbnails' => get_sub_field( 'image_slider_gallery_thumbnails' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'page-grid_component' ): ?>
  <?php get_template_part( 'template-parts/component/grid/content', 'page-grid', ['page_link' => get_sub_field( 'page_link' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] ); ?>
<?php elseif ( get_row_layout() == 'post-grid_component' ): ?>
  <?php get_template_part( 'template-parts/component/grid/content', 'post-grid-card', ['choosen_post' => get_sub_field( 'choosen_post' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] ); ?>
<?php elseif ( get_row_layout() == 'card_grid_component' ): ?>
  <?php get_template_part( 'template-parts/component/grid/content', 'grid-card', [ 'card_list' => get_sub_field( 'card_list' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );?>
<?php elseif ( get_row_layout() == 'text_image_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'text-image', [ 'text_image_section' => get_sub_field( 'text_image_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] ); ?>
<?php elseif ( get_row_layout() == 'text_image_slider_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'text-image-slider', [ 'text_image_slider' => get_sub_field( 'text_image_slider' ), 'section_spacing' => get_sub_field( 'section_spacing' ),'header_section' => get_sub_field( 'header_section' )  ] ); ?>
<?php elseif ( get_row_layout() == 'text_360_video_component' ): ?>
  <?php get_template_part( 'template-parts/component/video/content', 'text-360-video', ['text_360_video' => get_sub_field( 'text_360_video' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] ); ?>
<?php elseif ( get_row_layout() == 'explore_section_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'explore', [ 'explore' => get_sub_field( 'explore_post' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'cta_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'cta', [ 'cta_section' => get_sub_field( 'content_component' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'accordion_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'accordion', [ 'accordion_list' => get_sub_field( 'accordion_list' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'soup_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'logo-soup', [ 'logo_list' => get_sub_field( 'logo_list' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'marquee_component' ): ?>
  <?php get_template_part( 'template-parts/component/util/content', 'marquee', [ 'marquee-text' => get_sub_field( 'marquee' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );?>
<?php elseif ( get_row_layout() == 'quote_sider_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'quote-slider', [ 'quote_slider' => get_sub_field( 'quote_slider' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'infinity_scroll_component' ): ?>
  <?php get_template_part( 'template-parts/component/scroll/content', 'scroll-infinity', [ 'infinity_scroll' => get_sub_field( 'infinity_scroll' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'image_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'full-image', [ 'image' => get_sub_field( 'image' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'wysiwyg_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'wysiwyg', [ 'wysiwyg' => get_sub_field( 'wysiwyg' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'video_slider_gallery_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'video-slider-gallery', [ 'video_slider_gallery' => get_sub_field( 'video_slider_gallery' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'image_slider_gallery_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'image-slider-gallery', [ 'header_section' => get_sub_field( 'header_section' ), 'image_slider_gallery' => get_sub_field( 'image_slider_gallery' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'small_image_slider_gallery_component' ): ?>
  <?php get_template_part( 'template-parts/component/slider/content', 'small-image-slider-gallery', [ 'small_image_slider_gallery' => get_sub_field( 'small_image_slider_gallery' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'form_component' ): ?>
  <?php get_template_part( 'template-parts/component/form/content', 'form', [ 'form_id' => get_sub_field( 'form' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'form_signup_component' ): ?>
  <?php get_template_part( 'template-parts/component/form/content', 'form-signup', [ 'form_id' => get_sub_field( 'form_id' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'twitter_feed_component' ): ?>
  <?php get_template_part( 'template-parts/component/social/content', 'twitter-feed', [ 'feed_id' => get_sub_field( 'feed_id' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'instagram_feed_component' ): ?>
  <?php get_template_part( 'template-parts/component/social/content', 'instagram-feed', [ 'feed_id' => get_sub_field( 'feed_id' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'header_section' => get_sub_field( 'header_section' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'notification_component' ): ?>
  <?php get_template_part( 'template-parts/component/util/content', 'notification', [ 'notification' => get_sub_field( 'notification' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'cookie_notification_component' ): ?>
  <?php get_template_part( 'template-parts/component/util/content', 'cookie-notification', [ 'cookie-notification' => get_sub_field( 'cookie_notification' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'two_column_content_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'two-column-content', [ 'two-column-content' => get_sub_field( 'two-column-content' ), 'section_spacing' => get_sub_field( 'section_spacing' ), 'layout' => get_sub_field( 'layout' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'single_column_text_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'single-column-text', [ 'single-column-text' => get_sub_field( 'single_column_content' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'price_cards_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'price-cards', [ 'price_cards' => get_sub_field( 'price_cards_section' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'sticky_slider_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'sticky-slide-up', [ 'sticky_sliders' => get_sub_field( 'sticky_sliders' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'text_scroll_component' ): ?>
  <?php get_template_part( 'template-parts/component/util/content', 'scroll-text', [ 'scroll_text' => get_sub_field( 'scroll_text' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'divider_component' ): ?>
  <?php get_template_part( 'template-parts/component/util/content', 'divider', [ 'section_spacing' => get_sub_field( 'section_spacing' ), 'divider' => get_sub_field( 'divider' ) ] );
  ?>
<?php elseif ( get_row_layout() == 'contact_component' ): ?>
  <?php get_template_part( 'template-parts/component/content', 'office', [ 'office_location' => get_sub_field( 'office_location' ), 'header_section' => get_sub_field( 'header_section' ), 'section_spacing' => get_sub_field( 'section_spacing' ) ] );
  ?>
<?php endif;
endwhile; ?>
<?php else: ?>
<section id="layout-missing">
 <div id="missing-cont">Oops... Something Went Wrong. <br/>Make sure you added components to this page.</div>
</section>
<?php endif;
?>
