<?php

spl_autoload_register(function($class_name) {

	$array_paths = array(
		'/model/',
		'/system/',
		'/controller/',
	);

	foreach ($array_paths as $path) {

		$path = ROOT . $path . $class_name . '.php';

		if (is_file($path)) {

			include_once $path;

		}

	}

});