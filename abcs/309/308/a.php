<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$colors = explode(" ", trim(fgets(STDIN)));
$dishes = explode(" ", trim(fgets(STDIN)));
$prices = array_map('intval',explode(" ", trim(fgets(STDIN))));
$first = array_shift($prices);
// var_dump($prices);
$sum = 0;
foreach ($colors as $color) {
    $index = array_search($color, $dishes);
    if ($index === false) {
        $sum += $first;
    } else {
        $sum += $prices[$index];
    }
}
echo $sum . PHP_EOL;
