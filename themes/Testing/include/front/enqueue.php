<?php

function nu_enqueue(){
	wp_register_style('nu_font', 'http://fonts.googleapis.com/css?family=Abel" rel="stylesheet');
	wp_register_style('nu_mobile', get_template_directory_uri() . '/assets/upload/css/mobile.css');

	wp_enqueue_style('nu_font');
	wp_enqueue_style('nu_mobile');

}