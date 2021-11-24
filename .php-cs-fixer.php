<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    // ->notPath('config/test2.php')
    ->exclude('config')
;

return ( new \PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        // 'single_line_throw'=>false
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__.'.php_cs.cache')
;
