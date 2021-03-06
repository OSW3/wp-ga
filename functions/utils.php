<?php

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) 
{
    echo "Hi there!<br>Do you want to plug me ?<br>";
	echo "If you looking for more about me, you can read at http://osw3.net/wordpress/plugins/please-plug-me/";
    exit;
}


/**
 * Util
 * --
 * Options Getter
 */
if (!function_exists('GoogleAnalytics_getOption'))
{
    function GoogleAnalytics_getOption( $param )
    {
        $options = get_option( "google_analytics" );
        if (isset($options[ $param ]))
        {
            return $options[ $param ];
        }

        return null;
    }
} 