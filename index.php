<?php
/**
 * Plugin Name: Google Analytics
 * Plugin URI: http://osw3.net/wordpress/plugins/goole-analytics/
 * Description: A simple Google Analytics code injection
 * Version: 0.1
 * Author: OSW3
 * Author URI: http://osw3.net/
 * License: GNU
 * Text Domain: google_analytics
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) 
{
    echo "Hi there!<br>Do you want to plug me ?<br>";
	echo "If you looking for more about me, you can read at http://osw3.net/wordpress/plugins/goole-analytics/";
    exit;
}

require_once(__DIR__.'/ppm/index.php');