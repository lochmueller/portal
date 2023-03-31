<?php

declare(strict_types=1);

$baseDir = dirname(__DIR__, 3);

require $baseDir . '/.Build/vendor/autoload.php';

$finder = (new PhpCsFixer\Finder())->in('.')->exclude('.Build');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP74Migration' => true,
        '@PHP74Migration:risky' => true,
        '@PSR12' => true,
        '@PSR12:risky' => true,
    ])
    ->setFinder($finder);
