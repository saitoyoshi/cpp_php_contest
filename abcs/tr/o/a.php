<?php

$blocks = [];
for ($i = 0; $i <= 100; $i++) {
    for ($j = 0; $j <= 100; $j++) {
        $blocks[$i][$j] = 0;
    }
}
$N = (int) trim(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    [$a,$b,$c,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    for ($j = $a; $j < $b; $j++) {
        for ($k = $c; $k < $d; $k++) {
            $blocks[$j][$k] = 1;
        }
    }
}
// var_dump($blocks);exit;
$cnt = 0;
for ($i = 0; $i <= 100; $i++) {
    for ($j = 0; $j <= 100; $j++) {
        if ($blocks[$i][$j] === 1) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
