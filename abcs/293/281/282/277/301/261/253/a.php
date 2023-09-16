<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$table = [];
for ($i = 0; $i < $H; $i++) {
    $table[] = trim(fgets(STDIN));
}
$x = $y = [];
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($table[$i][$j] === 'o') {
            $y[] = $i;
            $x[] = $j;
        }
    }
}
echo (abs($x[0]-$x[1]) + abs($y[0]-$y[1])) . PHP_EOL;
