<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

rsort($arr);
for ($i = 0; $i < $N; $i++) {
    array_shift($arr);
}
for ($i = 0; $i < $N; $i++) {
    array_pop($arr);
}
$sum = array_sum($arr);

echo ((float) ($sum / (3 * $N))) . PHP_EOL;
