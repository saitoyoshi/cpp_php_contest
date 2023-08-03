<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $N; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$grid = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($strings[$i][$j] === "#") {
            $grid[$i][$j] = 1;
        } else {
            $grid[$i][$j] = 0;
        }
    }
}
for ($k = 0; $k < $X; $k++) {
    $nextGrid = [];
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $cnt = countAround($grid,$i,$j,$N);
            $nextGrid[$i][$j] = nextGeneration($grid[$i][$j], $cnt);
        }
    }
    $grid = $nextGrid;
}
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($grid[$i][$j] === 1) {
            echo "#";
        } else {
            echo ".";
        }
    }
    echo PHP_EOL;
}
function countAround($grid, $i, $j, $N) {
    $cnt = 0;
    for ($y = $i-1; $y < $i + 2; $y++) {
        for ($x = $j-1; $x < $j + 2; $x++) {
            if (0 <= $y && $y < $N && 0 <= $x && $x < $N && ($y !== $i || $x !== $j)) {
                $cnt += $grid[$y][$x];
            }
        }
    }
    return $cnt;
}
function nextGeneration($status, $countAround) {
    if ($status === 0 && $countAround === 3) {
        return 1;
    }
    if ($status === 1 && ($countAround === 2 || $countAround === 3)) {
        return 1;
    }
    if ($status === 1 && $countAround <= 1) {
        return 0;
    }
    if ($status === 1 && $countAround >= 4) {
        return 0;
    }
    // ここをやっていないと、値が帰らなくて正答にならない
    return $status;
}
