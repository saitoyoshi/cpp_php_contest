<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $k = (int) fgets(STDIN);
    $sum = 0;
    for ($j = 0; $j < $k; $j++) {
        $sum += $arr[$j];
    }
    echo $sum . PHP_EOL;
}
