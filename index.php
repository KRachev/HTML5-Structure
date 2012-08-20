<?php

	// Showing all of the errors
	error_reporting(E_ALL);

	// Defining the environment of working with the framework
	define('ENVIRONMENT', 'development');

	// Defining base, application and system path
	define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
	define('APP_PATH', BASE_PATH . 'application' . '/');
	define('SYS_PATH', BASE_PATH . 'system' . '/');

	include BASE_PATH . 'system/core/core.php';