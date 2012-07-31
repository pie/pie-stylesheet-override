<?php
/*
Plugin Name: Pie Stylesheet Override
Description: This plugin over-rides the default stylesheet in the theme, replacing it with that included here.
Version: 0.1
Author: Neil Pie
Author URI: http://neilpie.co.uk
*/

add_filter('stylesheet_uri','replaceStylesheet');

function replaceStylesheet(){
  return plugin_dir_url(__FILE__).'/style.css';

}

