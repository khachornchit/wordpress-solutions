<?php

function ps_enqueue() {
	wp_register_style('ps_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_register_style('ps_animate', get_template_directory_uri().'/assets/css/animate.css' );
	wp_register_style('ps_style', get_template_directory_uri().'/assets/css/style.css' );
	wp_register_style('ps_default', get_template_directory_uri().'/assets/css/default.css' );
	wp_register_style('ps_font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css');
	wp_register_style('ps_font-awesome-bootstrap','http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	
	wp_enqueue_style('ps_bootstrap');
	wp_enqueue_style('ps_animate');
	wp_enqueue_style('ps_style');
	wp_enqueue_style('ps_default');
	wp_enqueue_style('ps_font-awesome');
	wp_enqueue_style('ps_font-awesome-bootstrap');
	
	wp_register_script('ps_jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), false, true);
	wp_register_script('ps_bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), false, true);
	wp_register_script('ps_jquery.easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js', array(), false, true);
	wp_register_script('ps_jquery.scrollTo', get_template_directory_uri().'/assets/js/jquery.scrollTo.js', array(), false, true);
	wp_register_script('ps_wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), false, true);
	wp_register_script('ps_custom', get_template_directory_uri().'/assets/js/custom.js', array(), false, true);
	
	wp_enqueue_script('ps_jquery');
	wp_enqueue_script('ps_jquery.easing');
	wp_enqueue_script('ps_jquery.scrollTo');
	wp_enqueue_script('ps_bootstrap');
	wp_enqueue_script('ps_wow');
	wp_enqueue_script('ps_custom');
}