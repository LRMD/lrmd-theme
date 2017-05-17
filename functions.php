<?php

register_nav_menus( array(
        'nav' => 'Primary menu',
        'navi' => 'Secondary menu' 
      ) );

function wpb_list_child_pages() { 
  global $post; 
  if ( is_page() && $post->post_parent )
  	$childpages = wp_list_pages( 
      'sort_column=menu_order&title_li=&child_of=' . 
      $post->post_parent . '&echo=0' 
    );
  else
  	$childpages = wp_list_pages( 
      'sort_column=menu_order&title_li=&child_of=' . 
      $post->ID . '&echo=0' 
    );
  if ( $childpages ) {
  	$string = '<ul>' . $childpages . '</ul>';
  }
  return $string;

}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');

function social_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left sidebar',
		'id'            => 'main-sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'social_widgets_init' );

$editor = get_role('editor');

// add $cap capability to this role object
$editor->add_cap('edit_theme_options');
