<?php

$x = $y = [];
for ($i = 0; $i < 3; $i++) {
    [$x[],$y[]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$ansX = solve($x);
$ansY = solve($y);
echo $ansX . ' ' . $ansY . PHP_EOL;
function solve($x) {
    if ($x[0] === $x[1]) {
        return $x[2];
    } elseif ($x[1] === $x[2]) {
        return $x[0];
    } elseif ($x[0] === $x[2]) {
        return $x[1];
    }
}
