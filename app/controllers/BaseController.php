<?php

namespace app\controllers;

/**
 * Class BaseController
 * @package app\controllers
 */
abstract class BaseController
{

	/**
	 * render view by given path
	 *
	 * @param string $viewFile
	 * @param array $data
	 * @param bool $return
	 * @return false|string
	 */
	protected function renderLayout(string $viewFile, array $data = [], $return = false) {

		extract($data);
		ob_start();
		require(str_replace('\\', '/', $viewFile));
		$output = ob_get_contents();
		ob_end_clean();

		if ($return) {
			return $output;
		}
		echo $output;

	}

}