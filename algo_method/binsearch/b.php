<?php

$N = (int) fgets(STDIN);

function isOk(float $v, int $N) {
    return (float) $N <= ($v * ($v * ($v + 1) + 2) + 3);
}

$left = -1;
$right = 100;
while ($right - $left > 0.01) {
    $mid = ($left + $right) / 2;
    if (isOk($mid, $N)) {
        $right = $mid;
    } else {
        $left = $mid;
    }
}
echo $right . PHP_EOL;
