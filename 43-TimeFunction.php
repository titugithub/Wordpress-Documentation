<?php 

if ( site_url() == "http://demo.lwhh.com" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

?>