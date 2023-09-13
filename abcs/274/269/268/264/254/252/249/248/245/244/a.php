<?php

$N = (int) fgets(STDIN);
$s = trim(fgets(STDIN));
$a = str_split($s);
$x = $y = 0;
$vec = 0;
foreach ($a as $v) {
    if ($v === 'S' && $vec === 0) {
        $x++;
    } elseif ($v === 'S' && $vec === 1) {
        $y--;
    } elseif ($v === 'S' && $vec === 2) {
        $x--;
    } elseif ($v === 'S' && $vec === 3) {
        $y++;
    } elseif ($v === 'R') {
        $vec++;
        $vec %= 4;
    }
}
echo $x . ' ' . $y . PHP_EOL;
