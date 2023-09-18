<?php

$N = (int) fgets(STDIN);
$s = (trim(fgets(STDIN)));

$current = $s[0];
$sum = 1;
// しゃくとりむしのように
for ($i = 1; $i < $N; $i++) {
    $next = substr($s,$i,1);
    if ($current !== $next) {
        $sum++;
    }
    $current = $next;
}
echo $sum . PHP_EOL;
