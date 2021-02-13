<?php

namespace app\widgets\productBox;

use app\controllers\BaseController;


/**
 * Class ProductBox
 * @package app\widgets\productBox
 */
class ProductBox extends BaseController
{
	/**
	 * @var int
	 */
	private int $productId;
	/**
	 * @var string
	 */
	private string $image;
	/**
	 * @var string
	 */
	private string $title;
	/**
	 * @var string
	 */
	private string $buttonTitle;

	/**
	 * ProductBox constructor.
	 * @param int $productId
	 * @param string $image
	 * @param string $title
	 * @param string $buttonTitle
	 */
	public function __construct(int $productId, string $image, string $title, string $buttonTitle) {

		$this->productId   = $productId;
		$this->image       = $image;
		$this->title       = $title;
		$this->buttonTitle = $buttonTitle;

	}

	/**
	 * render and return html of widget
	 *
	 * @return string
	 */
	public function run(): string {

		return $this->renderLayout(__NAMESPACE__ . '/views/index.phtml', [
			'productId'   => $this->productId,
			'image'       => $this->image,
			'title'       => $this->title,
			'buttonTitle' => $this->buttonTitle

		], true);

	}

}