<?php

use Symfony\Component\VarDumper\VarDumper;

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$table = [];
for ($i = 0; $i < $H; $i++) {
    $table[] = trim(fgets(STDIN));
}
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($table[$i][$j] !== "#") {
            $table[$i][$j] = (int)countBom($i,$j);
        }
    }
}
// 1でない。そのますが0で、そのますが1なら#にする

function countBom($x,$y) {
    global $W;
    global $H;
    global $table;
    $cnt = 0;
    for ($i = $x-1; $i < $x+2; $i++) {
        for ($j = $y-1; $j < $y+2; $j++) {
            if ($i === $x && $j === $y) {
                continue;
            }
            if ($i >= 0 && $i < $H && $j >= 0 && $j < $W) {
                if ($table[$i][$j] === "#") {
                    $cnt++;
                }
            }
        }
    }
    return $cnt;
}
foreach ($table as $line) {
    echo $line . PHP_EOL;
}
