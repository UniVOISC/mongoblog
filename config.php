<?php
define('URL', 'http://localhost/mongoblog');

$config = array(
	'username' => 'user',
	'password' => 'pass',
	'dbname'   => 'blog',
	//'cn' 	   => sprintf('mongodb://%s:%d/%s', $hosts, $port,$database),
	'connection_string'=> sprintf('mongodb://%s:%d/%s','127.0.0.1','27017','blog')
);
