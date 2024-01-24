<?php

$x = (float) trim(fgets(STDIN));
$y = 0;
$now = (float)100;
while (1) {
    $now = (float)(h($now));
    $y++;
    if ($x <= $now) {
        break;
    }
}
echo $y . PHP_EOL;
function h($n) {
    return ($n + floor(($n) * 0.01));
}
