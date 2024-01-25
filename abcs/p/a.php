<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = 1;
$c--;
$status = 1;
while (1) {
    if ($status === 1 && $b >= 1) {
        $b--;
        $r++;
        $status--;
    } elseif ($status === 1 && $a >= 1) {
        $a--;
        $status--;
    } elseif (($status === 0) && $c >= 1) {
        $c--;
        $r++;
        $status++;
    } elseif ($status === 0 && $b >= 1) {
        $b--;
        $r++;
    }
    if ($c === 0 && $b === 0) {
        break;
    }
    if ($status === 1 && $a === 0 && $b === 0) {
        break;
    }
}
echo $r . PHP_EOL;
