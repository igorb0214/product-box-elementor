<?php

namespace app\widgets\modalPopup;

use app\controllers\BaseController;


/**
 * Class ModalPopup
 * @package app\widgets\modalPopup
 */
class ModalPopup extends BaseController
{

	/**
	 * @var string
	 */
	private string $popupContent = '';

	/**
	 * ModalPopup constructor.
	 * @param string $popupContent
	 */
	public function __construct(string $popupContent = '') {
		$this->popupContent = $popupContent;
	}

	/**
	 * render and return html of widget
	 *
	 * @return string
	 */
	public function run(): string {

		return $this->renderLayout(str_replace('\\', '/', __NAMESPACE__) . '/views/index.phtml', ['popupContent'=>$this->popupContent], true);

	}

}