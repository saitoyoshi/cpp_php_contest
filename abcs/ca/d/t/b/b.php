<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$p = 0;
$field = [0,0,0,0];
foreach ($a as $v) {
    $nextField = [0,0,0,0];
    $field[0] = 1;
    foreach([0,1,2,3] as $v2) {
        if ($field[$v2] === 1) {
            if ($v2+$v >= 4) {
                $p++;
            } else {
                $nextField[$v2+$v] = 1;
            }
        }
    }
    $field = $nextField;
}
echo $p . PHP_EOL;
