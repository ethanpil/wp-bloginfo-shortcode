<?php
/*
Plugin Name: Bloginfo Shortcode
Plugin URI: https://github.com/ethanpil/wp-bloginfo-shortcode
Description: Add a [blog] shortcode to the Wordpress editor to include data from bloginfo()
Version: 1.0
Author: Store Machine Inc.
Author URI: http://storemachine.com
License: GPL
Text Domain: wp-bloginfo-shortcode
*/

function bloginfo_shortcode( $atts ) {
    extract(shortcode_atts(array(
        'info' => '',
    ), $atts));
    return get_bloginfo($info);
}
add_shortcode('blog', 'bloginfo_shortcode');

?>