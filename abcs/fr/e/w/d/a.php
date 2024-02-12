<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$brr = array_unique($arr);
// var_dump($brr);
if (count($arr) === count($brr)) {
    echo 'YES';
} else {
    echo 'NO';
}
echo PHP_EOL;
