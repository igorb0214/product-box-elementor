<?php

namespace app\controllers;

use app\models\ProductBox;


class Service
{

	/**
	 * get description by id from model
	 *
	 * @param int $productBoxId
	 */
	public function getDescription(int $productBoxId) {

		//cal abstract class as required at exercise
		$description = ProductBox::getDescriptionById($productBoxId);

		echo json_encode(['description' => $description]);
	}
}