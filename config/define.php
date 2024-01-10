<?php


$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$domain = $_SERVER['HTTP_HOST'];
$rootUrl = $protocol . $domain;
define('ROOT_URL', $rootUrl.'/pafi-form' );
// define('ROOT_URL', $rootUrl);


?>