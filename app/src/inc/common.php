<?php
session_start();
set_time_limit(0);

// $_POST = array_map('htmlspecialchars', $_POST);
function protect_from_xss_and_sqli($var) {
	foreach($var as $key=>$value) {
		if(is_array($value)) {
			$var[$key] = protect_from_xss_and_sqli($value);
		} else {
			$var[$key] = htmlspecialchars($value);
		}
	}
	return $var;
}

$_POST = protect_from_xss_and_sqli($_POST);

define('SYS_KEY', md5("white".sha1(__FILE__)."dev"));
define('POST', ($_SERVER['REQUEST_METHOD']=='POST'));

include 'my.php';