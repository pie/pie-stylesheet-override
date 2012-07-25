<?php
/*
Plugin Name: Pie Stylesheet Override
Description: This plugin over-rides the default stylesheet in the theme, replacing it with that included here. This is to avoid having to create a child-theme.
Version: 0.1
Author: Neil Pie
Author URI: http://neilpie.co.uk
*/

add_filter('stylesheet_uri','replaceStylesheet');

function replaceStylesheet(){
  return plugin_dir_url(__FILE__).'/style.css';

}

add_action('shutdown','pie_get_plugin_data');
function pie_get_plugin_data(){
$active_plugins = get_plugins();
var_dump($active_plugins);

}

