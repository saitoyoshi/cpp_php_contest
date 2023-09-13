<?php

$grid = [];
for ($i = 0; $i < 10; $i++) {
    $grid[] = trim(fgets(STDIN));
}
$a = $c = 11;
$b = $d = -1;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($grid[$i][$j] === "#") {
            $a = min($a, $i+1);
            $b = max($b,$i+1);
            $c = min($c,$j+1);
            $d = max($d,$j+1);
        }
    }
}
echo $a . ' ' . $b . PHP_EOL;
echo $c . ' ' . $d . PHP_EOL;
