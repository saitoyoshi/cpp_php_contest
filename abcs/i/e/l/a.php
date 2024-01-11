<?php

[$h,$w] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$lines = [];
for ($i = 0; $i < $h; $i++) {
    $lines[$i] = trim(fgets(STDIN));
}
// var_dump($lines);
$x = [];
$cnt = 0;
for ($j = 0; $j < $w; $j++) {
    for ($i = 0; $i < $h; $i++) {
        if ($lines[$i][$j] === '#') {
            $cnt++;
        }
    }
    $x[] = $cnt;
    $cnt = 0;
}
// var_dump($x);
echo implode(" ",$x) . PHP_EOL;
