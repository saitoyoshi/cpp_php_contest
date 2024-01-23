<?php

$N = (int) trim(fgets(STDIN));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$b = [];
foreach ($a as $v) {
    $b = h($v,$b);
}
$cnt = count(array_filter($b,fn($e) => $e > 3));
// var_dump($cnt);
echo $cnt . PHP_EOL;
function h($n,$a) {
    $a[] = 0;
    return array_map(fn($e) => $e+$n,$a);
}
