<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$table = [];
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($strings[$i][$j] === "#") {
            $table[$i][$j] = 1;
        } else {
            $table[$i][$j] = 0;
        }
    }
}
$sumBlacks = getnum($table, $H,$W);
$dx = [-1,0,1,0,0];
$dy = [0,-1,0,1,0];
$Q = (int) fgets(STDIN);
for ($k = 0; $k < $Q; $k++) {
    $query = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if (count($query) === 3) {
        $p = $query[1];
        $q = $query[2];

        for ($i = 0; $i < 5; $i++) {
            $x = $p + $dx[$i];
            $y = $q + $dy[$i];

            if ($x >= 0 && $x < $H && $y >= 0 && $y < $W) {
                if ($table[$x][$y] === 0) {
                    // 白ますだった
                    $sumBlacks++;
                } else {
                    $sumBlacks--;
                }
                $table[$x][$y] = 1 - $table[$x][$y];
            }
        }
    } else {
        echo $sumBlacks . PHP_EOL;
    }
}


function getnum($table,$H,$W) {
    $cnt = 0;
    for ($i = 0; $i < $H; $i++) {
        for ($j = 0; $j < $W; $j++) {
            $cnt += $table[$i][$j];
        }
    }
    return $cnt;
}
