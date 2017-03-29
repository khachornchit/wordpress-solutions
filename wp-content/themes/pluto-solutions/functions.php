<?php
// Guide
// 1. Set up
// 2. Includes
// 3. Action & Filter Hooks
// 4. Short codes
// -------------------------
// 1. Set up


// 2. Includes
include(get_template_directory().'/includes/front/enqueue.php');
include(get_template_directory().'/includes/setup.php');

// 3. Action & Filter Hooks
add_action('wp_enqueue_scripts', 'ps_enqueue');
add_action('after_setup_theme', 'ps_setup_theme');

// 4. Short codes