<?php

$S = trim(fgets(STDIN));
$len = strlen($S);
$alfabets = range('a','z');
// var_dump($alfabets);
$cnt = 0;
foreach ($alfabets as $letter) {
    if (strpos($S,$letter) !== false) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
