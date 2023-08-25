<?php


$N = (int) fgets(STDIN);
$string = trim(fgets(STDIN));
$TCount = substr_count($string, 'T');
$ACount = substr_count($string, 'A');
if ($ACount > $TCount) {
    echo 'A' . PHP_EOL;
} elseif ($ACount < $TCount) {
    echo 'T' . PHP_EOL;
} else {
    if ($string[$N-1] === 'A') {
        echo 'T' . PHP_EOL;
    } else {
        echo 'A' . PHP_EOL;
    }
}
