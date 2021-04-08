<?php
/*
 * Plugin Name: Naran Hide Welcome Guide
 * Description: Always hide Gutenberg's welcome guide display.
 * Version:     1.0.0
 * Author:      changwoo
 * Author URI:  https://blog.changwoo.pe.kr
 * Plugin URI:  https://github.com/chwnam/naran-hide-welcome-guide
 */

add_action( 'admin_init', 'nhwg_init' );
function nhwg_init() {
	global $pagenow;
	if ( 'post.php' === $pagenow && wp_script_is( 'wp-edit-post', 'registered' ) ) {
		wp_enqueue_script( 'nhwg', plugins_url( 'nhwg.js', __FILE__ ), [], '1.0.0' );
	}
}
