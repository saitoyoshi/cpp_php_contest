<?php

[$W, $H, $N] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$x = [];
$y = [];
$a = [];
for ($i = 0; $i < $N; $i++) {
    [$x[], $y[], $a[]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$pos1 = [0,0];
$pos2 = [$W,$H];
for ($i = 0; $i < $N; $i++) {
    if ($a[$i] === 1) {
        $x1 = $x[$i];
        if ($pos1[0] < $x1) {
            $pos1[0] = $x1;
        }
    } elseif ($a[$i] === 2) {
        $x1 = $x[$i];
        if ($pos2[0] > $x1) {
            $pos2[0] = $x1;
        }
    } elseif ($a[$i] === 3) {
        $y1 = $y[$i];
        if ($pos1[1] < $y1) {
            $pos1[1] = $y1;
        }
    } else {
        $y1 = $y[$i];
        if ($pos2[1] > $y1) {
            $pos2[1] = $y1;
        }
    }
}
$result = ($pos2[0] - $pos1[0]) * ($pos2[1] - $pos1[1]);
echo $result . PHP_EOL;
