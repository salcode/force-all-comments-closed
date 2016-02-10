<?php
/**
 * Plugin Name: Force All Comments to be Closed
 * Plugin URI: http://salferrarello.com/force-all-comments-closed/
 * Description: Overrides whether or not a post, page, or media has comments. All comments will be closed while this plugin is active. This works by using the 'comments_open' filter and setting it to false. Disabling the plugin will restore comments to their previous state.
 * Version: 0.1.1
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 *
 * @author Sal Ferrarello
 * @copyright 2016 Iron Code Studio
 * @license GPL-2.0+
 */

add_filter( 'comments_open', '__return_false' );
