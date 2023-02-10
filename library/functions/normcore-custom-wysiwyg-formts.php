<?php
function acf_wysiwyg_remove_wpautop() {
  remove_filter('acf_the_content', 'wpautop',0 );
  remove_filter( 'acf_the_excerpt', 'wpautop' );
}

add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function tuts_mce_editor_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}

function tuts_mce_before_init( $settings ) {
	$style_formats = array(
		array(
			'title' => 'Underline',
			'inline' => 'span',
			'classes' => 'underline',
		),
		array(
			'title' => 'Subheadline',
			'block' => 'div',
			'classes' => 'subheadline',
		),
    array(
      'title' => 'Magic',
      'block' => 'span',
      'classes' => 'magic',
    ),
    array(
      'title' => 'Paragraph Size',
      'inline' => 'span',
      'items' => array(
        array(
          'title' => 'XL',
          'inline' => 'span',
          'classes' => 'xl',
        ),
        array(
          'title' => 'LG',
          'inline' => 'span',
          'classes' => 'lg',
        ),
        array(
          'title' => 'MD',
          'inline' => 'span',
          'classes' => 'md',
        ),
        array(
          'title' => 'SM',
          'inline' => 'span',
          'classes' => 'sm',
        ),
      )
    ),
		array(
			'title' => 'Paragraph Style',
			'inline' => 'span',
			'items' => array(
				array(
					'title' => 'Highlight',
					'inline' => 'span',
					'classes' => 'highlight',
				),
			)
		),
		array(
			'title' => 'Quote',
			'block' => 'div',
			'wrapper' => false,
			'items' => array(
				array(
					'title' => 'Quote-LG',
					'block' => 'blockquote',
					'wrapper' => false,
					'classes' => 'quote-lg',
				),
				array(
					'title' => 'Quote-SM',
					'block' => 'blockquote',
					'classes' => 'quote-sm',
					'wrapper' => false,
				),
			)
		),
		array(
			'title' => 'Primary Buttons',
			'inline' => 'span',
			'wrapper' => true,
			'items' => array(
				array(
					'title' => 'Primary Blue',
					'block' => 'div',
					'classes' => 'wysiwyg btn primary-bg default',
					'wrapper' => false
				),
				array(
					'title' => 'Primary Blue Xlarge',
					'block' => 'div',
					'classes' => 'wysiwyg btn primary-bg xlarge',
					'wrapper' => false
				),
				array(
					'title' => 'Primary Blue large',
					'block' => 'div',
					'classes' => 'wysiwyg btn primary-bg large',
					'wrapper' => false
				),
				array(
					'title' => 'Primary Blue Medium',
					'block' => 'div',
					'classes' => 'wysiwyg btn primary-bg medium',
					'wrapper' => false
				),
				array(
					'title' => 'Primary Blue Small',
					'block' => 'div',
					'classes' => 'wysiwyg btn primary-bg small',
					'wrapper' => false
				),
			)
		),
		array(
			'title' => 'Secondary Buttons Default',
			'inline' => 'span',
			'wrapper' => true,
			'items' => array(
				array(
					'title' => 'Secondary Blue',
					'block' => 'div',
					'classes' => 'wysiwyg btn second-primary-bg default',
					'wrapper' => false
				),
			)
		),
	);

	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}

add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );
?>
