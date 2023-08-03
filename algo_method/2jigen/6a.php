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
// var_dump($table);
// exit;
$Q = (int) fgets(STDIN);
$dx = [0, 0, 1, 0, -1];
$dy = [0, -1, 0, 1, 0];
for ($k = 0; $k < $Q; $k++) {
    [$cmd,$p,$q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $cnt = 0;
    if ($cmd === 0) {
        for ($i = 0; $i < 5; $i++) {
            $x = $p+$dx[$i];
            $y = $q+$dy[$i];
            if (0 <= $x && $x < $H && 0 <= $y && $y < $W) {
                $table[$x][$y] = 1 - $table[$x][$y];
            }
        }
    } else {
        for ($i = 0; $i < 5; $i++) {
            $x = $p+$dx[$i];
            $y = $q+$dy[$i];
            if (0 <= $x && $x < $H && 0 <= $y && $y < $W) {

                if ($table[$x][$y] === 1) {
                    $cnt++;
                }
            }
        }
        echo $cnt . PHP_EOL;
    }

}
