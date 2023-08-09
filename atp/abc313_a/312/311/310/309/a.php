<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$dy = [0,-1,0,1];
$pos = [[null,null],[0,0],[0,1],[0,2],[1,0],[1,1],[1,2],[2,0],[2,1],[2,2]];
$posX = $pos[$A][0];
$posY = $pos[$A][1];
$board = [[1,2,3],[4,5,6],[7,8,9]];
for ($i = 0; $i < 4; $i++) {
    $x = $posX;
    $y = $posY + $dy[$i];
    if ($x >= 0 && $x < 3 && $y >= 0 && $y < 3) {
        if ($board[$x][$y] === $B) {
            echo "Yes" . PHP_EOL;
            exit;
        }
    }
}
echo "No" . PHP_EOL;
