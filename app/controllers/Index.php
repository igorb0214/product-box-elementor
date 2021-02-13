<?php

namespace app\controllers;

use app\widgets\modalPopup\ModalPopup;
use app\widgets\productBox\ProductBox as ProductBoxWidget;
use app\models\ProductBox as ProductBoxModel;

/**
 * Class Action
 * @package app\controllers
 */
class Index extends BaseController {


	/**
	 * run application
	 */
	public function run(): void {

		//fetch data
		$productBoxArr = ProductBoxModel::getAllData();

		$productBoxHtml='';
		//render product boxes
		foreach ($productBoxArr as $productId => $productBox) {

			$productBoxWidget = new ProductBoxWidget(//create new widget
				$productId,
				$productBox['image'],
				$productBox['title'],
				$productBox['button_title'],
			);

			$productBoxHtml .= $productBoxWidget->run();//get html of each widget
		}

		$modalPopupHtml = (new ModalPopup())->run();//create popup widget

		//render view
		$this->renderLayout(__DIR__ . '/app/views/index.phtml', [
			'productBoxHtml' => $productBoxHtml,
			'modalHtml'      => $modalPopupHtml,
		]);

	}

}