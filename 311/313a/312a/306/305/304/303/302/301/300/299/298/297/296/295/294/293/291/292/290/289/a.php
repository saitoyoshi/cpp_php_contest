<?php

$string = trim(fgets(STDIN));
$letters = str_split($string);
foreach ($letters as $letter) {
    echo $letter === '0' ? '1' : '0';
}
echo PHP_EOL;
