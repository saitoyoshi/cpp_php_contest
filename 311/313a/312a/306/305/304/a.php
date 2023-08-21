<?php

$N = (int) fgets(STDIN);
$S = $A = [];
for ($i = 0; $i < $N; $i++) {
    [$S[], $A[]] = explode(" ", trim(fgets(STDIN)));
}
$A = array_map('intval', $A);
$min = min($A);
$index = array_search($min, $A);
for ($i = $index; $i < $N; $i++) {
    echo $S[$i] . PHP_EOL;
}
for ($i = 0; $i < $index; $i++) {
    echo $S[$i] . PHP_EOL;
}
