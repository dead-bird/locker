<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

use crystal\ratchet\Fields as Ratchet;


return [
	'endpoints' => [
		'items' => function() {
			Craft::$app->getResponse()->getHeaders()->set('Access-Control-Allow-Origin', '*');

			return [
				'elementType' => Entry::class,
				'criteria' => ['section' => 'locker'],
				'transformer' => function(Entry $entry) {
					$ratchet = new Ratchet();
			
					return $ratchet->run($entry);
				},
			];
		},
	]
];
