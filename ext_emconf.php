<?php

/**
 * $EM_CONF.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Portal',
    'description' => '',
    'category' => 'fe',
    'version' => '0.0.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Tim Lochmüller',
    'author_email' => 'tim@fruit-lab.de',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-0.0.0'
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'FRUIT\\Portal\\' => 'Classes/'
        ],
    ],
];
