<?php

$points = [3,1,4,1,5,9];
$acc = [0];
for ($i = 0; $i < count($points); $i++) {
    $acc[$i+1] = $acc[$i] + $points[$i];
}
$keys = range('A','G');
$values = range(0,6);
$pos = array_combine($keys,$values);
// var_dump($pos);
[$p,$q] = explode(" ", trim(fgets(STDIN)));
echo abs($acc[$pos[$p]] - $acc[$pos[$q]]) . PHP_EOL;
