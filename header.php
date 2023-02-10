<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, minimal-ui">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="googlebot" content="index, follow">
  <meta name="author" content="">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part( 'template-parts/component/helper/content', 'grid-qa-component'); ?>
  <?php get_template_part( 'template-parts/component/helper/content', 'notes-component'); ?>

  <main id="app" data-scroll-container>
    <div data-scroll-section>
      <nav id="main-nav" data-scroll="" data-scroll-speed="-3" data-scroll-position="top" data-scroll-offset="-50%, 0%">
        <div id="main-logo">

        </div>
        <?php $args = array(
          'menu' => 'Main Nav',
          'theme_location' => 'Main Nav',
          'menu_class' => 'menu'
        );
        wp_nav_menu($args); ?>
        <div id="second-nav">
          <a id="sign-in" href="">Sign In</a>
          <a id="book-a-stay" href="">Book A Stay</a>
        </div>
      </nav>
    </div>
