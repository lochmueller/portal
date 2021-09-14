<?php

declare(strict_types=1);

$baseDir = dirname(__DIR__, 3);

require $baseDir . '/.Build/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in($baseDir . '/Classes')
    ->in($baseDir . '/Configuration')
    ->in($baseDir . '/Resources/Private/Build');

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP74Migration' => true,
        '@PHP74Migration:risky' => true,
        '@PSR12' => true,
        '@PSR12:risky' => true,
    ])
    ->setFinder($finder);
