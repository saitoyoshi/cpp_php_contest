<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = [];
for ($i = 0; $i < $H; $i++) {
    $a[] = trim(fgets(STDIN));
}
// var_dump($a);exit;
$x = [];
for ($i = 0; $i < $W; $i++) {
    $cnt = 0;
    for ($j = 0; $j < $H; $j++) {
        if ($a[$j][$i] === '#') {
            $cnt++;
        }
    }
    $x[] = $cnt;
}
echo implode(" ", $x) . PHP_EOL;
