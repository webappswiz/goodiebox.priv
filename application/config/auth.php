<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'klaskladlk892393jjq09jd0jkkJJIOFJOD29392IJDAkladkas',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'admin' => '20abf809f74a9e11dd5d033916818365eb703d0b16f7e61bddcc45b4c8fc0525',
	),

);
