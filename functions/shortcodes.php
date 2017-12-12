<?php

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) 
{
    echo "Hi there!<br>Do you want to plug me ?<br>";
	echo "If you looking for more about me, you can read at http://osw3.net/wordpress/plugins/please-plug-me/";
    exit;
}


/**
 * Shortcode Exemple
 * --
 * This is an exemple of a shortcode function.
 * We declare a function code : "WP_GoogleAnalytics", and
 * we call this function by : "WP_GoogleAnalytics"
 * 
 * Declare this shortcode in config.json at :
 *      "shortcodes": {
 *          "WP_GoogleAnalytics": "WP_GoogleAnalytics"
 *      }
 * 
 * Use this shortcode like : 
 *      do_shortcode('[WP_GoogleAnalytics]');
 */
if (!function_exists('WP_GoogleAnalytics'))
{
    function WP_GoogleAnalytics( $attributes, $content, $tag )
    {
        $trackingid = GoogleAnalytics_getOption("trackingid");

        if (!empty($trackingid))
        {
            $output = "<script async src=\"https://www.googletagmanager.com/gtag/js?id=".$trackingid."\"></script>\n";
            $output.= "<script>";
            $output.= "window.dataLayer = window.dataLayer || [];";
            $output.= "function gtag(){dataLayer.push(arguments);}";
            $output.= "gtag('js', new Date());";
            $output.= "gtag('config', '".$trackingid."');";
            $output.= "</script>\n";
            return $output;
        }

        return false;
    }
} 