<?php

$S = trim(fgets(STDIN));
$len = strlen($S);
$alfabets = range('a','z');
// var_dump($alfabets);
$cnt = 0;
foreach ($alfabets as $letter) {
    for ($i = 0; $i < $len; $i++) {
        if ($S[$i] === $letter) {
            $cnt++;
            break;
        }
    }
}
echo $cnt . PHP_EOL;
