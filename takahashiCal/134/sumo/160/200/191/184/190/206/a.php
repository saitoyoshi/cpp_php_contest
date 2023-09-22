<?php

$N = (int) fgets(STDIN);
$sum = 0;
for ($i = 1; $i <= $N; $i++) {
    $sum += $i;
    if ($sum >= $N) {
        echo $i . PHP_EOL;
        exit;
    }
}
