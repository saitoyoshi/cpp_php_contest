<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$mArray = [];
for ($i = 0; $i < $N; $i++) {
    $mArray[] = (int)fgets(STDIN);
}
$sum = array_sum($mArray);
$min = min($mArray);
$X -= $sum;

echo ($N + (int)($X / $min)) . PHP_EOL;
