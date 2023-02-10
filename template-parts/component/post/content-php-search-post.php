<?php
/**
* The template used for displaying page content
*
* @package normcore
* @since NormCore 2.0
*/
?>

<section id="entertainment-posts" class="p-medium js-ae" data-threshold=".1">
  <?php
  // Grab seach results if any
  $search = '';
  if($_GET['term'] && !empty($_GET['term'])): $search = $_GET['term']; endif;
  ?>

  <?php
  // Grab seach categories that were selected if any
  if($_GET['category'] && !empty($_GET['category'])):
    $cat = $_GET['category'];
  else:
    $cat = [];
  endif;
  ?>

  <?php
  // Check if Order was choosen
  if($_GET['recent'] && !empty($_GET['recent'])):
    $order = $_GET['recent'] == 'Oldest' ? 'ASC' : 'DESC';
  else:
    $order =  'ASC';
  endif;
  ?>
  <?php

  // Gets ACF CATEGORY; ///NOTE this setup requires you to return the ids of the category in acf setup
  $categories = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false
  ) );

  $allCat = [];
  foreach ($categories as $value) {
    $allCat[] = $value->term_id;
  }
  ?>
  <?php
  if($cat) {
    $myArray = explode(',', $cat);
    $storeCat = [];
    foreach ($myArray as &$value) {
      $terms = get_term_by('slug', $value, 'category');
      $storeCat[] = $terms->term_id;
    }
  }

  $ACFcat = is_array($storeCat) ? implode(",", $storeCat) : $allCat;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $post_type = 'entertainment-post';
  $loop = new WP_Query(array(
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'post_type' => $post_type,
    'paged' => $paged,
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
<!-- featured -->
<div class="row align-center">
  <div class="start:w-full column">
    <h1>Upcoming Entertainment</h1>
    <div id="post-list-container">

      <div id="js-input-search-container">
        <form id="search" role="search" method="get" action="<?php bloginfo('siteurl'); ?>/entertainment/">
          <input id="s" class="search__box" placeholder="Search Entertainment" name="term" type="text"
          value="<?php if($_GET['term']) {echo($_GET['term']);} ?>" name="term" />
          <div class="btn-cont">
            <div class="btn-animation">
              <button type="submit" class="btn search-btn">
                <span>Search</span>
              </button>
            </div>
          </div>
        </form>
      </div>

      <div id="post-info-container">
        <div id="text">
          <span><?php echo $loop->found_posts; ?> Entertainment sorted by</span>
        </div>
        <div id="js-drop-down">
          <strong><span><?php if($_GET['recent']) {echo($_GET['recent']);} else {echo 'Most Recent';} ?></span></strong>
          <ul id="js-recent-post">
            <li>Most Recent</li>
            <li>Oldest</li>
          </ul>
        </div>
      </div>

      <div id="js-filter-container">
        <h4>Filter</h4>

        <form method="get">
          <ul>
            <?php foreach ($categories as $category): $url = get_term_link($category); ?>
              <?php if($category->name !== "Uncategorized"): ?>
                <li>
                  <label>
                    <input for="category" type="checkbox" name="category"
                    value="<?php echo $category->slug ?>" class="label-text">
                    <span class="label-text"><?php echo $category->name; ?></span>
                  </label>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>

          <div id="buttons-container">
            <button id="js-clear-btn">
              <div class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                d="M5.463 4.43301C7.27756 2.86067 9.59899 1.99666 12 2.00001C17.523 2.00001 22 6.47701 22 12C22 14.136 21.33 16.116 20.19 17.74L17 12H20C20.0001 10.4316 19.5392 8.89781 18.6747 7.58927C17.8101 6.28072 16.5799 5.25517 15.1372 4.64013C13.6944 4.0251 12.1027 3.84771 10.56 4.13003C9.0172 4.41234 7.59145 5.14191 6.46 6.22801L5.463 4.43301ZM18.537 19.567C16.7224 21.1393 14.401 22.0034 12 22C6.477 22 2 17.523 2 12C2 9.86401 2.67 7.88401 3.81 6.26001L7 12H4C3.99987 13.5684 4.46075 15.1022 5.32534 16.4108C6.18992 17.7193 7.42007 18.7449 8.86282 19.3599C10.3056 19.9749 11.8973 20.1523 13.44 19.87C14.9828 19.5877 16.4085 18.8581 17.54 17.772L18.537 19.567Z"
                fill="#14546D">
              </path>
            </svg>
          </div>
          <div class="text">Clear</div>
        </button>
        <button id="js-submit-filter" type="submit">
          <div class="icon"></div>
          <div class="text">Search</div>
        </button>
      </div>
    </form>
  </div>

  <?php if ($loop->have_posts()): ?>
    <div id="post-list-results">
      <?php while ( $loop->have_posts() ) :$loop->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <article>
            <div class="content">
              <?php
              $terms = get_field('category');
              foreach ($terms as $category): $category = get_category($category); ?>
              <?php echo $category->name; ?>
            <?php endforeach; ?>
            <h4><?php the_title(); ?></h4>
            <!-- <p><?php echo gg_character_limit(get_field('event_content')); ?></p> -->
          </div>
        </article>
      </a>
    <?php endwhile; ?>
  </div>

  <?php
  $big = 999999999;
  $pag =  paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages,
    'prev_text' => '',
    'next_text' => ''
  ) );
  ?>
  <?php if(!empty($pag)): ?>
    <div class="pagination-container">
      <nav id="pagination" class="js-ae">
        <?php
        $previous_post = get_previous_post();
        $prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
        if($prev_link === null): ?>
          <div class="page-numbers prev dull"></div>
        <?php endif; ?>
        <?php echo $pag; ?>
        <?php
        if(empty($previous_post)): ?>
          <div class="page-numbers next dull"></div>
        <?php endif; ?>
      </nav>
    </div>
  <?php endif;?>
<?php else: ?>
  <div id="empty-container" class="js-ae">
    <div class="content">
      <h4>No Matches Found</h4>
      <p>
        Whoops! Looks like your search didn’t produce any results. Try another search or keep
        scrolling for suggested events.
      </p>
      <div class="keep-exploring">Keep Exploring</div>
    </div>
  </div>
<?php endif;?>
</div>
</div>
</section>
