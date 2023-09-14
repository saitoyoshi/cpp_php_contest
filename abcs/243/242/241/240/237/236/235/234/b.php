<?php

$N = (int) fgets(STDIN);
$x = [];
$y = [];
for ($i = 0; $i < $N; $i++) {
    [$x[],$y[]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$max = -1;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        $d = getDistance($x[$i],$y[$i],$x[$j],$y[$j]);
        $max = max($max,$d);
    }
}
echo $max . PHP_EOL;
function getDistance($x1,$y1,$x2,$y2) {
    return sqrt(abs($x1-$x2) ** 2 + abs($y1-$y2) ** 2);
}
