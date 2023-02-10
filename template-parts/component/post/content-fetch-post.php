<?php
/**
* Module Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<section id="js-fetch-post-api" class="p-medium">
  <div class="row align-center">
    <div class="start:w-full column">
      <?php
      $categories = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false
      ) );
      ?>
      <nav id="post-nav">
        <ul id="js-button-category-choice">
          <li class="active" data-choice='All'>ALL</li>
          <?php foreach ( $categories as $category ): ?>
            <?php if ( $category->slug !== 'uncategorized' ): ?>
              <li data-choice='<?php echo $category->term_id; ?>'>
                <?php echo $category->name;
                ?>
              </li>
            <?php endif;
            ?>
          <?php endforeach;
          ?>
        </ul>
        <ul id="js-upcoming-button">
          <li data-choice='Recent'>Recent</li>
        </ul>
      </nav>
      <div id="container-ajxa">
        <svg version='1.1' id='loader' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
        x='0px' y='0px' viewBox='0 0 100 100' enable-background='new 0 0 0 0' xml:space='preserve'>
        <path
        d='M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50'>
        <animateTransform attributeName='transform' attributeType='XML' type='rotate' dur='1s' from='0 50 50'
        to='360 50 50' repeatCount='indefinite' />
      </path>
    </svg>
    <div id="js-post-container"></div>
  </div>
</div>
</div>
</section>
