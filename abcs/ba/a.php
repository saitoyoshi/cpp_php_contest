<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$field = [0,0,0,0];
$p = 0;
foreach ($a as $v) {
    $nextField = [0,0,0,0];
    $field[0] = 1;
    foreach ([0,1,2,3] as $pos) {
        if ($field[$pos] === 1) {
            if ($pos+ $v>= 4) {
                $p++;
            } else {
                $nextField[$pos+$v] = 1;
            }
        }
    }
    $field = $nextField;
}
echo $p . PHP_EOL;
