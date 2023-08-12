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
    $dx = [-1,-1,-1,0,0,1,1,1];
    $dy = [-1, 0,1,-1,1,-1,0,1];
    for ($d = 0; $d < 8; $d++) {
        $xx = $x + $dx[$d];
        $yy = $y + $dy[$d];
        if ($xx >= 0 && $xx < $H && $yy >= 0 && $yy < $W) {
            if ($table[$xx][$yy] === "#") {
                $cnt++;
            }
        }
    }
    return $cnt;
}
foreach ($table as $line) {
    echo $line . PHP_EOL;
}
