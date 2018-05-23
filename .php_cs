<?php

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'phpdoc_params',
        'phpdoc_indent',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_params',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_short_description',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'operators_spaces',
        'ordered_use',
        'short_array_syntax',
        'return',
        'spaces_before_semicolon',
        'spaces_cast',
        'ternary_spaces',
        'eof_ending',
        'logical_not_operators_with_spaces',
        'concat_with_spaces',
    ])
    ->finder(Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__ . '/old_tests')
    ->in(__DIR__.'/stub'));
