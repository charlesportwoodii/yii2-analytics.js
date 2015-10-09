<?php
/**
 * @link https://github.com/charlesportwoodii/yii2-analytics.js
 * @copyright Copyright (c) 2015 Charles R. Portwood II
 * @license MIT
 * @author Charles R. Portwood II <charlesportwoodii@erianna.com>
 * @since 1.0.0
 */

namespace charlesportwoodii\analyticsjs;

use charlesportwoodii\analyticsjs\AnalyticsJsAsset;

use yii\base\Component;
use yii\helpers\Json;

use Yii;

/**
 * AnalyticsJs implements PHP bindings for [Analytics.js](https://segment.com/docs/libraries/analytics.js/
 *
 * To use AnalyticsJs as a component include the following in your config/web.php configuration file.
 *
 * A full list of providers and their arguments can be found on [the Analytics.js integrations page](https://segment.com/docs/integrations/). This extension directly passes the provider list and arguments to analytics.js
 *
 *	~~~
 *	return [
 *		// [...],
 *		'components' => [
 *			'analyticsjs' => [
 *				'providers' => [
 *				
 *				]
 *			]
 *		]	
 *	];
 *	~~~
 */
class Analyticsjs extends Component
{
	/**
 	 * Provider list from component configuration
	 * @var array
	 */
	public $providers = [];

	/**
	 * Init method
	 * Registers the AnalyticsJsAsset bundle and initializes Analytics.js JAvaScript object in the view
	 */
	public function init()
	{
		parent::init();
		
		$providers = $this->getProviders();

		// Do nothing if no providers are present
		if (empty($providers))
			return;

		$config = JSON::encode($providers);

		// Register the asset bundle
		$view = Yii::$app->view;
		AnalyticsJsAsset::register($view);

		// Initialize the script
		$view->registerJs('analytics-js', "analytics.initialize({$json}); analytics.page();");
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
