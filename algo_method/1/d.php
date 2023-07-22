<?php

[$N,$M] = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$A = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$B = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));

$res = 0;
$used = array_fill(0,$N,false);
for ($j = 0; $j < $M; $j++) {
    for ($i = 0; $i < $N; $i++) {
        if ($used[$i]) {
            continue;
        }
        if ($A[$i] <= $B[$j]) {
            $used[$i] = true;
            $res++;
            break;
        }
    }
}
echo $res . PHP_EOL;
