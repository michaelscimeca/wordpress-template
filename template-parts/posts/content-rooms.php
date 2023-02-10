<!-- <section id="entertainment-detail-post" class="p-medium js-ae" data-threshold=".1">
  <header class="row js-ae">
    <div class="column start:w-full lg:w-2/12">
      <a id="back" href="/entertainment-post">
        < Back</a>
      </div>
      <div class="column start:w-full lg:w-10/12">
        <?php if(get_field('featured') === true):  echo '*** FEATURED ***'; endif; ?>
        <h1><?php the_title(); ?></h1>
        <div id="category">
          <strong>Category</strong> <?php gg_display_category_names(get_field('category'));?>
        </div>
        <time id="date"><strong>Created </strong><?php echo get_the_date(); ?></time>
        <time id="event_date"><strong>Event Date & Time</strong>
          <?php echo gmdate('F j, Y g:ia', strtotime(get_field('event_date'))); ?><div>
          </time>
        </header>

        <?php
        if( have_rows('post_template_layouts') ):
          while ( have_rows('post_template_layouts') ) : the_row(); ?>
          <?php if( get_row_layout() == 'hero_video' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'hero-video',['hero_video' => get_sub_field('hero_video')] ); ?>
          <?php elseif( get_row_layout() == 'hero_video_slider_component' ): ?>
            <?php get_template_part( 'template-parts/component/slider/content', 'hero-video-slider', ['hero_video_slider' => get_sub_field('hero_video_slider')]); ?>
          <?php elseif( get_row_layout() == 'hero_image_slider_component' ): ?>
            <?php get_template_part( 'template-parts/component/slider/content', 'hero-image-slider',['hero_image_slider' => get_sub_field('hero_image_slider')]); ?>
          <?php elseif( get_row_layout() == 'video_list_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'video-list', ['video_list' => get_sub_field('video_list'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'two_up_list' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'two-up-list', ['two_up_list' => get_sub_field('two_up_list_section')]); ?>
          <?php elseif( get_row_layout() == 'icon_card_grid' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'icon-card-grid', ['icon_card_list' => get_sub_field('icon_card_list')]); ?>
          <?php elseif( get_row_layout() == 'two_up_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'two-up', ['two_up' => get_sub_field('two_up_section'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'card_grid' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'card-grid', ['card_list' => get_sub_field('card_list')]); ?>
          <?php elseif( get_row_layout() == 'text_image_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'text-image', ['text_image_section' => get_sub_field('text_image_section')]); ?>
          <?php elseif( get_row_layout() == 'explore_section' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'explore', ['explore' => get_sub_field('explore_section'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'cta_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'cta', ['cta_section' => get_sub_field('cta_section')]); ?>
          <?php elseif( get_row_layout() == 'accordion_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'accordion', ['accordion_list' => get_sub_field('accordion_list'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'soup_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'logo-soup', ['logo_list' => get_sub_field('logo_list'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'marquee_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'marquee', ['marquee-text' => get_sub_field('marquee')]); ?>
          <?php elseif( get_row_layout() == 'quote_sider_component' ): ?>
            <?php get_template_part( 'template-parts/component/slider/content', 'quote-slider', ['quote_slider' => get_sub_field('quote_slider')]); ?>
          <?php elseif( get_row_layout() == 'infinity_scroll_component' ): ?>
            <?php get_template_part( 'template-parts/component/scroll/content', 'scroll-infinity', ['infinity_scroll' => get_sub_field('infinity_scroll')]); ?>
          <?php elseif( get_row_layout() == 'wysiwyg_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'wysiwyg', [ 'wysiwyg' => get_sub_field('wysiwyg'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'video_slider_gallery_component' ): ?>
            <?php get_template_part( 'template-parts/component/slider/content', 'video-slider-gallery', ['video_slider_gallery' => get_sub_field('video_slider_gallery')]); ?>
          <?php elseif( get_row_layout() == 'image_slider_gallery_component' ): ?>
            <?php get_template_part( 'template-parts/component/slider/content', 'image-slider-gallery', ['image_slider_gallery' => get_sub_field('image_slider_gallery')]); ?>
          <?php elseif( get_row_layout() == 'form_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'form', ['form_id' => get_sub_field('form')]); ?>
          <?php elseif( get_row_layout() == 'notification_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'notification', ['notification' => get_sub_field('notification')]); ?>
          <?php elseif( get_row_layout() == 'cookie_notification_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'cookie-notification', ['cookie-notification' => get_sub_field('cookie_notification')]); ?>
          <?php elseif( get_row_layout() == 'price_cards_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'price-cards', ['price_cards' => get_sub_field('price_cards_section'),'header_section' => get_sub_field('header_section')]); ?>
          <?php elseif( get_row_layout() == 'contact_component' ): ?>
            <?php get_template_part( 'template-parts/component/content', 'contact', ['office_location' => get_sub_field('office_location'), 'header_section' => get_sub_field('header_section')]); ?>
          <?php endif;
        endwhile;
      endif;
      ?>

      <?php get_template_part( 'template-parts/posts/content', 'relative-posts', ['postData' => [
        'post-type' => 'entertainment-post',
        'post-number' => '3',
        'category' => get_field('category')
        ]]); ?>
d

</section> -->



<?php if ( have_rows( 'page_grid' ) ) : ?>
	<?php while ( have_rows( 'page_grid' ) ) : the_row(); ?>
		<?php the_sub_field( 'name' ); ?>
		<?php $page_link = get_sub_field( 'page_link' ); ?>
		<?php if ( $page_link ) : ?>
			<?php foreach ( $page_link as $post_ids ) : ?>
				<a href="<?php echo get_permalink( $post_ids ); ?>"><?php echo get_the_title( $post_ids ); ?></a>
			<?php endforeach; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // No rows found ?>
<?php endif; ?>
