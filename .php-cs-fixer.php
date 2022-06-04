<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests');

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR12' => true,
        'array_syntax' => array('syntax' => 'short'),
        'binary_operator_spaces' => true,
        'declare_strict_types' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
    ))
    ->setFinder($finder);
