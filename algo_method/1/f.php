<?php

$N = (int) fgets(STDIN);
$x = [];
$y = [];
for ($i = 1; $i <= $N; $i++) {
    [$x[], $y[]] =  array_map(function ($v) {
        return (int) $v;
    }, explode(" ", trim(fgets(STDIN))));
}
$visited = array_fill(0,$N,false);
$res = 0;
$minDistance = PHP_INT_MAX;
$currentPointIdx = 0;
for ($i = $currentPointIdx; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        if ($visited[$j]) {
            continue;
        }
        $distance = dist($x[$i],$y[$i],$x[$j],$y[$j]);
        if ($minDistance > $distance) {
            $minDistance = $distance;
            $currentPointIdx = $j;
        }
    }
    $res += $minDistance;
    $visited[$currentPointIdx] = true;
    $minDistance = PHP_INT_MAX;
    $i = $currentPointIdx - 1;
}
// $res += dist($x[$currentPointIdx],$y[$currentPointIdx], $x[0],$y[0]);

echo $res . PHP_EOL;
function dist($x1,$y1,$x2,$y2) {
    return sqrt(($x1 - $x2) ** 2 + ($y1 - $y2) ** 2);
}
