<?php

$string = trim(fgets(STDIN));
$letters = str_split($string);
$bigletter = range('A','Z');
foreach ($letters as $index => $char) {
    if (in_array($char,$bigletter)) {
        echo $index + 1 . PHP_EOL;
    }
}
