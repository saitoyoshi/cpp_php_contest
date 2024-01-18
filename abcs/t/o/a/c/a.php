<?php

$N = (int) trim(fgets(STDIN));
$p = [];
for ($i = 0; $i < $N; $i++) {
    $p[] = (int) trim(fgets(STDIN));
}
rsort($p);
$p[0] = $p[0]/2;
echo array_sum($p) . PHP_EOL;
