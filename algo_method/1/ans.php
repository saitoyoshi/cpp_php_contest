<?php

$N = (int) fgets(STDIN);
$x = [];
$y = [];
for ($i = 0; $i < $N; $i++) {  // 1からではなく、0からスタート
    [$x[], $y[]] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
$visited = array_fill(0, $N, false);
$visited[0] = true;  // 最初の点は訪れたとみなす
$res = 0;
$currentPointIdx = 0;

for ($i = 0; $i < $N - 1; $i++) {
    $minDistance = PHP_INT_MAX;
    $nextPointIdx = -1;
    for ($j = 0; $j < $N; $j++) {
        if ($visited[$j]) {
            continue;
        }
        $distance = dist($x[$currentPointIdx], $y[$currentPointIdx], $x[$j], $y[$j]);
        if ($minDistance > $distance) {
            $minDistance = $distance;
            $nextPointIdx = $j;
        }
    }
    $res += $minDistance;
    $visited[$nextPointIdx] = true;
    $currentPointIdx = $nextPointIdx;
}

$res += dist($x[$currentPointIdx], $y[$currentPointIdx], $x[0], $y[0]);

echo $res . PHP_EOL;

function dist($x1, $y1, $x2, $y2) {
    return sqrt(($x1 - $x2) ** 2 + ($y1 - $y2) ** 2);
}
?>
