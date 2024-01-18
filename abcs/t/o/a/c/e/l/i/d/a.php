<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = $pos = [];
for ($i = 0; $i < $H; $i++) {
    $s[] = trim(fgets(STDIN));
}
// var_dump($s);exit;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($s[$i][$j] === 'o') {
            $pos[] = [$i,$j];
        }
    }
}
// var_dump(abs($pos[0][0]-$pos[1][0])+abs($pos[0][1]-$pos[1][1]));
echo (abs($pos[0][0]-$pos[1][0])+abs($pos[0][1]-$pos[1][1])) . PHP_EOL;;
