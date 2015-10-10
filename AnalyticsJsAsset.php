<?php
/**
 * @link https://github.com/charlesportwoodii/yii2-analytics.js
 * @copyright Copyright (c) 2015 Charles R. Portwood II
 * @license MIT
 * @author Charles R. Portwood II <charlesportwoodii@erianna.com>
 * @since 1.0.0
 */

namespace charlesportwoodii\analytics;

use yii\web\AssetBundle;
use Yii;


class AnalyticsJsAsset extends AssetBundle
{
	public $sourcePath = '@bower/analytics';

	public $js = [
		'analytics.js'	
	];
	
	public $publishOptions = [
		'only' => [
			'analytics.js',
			'analytics.min.js'
		]
	];

	public $jsOptions = ['position' => \yii\web\View::POS_END];
}
