<?php

[$N,$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$tiles = [];
for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $N; $j++) {
        if ($i % 2 === 1) {
            if ($j % 2 === 1) {
                $tiles[$i][$j] = '.';
            } else {
                $tiles[$i][$j] = '#';
            }
        } else {
            if ($j % 2 === 1) {
                $tiles[$i][$j] = '#';
            } else {
                $tiles[$i][$j] = '.';
            }
        }
    }
}
$X = [];
for ($i = 1; $i <= $N*$a; $i++) {
    for ($j = 1; $j <= $N*$b; $j++) {
        $X[$i][$j] = $tiles[ceil($i/$a)][ceil($j/$b)];
    }
}
for ($i = 1; $i <= $N*$a; $i++) {
    for ($j = 1; $j <= $N*$b; $j++) {
        echo $X[$i][$j];
    }
    echo PHP_EOL;
}
