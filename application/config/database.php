<?php
defined('BASEPATH') or exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> 'mysql:host=localhost; dbname=leny5463_demo; charset=utf8;',
	'hostname' => 'localhost',
	'username' => 'leny5463_root',
	'password' => 'lenyskincare',
	'database' => '',
	'dbdriver' => 'pdo',
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