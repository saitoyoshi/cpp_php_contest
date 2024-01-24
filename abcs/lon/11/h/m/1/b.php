<?php

$x = (int) trim(fgets(STDIN));
$m = 100;
$y = 0;
while (1) {
    $m += intdiv($m,100);
    $y++;
    if ($m >= $x) {
        break;
    }
}
echo $y . PHP_EOL;
