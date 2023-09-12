<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$grid = [];
for ($i = 0; $i < $H; $i++) {
    $grid[] = trim(fgets(STDIN));
}
$a = array_fill(0,$W,0);
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($grid[$i][$j] === '#') {
            $a[$j]++;
        }
    }
}
echo implode(" ", $a) . PHP_EOL;
