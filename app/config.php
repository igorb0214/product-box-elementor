<?php


/**
 * @param string $className
 */
function autoload(string $className): void {

	$file = dirname(__DIR__) . '/' . $className . '.php';

	if(file_exists($file)) {
		require_once($file);
	}

}

spl_autoload_register('autoload');