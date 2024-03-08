<?php

[$x,$y,$z] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if ($y<0) {
    $x = -$x;
    $y = -$y;
    $z = -$z;
}
if ($x < $y) {
    echo abs($x) . PHP_EOL;exit;
}
if ($x > $y) {
    if ($z > $y) {
        echo -1 . PHP_EOL;exit;
    }
    if ($z < $y) {
        echo (abs($z)+abs($x-$z)) . PHP_EOL;
    }
}
