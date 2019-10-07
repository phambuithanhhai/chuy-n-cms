/*Adding class to menu item - li tag */
function add_menu_list_item_class($classes, $item, $args) {
  if($args->list_item_class) {
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
 
/*Adding class to link menu item - a tag */
function add_menu_link_class( $atts, $item, $args ) {
  if($args->link_class) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
