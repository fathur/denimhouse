<?php
/**
 * Denim core functions
 * Author: Fathur Rohman
 */

add_theme_support( 'woocommerce' );

/**
 * ================
 * ACTION AREA
 * ================
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
	echo '<section class="container dh-container" id="main"><div class="row">';
}

function my_theme_wrapper_end() {
	echo '</div></section>';
}

/**
 * ================
 * ADD FILTER AREA
 * ================
 */
add_filter('show_admin_bar', '__return_false');	

/**
 * =================
 * CALLBACK FUNCTION
 * =================
 */
?>