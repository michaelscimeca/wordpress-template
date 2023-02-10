<?php
/**
* The template used for displaying page content
*
* @package normcore
* @since NormCore 2.0
*/
?>
<?php $postData = $args['postData']; ?>

<section id="relative-posts" class="p-medium js-ae" data-threshold=".1">
  <header class="row <?php echo $header_layout; ?> <?php echo strtolower($header_content['header_layout']); ?>">
    <div class="start:w-full column">
      <div class="txt-logic <?php gg_contentLogic($header_content); ?>">
        <?php echo $header_content['headline']; ?>
        <h2>Relative Post</h2>
      </div>
    </div>
  </header>

  <?php
  $allCat = [];
  $terms = get_field('category');?>
  <?php foreach ($terms as $category): $category = get_category($category); ?>
    <?php $allCat[] = $category->term_id; ?>
  <?php endforeach; ?>
  <?php
  if($cat) {
    $myArray = explode(',', $cat);
    $storeCat = [];
    foreach ($myArray as &$value):
      $terms = get_term_by('slug', $value, 'category');
      $storeCat[] = $terms->term_id;
    endforeach;
  } ?>
  <?php
  $ACFcat = is_array($storeCat) ? implode(",", $storeCat) : $allCat;
  $loop = new WP_Query(array(
    'post_status' => 'publish',
    'posts_per_page' => $postData['post-number'],
    'post_type' => $postData['post-type'],
    'order' => $order,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'term_id',
        'terms'    => $ACFcat
      ),
    ),
    // 'meta_query' => array(
    //   array(
    //     'key' => 'event_date',
    //     'value' => date_i18n( 'c', date('Ymd') ),
    //     'compare' => '>='
    //   ),
    // ),
  )
);
?>

<?php if ($loop->have_posts()): ?>
  <div class="row">
    <div class="start:w-full column">
      <div id="post-list-results">
        <?php while ( $loop->have_posts() ) :$loop->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <article>
              <div class="content">
                <div class="category">
                  <strong>Category</strong> <?php gg_display_category_names(get_field('category'));?>
              </div>
              <h4><?php the_title(); ?></h4>
              <!-- <p><?php echo gg_character_limit(get_field('event_content')); ?></p> -->
            </div>
          </article>
        </a>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>

</section>
