<?php

$N = (int) trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($j === $i || $j === 0) {
            $a[$i][$j] = 1;
        } else {
            $a[$i][$j] = $a[$i-1][$j-1]+$a[$i-1][$j];
        }
    }
}
for ($i = 0; $i < $N; $i++) {
    echo implode(' ',$a[$i]) . PHP_EOL;
}
