<?php

$string = trim(fgets(STDIN));
$letters = str_split($string);
foreach ($letters as $l) {
    echo strtoupper($l);
}
echo PHP_EOL;
