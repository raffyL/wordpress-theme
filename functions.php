<?php
		//Load the main css style ,bootstrap and jquery to the theme
	function zylun_theme_style() {
		wp_enqueue_style('main_style' , get_template_directory_uri().'/style.css', array(), '1.0.0' , 'all');
		wp_enqueue_style ( 'bootstrap_min_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_script('bootstrap_min_js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
		wp_enqueue_style('animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	}
	add_action('wp_enqueue_scripts' , 'zylun_theme_style' );

	
?>