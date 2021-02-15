<?php

namespace app\models;


/**
 * abstract class as required at exercise
 *
 * Class ProductBox
 * @package app\models
 */
abstract class ProductBox
{

	/**
	 * get all data from json file
	 *
	 * @return array
	 */
	public static function getAllData(): array {

		$string = file_get_contents(str_replace('\\', '/', __NAMESPACE__) . '/' . 'product_box_data.json');

		return json_decode($string, true) ?? [];

	}

	/**
	 * get description by id from json data
	 *
	 * @param int $productBoxId
	 * @return string
	 */
	public static function getDescriptionById(int $productBoxId): string {

		$string = file_get_contents(str_replace('\\', '/', __NAMESPACE__) . '/' . 'product_box_data.json');

		return json_decode($string, true)[$productBoxId]['description'] ?? '';

	}


}