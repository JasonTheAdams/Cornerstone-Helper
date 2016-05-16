<?php
/**
 * Plugin Name: Cornerstone Helper
 * Description: A suite of elements to give Cornerstone a +1
 * Author: Paper Tower
 * Author URI: http://papertower.com
 * Version: 1.0
 */

add_action('cornerstone_register_elements', function() {
  $path = plugin_dir_path(__FILE__);
  cornerstone_register_element('BackgroundImage', 'background-image', "$path/elements/background-image");
});

add_filter('cornerstone_icon_map', function($icon_map) {
  $icon_map['cornerstone-helper'] = plugin_dir_url(__FILE__) . '/assets/svg/icons.svg';
  return $icon_map;
});
