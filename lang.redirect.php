<?php

$usr_ip = $_SERVER[ 'REMOTE_ADDR' ];

$ip = unserialize( file_get_contents( "http://www.geoplugin.net/php.gp?ip=$usr_ip" ) );
$pr = $ip[ 'geoplugin_countryCode' ];

if ( $pr == 'IQ' ) {
	//www.yourdomain.com/index.phplang?ar
	//change this url to your language url you also may have to change country code
} elseif ( $pr == 'DE' ) {
	//www.yourdomain.com/index.phplang?de
	//change this url to your language url you also may have to change country code
} elseif ( $pr == 'NL' ) {
	//www.yourdomain.com/index.phplang?nl
	//change this url to your language url you also may have to change country code
} else {
	//www.yourdomain.com/index.phplang?en
	//change this url to your language url you also may have to change country code
}