# NormCore 4.0 - A basic Wordpress theme template

## Quick start (if already installed locally)
In your terminal cd into the directory and run the following commands:
- `nvm use`
- `yarn install`
- `yarn run webpack`

# Wordpress Template

Css Built with Tailwind6
### Helpers
- Show Visual Grid S+G
- Animation Removal R+A
- Todo List S+T



## Conditional Class to Check what Browser and if Touchable

```
.is_ie (Might be outdated)
.is_chrome
.is_ff
.is_safari
.is_ios8
.is_android
.touchevents
.no-touchevents
```

How to use

```
.some-section {
    color: blue
    // If FireFox
   .is_ff & {
        color: red;
    }
    // If Safari
    .is_safari & {
        color: green;
    }
}

```



### Grid
The Grid is setup in global with a variable called `$max-grid-width`.(Until I figure out how to process the theme variables from the tailwing.congfig.js)
You can see visually the grid by pressing keys `S + G`
The light frame work just holds a row and column class and can be found in the `global/settings/grid-framework.css file` (Needs to switch over to theme variables until then they can be foundin in the global.scss file at the top)

```sh
.row {
  @apply flex justify-center flex-wrap mx-auto;
  @include grid-width;

  &.align-center {
    @apply justify-center;
  }

  > .column {
    // @apply pr-2 pl-2;
    padding:  0 calc($gutter / 2);

    @screen md {
      // @apply pr-4 pl-4;
      padding: 0 calc(($gutter *  2) / 2);
    }
  }
}

```

# Section Classes
```
  // Remove when Start Project
  &:nth-child(even) {
    @apply bg-gray-200;
  }
  &:nth-child(odd) {
    @apply bg-gray-100;
  }
```
### Padding & Margin Sections
``` sh
section {
  &.p-standard {
    @apply pt-4 pb-4;
  }
  &.p-small {
    @apply pt-2 pb-2;
  }
  &.p-medium {
    @apply pt-6 pb-6;
  }
  &.p-large {
    @apply pt-10 pb-10;
  }
  &.p-xlarge {
    @apply pt-12 pb-12;
  }
  &.m-standard {
    @apply mt-4 mb-4;
  }
  &.m-small {
    @apply mt-2 mb-2;
  }
  &.m-medium {
    @apply mt-6 mb-6;
  }
  &.m-large {
    @apply mt-10 mb-10;
  }
  &.m-xlarge {
    @apply mt-12 mb-12;
  }
  &.p-unique-section {
    @apply pt-12 pb-8;
  }
  &.m-unique-section {
    @apply mt-12 mb-8;
  }
}
```
#### Example
```sh
<section id="Name-Section" class="p-standard">
    <div class="row">
        <div class="start:w-full column"></div> // Full
    </div>
</section>

<section id="Name-Section" class="m-standard">
    <div class="row">
        <div class="start:w-full md:w-6/12 column"></div> // Half
        <div class="start:w-full md:w-6/12 column"></div> // Half
    </div>
</section>
```

# Header Classes

Header component has a preconfig classes `left` `text-button` that changes the layout of the header swell as already setup in the ACFs for any Header section compontent.

in the header component where you will added your header content and header layout of choice below `stand-headline` was choosen.

``` sh
<?php
get_template_part( 'template-parts/component/comp/content', 'header-component',
'header_content' => $two_up_list['header_section'],
'header_layout' => 'standard-headline']);
?>


```
```sh
.standard-headline {
  @apply mb-12 text-center;

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    // @apply m-0 mb-1;
  }

  p {
    @apply mb-4;

    &:last-child {
      // @apply mb-0;
    }
  }

  .btn {
    @apply w-full;
  }
// CMS Config
  &.left {
    .column {
      @apply flex flex-col items-start content-start text-left;
    }
  }
// CMS Config
  &.text-button {
    @apply text-left;

    .column {
      @apply flex flex-row items-end justify-end flex-nowrap;
      .txt-logic {
        @apply pr-4;
        p {
          @apply m-0;
        }
      }
    }
  }
}
```
### Content Group Classes
We wrap all content in a class container that we can apple classes on control the children content with in. Here You can see we have `&.no-paragraph`  `&.no-button` which detects if paragraph or button exists and change the layout accordly.
```sh
.txt-logic {
  &.no-paragraph {
   h1,
   h2,
   h3,
   h4,
   h5,
   h6 {
     @apply mb-0;
   }
  }

  &.no-button {
    p {
      &:last-child {
        @apply mb-0;
      }
    }
  }
}

```

```sh
<header class="row standard-headline left">
    <div class="start:w-full column">
      <div class="txt-logic no-paragraph">
         <h2>Headline Explore</h2>
      	 <p>What is a Fake Won be pronouncem like they would be real words.</p>
      </div>
       <div class="btn-across">
	        <div class="btn-animation">
				<button class="btn primary default xlarge module-1">
				  <span>Modlue 1</span>
			    </button>
			</div>
		</div>
    </div>
  </header>
```
### Btn Classes
  The `.btn-across` class is created to handle if you have more then one button added in the btn compontent.
  The `.btn` class has hover effects, so we created a partent class called `.btn-animation` solo to handle animtion and not effct hover transitoins on the button

 `.btn` classes have a set of mixins, so we can attached them if we have to use plugin classes. The Btn class holds styling class attched such `.xlarge`

 The `.module-1` class is setup in the ACF to activate a module. The base html/php/js/scss/CMS-ACF is setup for this you will change the name to fit your needs.

```sh
@mixin defualt-btn {
  @apply h-6 pr-5 pl-5;
 }

 @mixin xlarge-btn {
   @apply h-8 pr-7 pl-7;
 }

 @mixin large-btn {
   @apply h-7 pr-6 pl-6;
 }

 @mixin medium-btn {
   @apply h-6 pr-5 pl-5;
 }

 @mixin small-btn {
   @apply h-5 pr-4 pl-4;
 }

 @mixin cta-btn {
   @apply h-8 pr-9 pl-9;
 }

.btn-across {
}

.btn-animation {
  @apply inline-block;
}

@mixin btn {
  @apply flex flex-row content-center justify-center items-center bg-gray-900 text-white whitespace-nowrap cursor-pointer no-underline text-center;

  span,
  .btn-text {
    @apply whitespace-nowrap text-inherit no-underline;
  }

  // Bg Color
  &.primary {
    @apply bg-gray-900 hover:bg-second-primary;
  }
  &.second-primary {
    @apply bg-second-primary hover:bg-secondary;
  }
  &.secondary {
    @apply bg-secondary hover:bg-second-third;
  }
  &.second-secondary {
    @apply bg-second-secondary hover:bg-primary;
  }

  // Btn Size
  &.default  {
    @include defualt-btn;
  }

  &.xlarge {
    @include xlarge-btn;
  }

  &.large {
    @include large-btn;
  }

  &.medium {
    @include medium-btn;
  }

  &.small {
    @include small-btn;
  }

  &.cta {
    @include cta-btn;
  }
 }

.btn,
.btn a {
  @include btn;
}

```


```sh
<div class="btn-across">
	<div class="btn-animation">
		<button class="btn primary default xlarge module-1">
		    <span>Module 1</span>
		</button>
	</div>
</div>
```
### Font Sizing reponsive Setup
The font setup is to scale down with the wndow until you hit tablet in which you start using media querys to achive smaller screen size. There are two css variables that control this`$fontScaleStop: 1025;` & `$fontScaleBreak: 1700;` Here the fonts will scale responsively from 1700px to 1100px.

### Examle
Below the font will be `40px` until you start going below 1700px in window size and will be `30px` at 1100px window size. after something like 1100 your going to want to set up a meida query with a fix size. I.E `font-size: em(18);`
```sh
    h1 {
        font-size: em(18);
        /// lg stands for break after 1025
        @screen lg {
           font-size: r-clamp(rem(30), rem(40), rem($fontScaleStop), rem($fontScaleBreak));
        }
    }

```

### Standard Defualt Headlines & Body Copy

```sh
@mixin Headline {
  @apply font-headline font-normal tracking-normal font-bold;
}

@mixin Body-Copy {
  @apply font-paragraph font-normal tracking-normal;
}
```

### Font Sizing
The Header tags have a map setup to handle big to small headers with a scss map

```sh
$h1: (
"smallest-font": rem(40),
"largest-font": rem(58),
"smallest-line-height": rem(40),
"largest-line-height": rem(80)
);

$h2: (
"smallest-font": rem(36),
"largest-font": rem(50),
"smallest-line-height": rem(44),
"largest-line-height": rem(72)
);

@mixin h1 {
  @include Headline;
  font-size: r-clamp(map-get($h1, smallest-font), map-get($h1, largest-font), rem($fontScaleStop), rem($fontScaleBreak));
  line-height: r-clamp(map-get($h1, smallest-line-height), map-get($h1, largest-line-height),rem($fontScaleStop), rem($fontScaleBreak));
}

@mixin h2 {
  @include Headline;
  font-size: r-clamp(map-get($h2, smallest-font), map-get($h2, largest-font), rem($fontScaleStop), rem($fontScaleBreak));
  line-height: r-clamp(map-get($h2, smallest-line-height), map-get($h2, largest-line-height),rem($fontScaleStop), rem($fontScaleBreak));
}

```

## Global Page Nav
*Applies to global menus and footer navs*

The user should be able to add and reorder navigation menus as they see fit.
Navigation should be customized in the Menus section of the Customize tab.
To pull in a menu place the following on any template.

*Ideally global navs should be place in the header.php and/or the footer.php template files*

```php
<?php
    // 'Main Nav' is the name of the menu created in the customize tab
    $args = array('menu' => 'Main Nav');
    wp_nav_menu($args);
?>
```
## Custom Post Types
There is a special function included in the `rsq-functions.php` file in the theme library, which can loop through an array to easily create Custom Post Types.
All you need to do in `functions.php` is add your post details to the `$postTypes` array.

### Required
`'name'` `'singular'` `'slug'`

### Optional
`'desc'` `'position'` `'public'` `'show_ui'` `'show_in_rest'` `'has_archive'` `'show_in_menu'` `'exclude_from_search'` `'capability_type'` `'map_meta_cap'` `'hierarchical'` `'query_var'`


```
<?php
$postTypes = array(
    array(
        'name' => 'Movies', //required
        'singular' => 'Movie', //required
        'slug' => 'movies' //required
    ),
    array(
        'name' => 'Employees', //required
        'singular' => 'Employee', //required
        'slug' => 'employees', //required
        'desc' => 'Description of this post type.', //optional
        'position' => 5 //optional
    )
);
?>
```

When creating a new post type ensure that there are `single-{slug}.php` and `archive-{slug}.php` template files for each new post type.

*Note: after creating a new post type make sure to flush the permalinks, but going to the Permalinks panel in the admin and resaving the existing settings.*

## Sub Templates
The `template-parts` folder contains the templates for specific content types or post formats. You will notice that these templates are used inside any of the content loops on the site.

```
<?php
    //Will use the `content-page.php` template for any of the content rendered from the loop.
    get_template_part( 'template-parts/content', 'page' );
?>
```


```
<?php
    //Will use the post format designated on a post to dictate which template will be used.
    get_template_part( 'template-parts/content', get_post_format() );
?>
```


## Post Formats
There might be a situation where you will need a different layout based on the type of content within a post. This is where post formats can be helpful. To activate a post format, uncomment the needed format in `functions.php`.
```
<?php
    add_theme_support( 'post-formats', array(
    // 	'aside',
    	'image',
    // 	'video',
    // 	'quote',
    // 	'link',
    // 	'gallery',
    // 	'status',
    // 	'audio',
    // 	'chat',
    ) );
?>
```
To ensure that posts with custom formats use the templates you created for them use
```
<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
```
in your loops.

These templates should be placed in the `template-parts` folder and named like so `content-{format}.php`. For example a post format of `image` will use the `content-image.php` template.

## Page Templates
To create a custom template for a Page all you need to do is create a new page template file following this naming convention: `page_{template-name}.php`

In the comment header of the template include:

```
<?php
    /* Template Name: About page */
?>
```

`About page` will be what shows up in the Template drop down on the Page editor.

## Plugins
The base plugins we use are:
- Advanced Custom Fields Pro
- Yoast SEO

## Styling the Login
Custom styles for the login page are located at `library/admin-style/admin-login.scss`. This file compiles down to `admin-login.css` located on the root.

The stylesheet is used only on the login page. This is executed in `library/functions/normcore-admin-style-login.php`.

Any images referenced in the stylesheet should be placed in `library/img`.

## Custom Excerpts ( Frontend )

### `normcore_excerpt()` function
Located: `/library/functions/normcore-custom-excerpt.php`

### Parameters
##### Required
`'amount'` `'callback'`

The `normcore_excerpt()` function takes two arguments `amount` & `callback`.

Below is a example of  `normcore_excerpt()` function with two functions as arguments.
```
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        // Teaser post
	    normcore_excerpt('normcore_amount','normcore_more_view');
	endwhile;
else :
	echo '<p>No Page Found</p>';
endif;
?>
```
 The two arguments can look like this.
```
<?php
/* === Custom Length === */
function normcore_amount() {
	return 20;
}

/* === Custom Text === */
function normcore_more_view() {
	global $post;
	return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}
?>
```
## Add Link to Admin Toolbar ( Backend )
Located: `/library/functions/normcore-admin-bar.php`

Using the `Global $wp_admin_bar` object methods `add_menu()` & `remove_menu()`. We can manipulate the Toolbar to add and remove links.
Within the `normcore_add_admin_bar()` & `normcore_remove_admin_bar()` functions lies examples.

#### `add_menu()` function

### Parameters
##### Required
`'id'`

##### Optional
`'title'` `'parent'` `'href'` `'group'` `'meta'`

Below is an example of adding a custom logo by injecting the image tag to the `'title'` key .

```
<?php
function normcore_add_admin_bar() {
	global $wp_admin_bar;
	/* === Add custom logo to Toolbar  === */
	$wp_admin_bar->add_menu( array(
		'id'    => 'logo',
		'title' => '<img style="height:20px; width:20px; top:6px; position:relative; padding-right:10px;" src="' . get_template_directory_uri() . '/images/bnl-logo.jpg"/>' . get_bloginfo('name'),
		'href'  => admin_url()
	));
}

add_action('wp_before_admin_bar_render', 'normcore_remove_admin_bar', 0);
?>
```
## Remove Link from Admin Toolbar ( Backend )
Located: `/library/functions/normcore-admin-bar.php`
#### `remove_menu()` function

### Parameters
##### Required
`'id'`

Below is an example of removing all the defualt links in the Toolbar.
```
<?php
function normcore_remove_admin_bar() {
    global $wp_admin_bar;
    $arg = array(
        'new-content',
        'wp-logo',
        'comments',
        'view',
        'site-name',
        'updates'
    );

    foreach($arg as $value){
        $wp_admin_bar->remove_menu( $value );
    }
}

add_action('wp_before_admin_bar_render', 'normcore_remove_admin_bar', 0);
?>
```

## Add Admin Menu Page ( Backend )
#### `add_menu_page()` function
Located: `/library/functions/normcore-admin-menu.php`

### Parameters
##### Required
`'page_title'` `'menu_title'`

##### Optional
`'capability'` `'menu_slug'` `'function'` `'icon_url'` `'position'`

The example below illustrates how to register a Movie link to the Admin Menu page using `add_menu_page()` function.
```
<?php
function normcore_add_menu_page(){
    add_menu_page(
        'Movie',
        'Movie',
        'manage_options',
        'post.php?post=812&action=edit',
        '',
        'movie-icon.png',
        5
    );
}

add_action( 'admin_menu', 'normcore_add_menu_page' );
?>
```
## Remove Admin Menu Page ( Backend )
#### `remove_menu_page()` function
Located: `/library/functions/normcore-admin-menu.php`

### Parameters
##### Required
`'menu_slug'`

##### Return Values
`The removed menu on success, false if not found.`

By harnessing the `remove_menu_page()` funciton you can clean up the Admin Menu Sidebar.

To find the right `$menu_slug` to add to the `remove_menu_page()` function. You can echo the code below and look for the second element `'[2]'` in the array that your targeting.
```
<?php
echo '<pre style="background-color: #1c94da;z-index: 22222222222;top: 0px;left: 0px; position: absolute; color: white; margin: 0px">' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
?>
```
The example below removes all defualt links.
```
<?php
function normcore_remove_menu_page() {
    $arg = array(
        'index.php',
        'edit.php?post_type=page',
        'edit.php',
        'upload.php',
        'edit-comments.php',
        'themes.php',
        'users.php',
        'tools.php',
        'options-general.php',
        'plugins.php',
        'edit.php?post_type=acf-field-group',
        'cptui_main_menu',
    );

    foreach ($arg as $value) {
        remove_menu_page( $value );
    }
}

add_action( 'admin_menu', 'normcore_remove_menu_page' );
?>
```
Note: *This `normcore_remove_menu_page()` function should be called on the `admin_menu` action hook.*

## Sort Admin Menu
#### `normcore_sort_menu_page()` function
Located: `/library/functions/normcore-admin-menu.php`

By using `normcore_sort_menu_page()` function you can sort the Admin Menu. Simple add the links in the order you desire.

In the example below. The Admin Menu would result in the following order
| Dasboard |
| Movies   |
| News     |
| Story    |

```
<?php
function normcore_sort_menu_page($menu_ord) {
    if (!$menu_ord) return true;
        return array(
            'index.php', //Dashboard link
            'edit.php?post_type=movie', // Movie
            'edit.php?post_type=news',  // News
            'edit.php?post_type=story', // Story
            'edit.php', // Default
        );
}

add_filter('custom_menu_order', 'normcore_sort_menu_page');
add_filter('menu_order', 'normcore_sort_menu_page');
?>
```
This `custom_menu_order` hook activates the `'menu_order'` filter. Return true in order to activate the `'menu_order'` filter.

This `menu_order` hook adds the ability to reorder top-level menus.

## Styling the Admin Menu

The example below illitrates a easy way to add customization to the admin page. Keep in mind this is a small example a
```
<?php
function normcore_admin_menu_style() {
   echo '<style type="text/css"> .wp-menu-separator {display: none;} </style>';
}

add_action( 'admin_head', 'normcore_admin_menu_style' );
?>
```

## Add Dashboard Widgets ( Backend )

#### `wp_add_dashboard_widget()` function
Located: `/library/functions/normcore-admin-widgets.php`

### Parameters
##### Required
`'widget_id'` `'widget_name'`

##### Optional
`'callback'` `'control_callback'` `'callback_args'`

The `wp_add_dashboard_widget()` function adds a new widget to the Admin Dashbaord. [Using the WordPress Dashboard Widgets API.](API.https://codex.wordpress.org/Dashboard_Widgets_API)

The example below adds a widget.
```
<?php
function normcore_add_widgets() {
   wp_add_dashboard_widget( 'dashboard_widget', 'TEST', 'normcore_dashboard_widget_function' );
}

function normcore_dashboard_widget_function() {
   echo '<div class="admin">TEST</div>';
}

add_action('wp_dashboard_setup', 'normcore_add_widgets');
?>
```

## remove Dashboard Widgets ( Backend )
#### `remove_meta_box()` function
Located: `/library/functions/normcore-admin-widgets.php`

### Parameters
##### Required
`'id'` `'page'` `'context'`

The `remove_meta_box()` function allows you to remove widgets from your Admin Dashbaord.

The example below removes all the defualt widgets.
```
<?php
function normcore_remove_widget_box() {
    remove_meta_box( 'dashboard_activity',    'dashboard', 'normal' );      // Activity
    remove_meta_box( 'dashboard_primary',     'dashboard', 'side' );        // WordPress News
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );        // Quick Draft
    remove_meta_box( 'dashboard_right_now',   'dashboard', 'normal' );      // At a Glance
}

add_action('wp_dashboard_setup', 'normcore_remove_widget_box');
?>
```
## Adds Custom Post Types to search results ( Frontend )
The example shows you how to add your custom post types to the search results via the `$query object`.

```
<?php
function normcore_search_all( $query ) {
    if ( $query->is_search ) {
        $query->set(
            'post_type',
             array(
                'site',
                'plugin',
                'theme',
                'person'
            )
        );
    }
    return $query;
}

add_action( 'pre_get_posts', 'normcore_search_all' );
?>
```
The `pre_get_posts` hook gives developers access to the $query object by reference (any changes you make to $query are made directly to the original object - no return value is necessary).
