<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        // 'autogenerated_content',
        // 'tests/fixtures',
    ])
    ->notPath([
        // 'dump.php',
        // 'src/exception_file.php',
    ])
;

return (new PhpCsFixer\Config())
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    // https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer
    ->setRules([
        '@PER-CS' => true,
        '@PHP82Migration' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;