<?php

$N = (int) trim(fgets(STDIN));
$p = [];
for ($i = 0; $i < $N; $i++) {
    $p[] = (int) trim(fgets(STDIN));
}
rsort($p);
$sum = $p[0]/2;
for ($i = 1; $i < $N; $i++) {
    $sum += $p[$i];
}
echo $sum . PHP_EOL;
