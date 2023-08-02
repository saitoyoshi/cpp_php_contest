<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$board = [];
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($strings[$i][$j] === "#") {
            $board[$i][$j] = 1;
        } else {
            $board[$i][$j] = 0;
        }
    }
}
$dx = [0,-1,0,1];
$dy = [-1,0,1,0];
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $cnt = 0;
    [$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    for ($j = 0; $j < 4; $j++)  {
        if (0 <= $x+$dx[$j] && $x+$dx[$j] < $H && 0 <= $y+$dy[$j] && $y+$dy[$j] < $W)
        $cnt += $board[$x+$dx[$j]][$y+$dy[$j]];
    }
    echo $cnt . PHP_EOL;
}
