<?php
/**
 * Plugin Name: UCB Siteimprove Analytics
 * Plugin URI: http://lib.berkeley.edu
 * Description: Adds Siteimprove Analytics code
 * Version: 1.0
 * Author: Jesse Loesberg
 * License: GPL-3.0
 */

function ucbsa_load_scripts() {
   // Siteimprove analytics
   wp_enqueue_script( 'siteimprove-analytics-js', 'https://siteimproveanalytics.com/js/siteanalyze_6294756.js', array(), false, array('in_footer' => true));
}
add_action( 'wp_enqueue_scripts','ucbsa_load_scripts');