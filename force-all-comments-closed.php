<?php
/**
 * Plugin Name: Force All Comments to be Closed
 * Plugin URI: http://salferrarello.com/force-all-comments-closed/
 * Description: Overrides whether or not a post, page, or media has comments.  All comments will be closed while this plugin is active.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 *
 * @author Sal Ferrarello
 * @copyright 2016 Iron Code Studio
 * @license GPL-2.0+
 */

add_filter( 'comments_open', '__return_false' );
