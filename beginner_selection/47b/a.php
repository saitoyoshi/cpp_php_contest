<?php

[$W, $H, $N] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$x = [];
$y = [];
$a = [];
for ($i = 0; $i < $N; $i++) {
    [$x[], $y[], $a[]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$square = [];
for ($i = 0; $i < $W; $i++) {
    for ($j = 0; $j < $H; $j++) {
        $square[$i][$j] = 1;
    }
}
for ($i = 0; $i < $N; $i++) {
    if ($a[$i] === 1) {
        $x1 = $x[$i];
        for ($j = 0; $j < $x1; $j++) {
            for ($k = 0; $k < $H; $k++) {
                $square[$j][$k] = 0;
            }
        }
    } elseif ($a[$i] === 2) {
        $x1 = $x[$i];
        for ($j = $x1; $j < $W; $j++) {
            for ($k = 0; $k < $H; $k++) {
                $square[$j][$k] = 0;
            }
        }
    } elseif ($a[$i] === 4) {
        $y1 = $y[$i];
        for ($j = 0 ; $j < $W; $j++) {
            for ($k = $y1; $k < $H; $k++) {
                $square[$j][$k] = 0;
            }
        }
    } else {
        $y1 = $y[$i];
        for ($j = 0 ; $j < $W; $j++) {
            for ($k = 0; $k < $y1; $k++) {
                $square[$j][$k] = 0;
            }
        }
    }
}
$result = 0;
for ($i = 0; $i < $W; $i++) {
    for ($j = 0; $j < $H; $j++) {
        $result += $square[$i][$j];
    }
}
echo $result . PHP_EOL;
