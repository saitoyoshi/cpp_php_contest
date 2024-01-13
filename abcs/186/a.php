<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$lines = [];
$min = 101;
for ($i = 0; $i < $H; $i++) {
    $a = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $n = min($a);
    if ($n < $min) {
        $min = $n;
    }
    $lines[] = $a;
}
$cnt = 0;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($lines[$i][$j] !== $min) {
            $cnt += ($lines[$i][$j]-$min);
        }
    }
}
echo $cnt . PHP_EOL;
