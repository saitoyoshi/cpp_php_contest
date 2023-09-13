<?php

$N = (int) fgets(STDIN);

$acc = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($j === 0 || $j === $i) {
            $acc[$i][$j] = 1;
        } else {
            $acc[$i][$j] = $acc[$i-1][$j-1] + $acc[$i-1][$j];
        }
    }
}
foreach ($acc as $arr) {
    echo implode(" ", $arr) . PHP_EOL;
}
