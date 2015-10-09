<?php
/**
 * @link https://github.com/charlesportwoodii/yii2-analytics.js
 * @copyright Copyright (c) 2015 Charles R. Portwood II
 * @license MIT
 *    @see LICENSE.md
 */

namespace charlesportwoodii\analyticsjs;

use charlesportwoodii\analyticsjs\AnalyticsJsAssetBundle;

use yii\base\Component;
use yii\helpers\Json;
use yii\helpers\Html;

use Yii;

class Analyticsjs extends Component
{
	/**
 	 * Provider list from component configuration
	 * @var array
	 */
	public $providers = [];

	/**
	 *
	 */
	public function init()
	{
		parent::init();
		
		$providers = $this->getProviders();

		// Do nothing if no providers are present
		if (empty($providers))
			return;

		$config = JSON::encode($providers);

		// Publish the analytics.js file
		$view = null;

		AnalyticsJsAssetBundle::register($view);

		// Initialize the script
	}

	/**
 	 * Getter method for class extension
	 * @return array
	 */
	public function getProviders()
	{
		return $this->providers;
	}
}
