<?php

declare(strict_types=1);

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
            # Versions: Check composer.json
            'news' => '*',
            'tt_address' => '*',
            'bootstrap_package' => '*',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Lochmueller\\Portal\\' => 'Classes/',
        ],
    ],
];
