<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = 0;
$r += $b;
if ($c > $b) {
    $r += $b;
    $c -= $b;
} else {
    $r += $c;
    $c = 0;
}
if ($a > $c) {
    $r += $c;
} else {
    $r += $a;
    $c -= $a;
    if ($c > 0) {
        $r++;
    }
}
echo $r . PHP_EOL;
