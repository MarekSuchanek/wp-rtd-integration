<?php
/*
Plugin Name: RTD integration
Plugin URI: https://github.com/MarekSuchanek/wp-rtd-integration
Description: Integrates ReadTheDocs into WordPress.
Version: 1.0.0
Author: Marek Suchánek
Author URI: https://suchanek.cloud

 * Licensed under the MIT

*/


define('RTD_URI', ''); // fill-in

function search_box($atts) {
    echo '<form id="rtd-search" class="search-form">';
    echo '<label for="rtd-search-box">'.(empty($atts['label'])?'Search docs':$atts['label']).':</label>';
    echo '<input type="text" id="rtd-search-box" data-rtd="'.RTD_URI.'">';
    echo '<button id="rtd-search-btn" class="searchsubmit" type="button">'.(empty($atts['btn'])?'Search':$atts['btn']).'</button>';
    echo '</form>';
}

add_shortcode('rtd-search', 'search_box');


function rtd_integration_enqueue_scripts() {
    wp_enqueue_script('rtdi-js', plugin_dir_url(__FILE__).'js/search.js');
}

add_action('wp_enqueue_scripts', 'rtd_integration_enqueue_scripts');
