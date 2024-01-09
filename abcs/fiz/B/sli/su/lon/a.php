<?php

$N = (int) trim(fgets(STDIN));
$pos = [];
for ($i = 0; $i < $N; $i++) {
    $pos[] = $arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$lines = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        $lines[] = sqrt(($pos[$i][0] - $pos[$j][0]) ** 2 + ($pos[$i][1] - $pos[$j][1]) ** 2);
    }
}

// var_dump(max($lines));
echo max($lines) . PHP_EOL;
