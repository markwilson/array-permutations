<?php

require_once __DIR__ . '/vendor/autoload.php';

// take all the input parameters (excluding the script name)
$arguments = $argv;
array_shift($arguments);

$generator = new ArrayPermutations\Generator();

foreach ($generator->generate($arguments) as $permutation) {
    echo implode(' ', $permutation) . PHP_EOL;
}
