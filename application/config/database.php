<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	$active_group = 'default';
	$query_builder = TRUE;
	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'sql148.main-hosting.eu',
		'username' => 'u802801766_admcoffee',
		'password' => 'U802801766coffee',
		'database' => 'u802801766_coffee',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
?>