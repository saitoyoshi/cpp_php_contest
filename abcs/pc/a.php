<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = [];
for ($i = 0; $i < $H; $i++) {
    $s = trim(fgets(STDIN));
    for ($j = 0; $j < $W-1; $j++) {
        if ($s[$j] === 'T' && $s[$j+1] === 'T') {
            $s[$j] = 'P';
            $s[$j+1] = 'C';
        }
    }
    $r[] = $s;
}
// var_dump($r);
echo implode(PHP_EOL,$r) . PHP_EOL;
