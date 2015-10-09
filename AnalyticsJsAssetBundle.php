<?php
/**
 * @link https://github.com/charlesportwoodii/yii2-analytics.js
 * @copyright Copyright (c) 2015 Charles R. Portwood II
 * @license MIT
 *    @see LICENSE.md
 */

namespace charlesportwoodii\analyticsjs;

use yii\web\AssetBundle;
use Yii;


class AnalyticsJsAssetBundle extends AssetBundle
{
	public $sourcePath = [
		'@bower/analytics'
	];

	public $publishOptions = [
		'only' => [
			'analytics.js',
			'analytics.min.js'
		]
	];

	public $jsOptions = ['position' => \yii\web\View::POS_END];
}
