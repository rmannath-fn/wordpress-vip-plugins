<?php
/*
	VIP Helper Functions that are specific to WordPress.com

	Put include(ABSPATH . '/wp-content/themes/vip/plugins/vip-helper-wpcom.php'); in the theme's functions.php to use this
 */

/*
 * Disable the WordPress.com filter that prevents orphans in titles
 * http://en.blog.wordpress.com/2006/12/24/no-orphans-in-titles/
 *
 * @author mtdewvirus
 */

function vip_allow_title_orphans() {
	remove_filter('the_title', 'widont');
}
