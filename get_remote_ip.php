<?php
function get_remote_ip() {
    if (getenv('HTTP_CLIENT_IP') 
	&& strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {

	$ip = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR') 
	       && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {

	$ip = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('REMOTE_ADDR') 
	       && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {

        $ip = getenv('REMOTE_ADDR');
    } else if (isset($_SERVER['REMOTE_ADDR']) 
	       && $_SERVER['REMOTE_ADDR'] 
	       && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {

        $ip = $_SERVER['REMOTE_ADDR'];
    }
    preg_match("/[\d\.]{7,15}/", $ip, $matches);
    $ip = (isset($matches[0]) && $matches[0]) ? $matches[0] : '';
    return $ip;
}
