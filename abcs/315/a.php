<?php

$M = (int) fgets(STDIN);
$D = array_map('intval',explode(" ", trim(fgets(STDIN))));
$t = $target = (array_sum($D) + 1) / 2;

$i = 0;
for (; $t > 0 ; $i++) {
    $t -= $D[$i];
}
for ($j = 0; $j < $i-1; $j++) {
    $target -= $D[$j];
}
echo $i . ' ' . $target . PHP_EOL;
