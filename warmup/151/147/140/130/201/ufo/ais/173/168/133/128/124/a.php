<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = 0;
if ($a >= $b) {
    $s += $a;
    $a--;
    if ($a >= $b) {
        $s += $a;
    } else {
        $s += $b;
    }
} else {
    $s += $b;
    $b--;
    if ($a >= $b) {
        $s += $a;
    } else {
        $s += $b;
    }
}
echo $s . PHP_EOL;
