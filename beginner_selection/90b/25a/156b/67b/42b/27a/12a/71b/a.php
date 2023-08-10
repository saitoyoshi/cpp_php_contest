<?php

$string = trim(fgets(STDIN));
$alfabets = range('a','z');
foreach ($alfabets as $letter) {
    if (strpos($string, $letter) !== false) {
        ;
    } else {
        echo $letter . PHP_EOL;
        exit;
    }
}
echo 'None' . PHP_EOL;
