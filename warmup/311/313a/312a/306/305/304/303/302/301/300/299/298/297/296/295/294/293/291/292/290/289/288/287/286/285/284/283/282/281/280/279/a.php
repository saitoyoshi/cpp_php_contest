<?php

$string = trim(fgets(STDIN));
$letters = str_split($string);
$sum = 0;
foreach ($letters as $letter) {
    if ($letter === 'v') {
        $cnt++;
    } else {
        $cnt += 2;
    }
}
echo $cnt . PHP_EOL;
