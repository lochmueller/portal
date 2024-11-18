<?php

declare(strict_types=1);

/**
 * $EM_CONF.
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Portal',
    'description' => 'Easy to use portal framework with many best practices. Ready to use portal/intranet for TYPO3!',
    'category' => 'fe',
    'version' => '0.1.0',
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
            'language_detection' => '*',
            'reactions' => '*',
            'webhooks' => '*',
            'container' => '*',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Lochmueller\\Portal\\' => 'Classes/',
        ],
    ],
];
