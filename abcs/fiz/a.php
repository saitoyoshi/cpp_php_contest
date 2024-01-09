<?php

$N = (int) trim(fgets(STDIN));
$sum = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        continue;
    }
    $sum += $i;
}
echo $sum . PHP_EOL;
