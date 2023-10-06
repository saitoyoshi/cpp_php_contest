<?php

$N = (int) trim(fgets(STDIN));
$x = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = [];
$min = min($x);
$max = max($x);
for ($i = $min; $i <= $max; $i++) {
    $a[] = d($x,$i);
}
sort($a);
echo $a[0] . PHP_EOL;

function d($arr,$pos) {
    $result = 0;
    foreach ($arr as $v) {
        $result += ($pos-$v)**2;
    }
    return $result;
}
