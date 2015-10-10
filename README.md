# Yii2 Analytics.js Integration

This extension provides [Analytics.js](https://segment.com/docs/libraries/analytics.js/) integration for [Yii Framework 2](www.yiiframework.com), and is the natural extension of [EAnalytics](https://github.com/charlesportwoodii/EAnalytics) which performs the same task for Yii1. This extension enables you to control and manage your analytics providers from within your Yii2 configuration, or in more complex examples, from a dynamic configuration.

For licensing information see [LICENSE.md](LICENSE.md).

[![Travis CI](https://travis-ci.org/charlesportwoodii/yii2-analytics.js.svg?branch=master)](https://travis-ci.org/charlesportwoodii/yii2-analytics.js)
[![Downloads](https://img.shields.io/packagist/dt/charlesportwoodii/yii2-analytics.js.svg?style=flat)](https://packagist.org/packages/charlesportwoodii/yii2-analytics.js)
[![License](https://img.shields.io/badge/license-MIT-orange.svg?style=flat "License")](LICENSE.md)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

------

## Installation

The preferred way to install this extension is through composer.

```
composer require --prefer-dist "charlesportwoodii/yii2-analytics.js"
```

or add the following to your ```composer.json``` file.

```
"charlesportwoodii/yii2-analytics.js": "~1.0.0"
```

## Configuration

To use this configuration, add the following to your ```config/web.php``` configuration file:

```
return [
	// [...],
	'components' => [
		'analyticsjs' => [
			'providers' => [
			
			]
		]
	]	
];
```

A full list of providers and their arguments can be found on [the Analytics.js integrations page](https://segment.com/docs/integrations/). This extension directly passes the provider list and arguments to analytics.js.

### Examples

#### Google Analytics

```
return [
	// [...],

	'components' => [
		// [...],

		'analyticsjs' => [
			'providers' => [
				// Google Analytics Provider
				'Google Analytics' => [
					'domain' 					=> 'https://www.example.com,
					'doubleClick' 				=> false,
					'enhancedLinkAttribution' 	=> false,
					'trackingId' 				=> 'UA-XXXXXXXX',
					'universalClient' 			=> 1
				],
		
				// Piwik provider
				'Piwik' => [
					'siteId' 					=> 5,
					'url'						=> 'https://piwik.example.com
				]			
			]
		]
	]	
];
```
